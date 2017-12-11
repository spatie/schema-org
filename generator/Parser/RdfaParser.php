<?php

namespace Spatie\SchemaOrg\Generator\Parser;

use Amp\Parallel\Forking\Fork;
use Spatie\SchemaOrg\Generator\Property;
use Symfony\Component\DomCrawler\Crawler;
use Spatie\SchemaOrg\Generator\TypeCollection;
use Spatie\SchemaOrg\Generator\Parser\Tasks\ParseTypes;

class RdfaParser
{
    /** @var \Symfony\Component\DomCrawler\Crawler */
    protected $crawler;

    /** @var \Spatie\SchemaOrg\Generator\TypeCollection */
    protected $types;

    public function __construct($rdfa)
    {
        $this->crawler = new Crawler($rdfa);
        $this->types = new TypeCollection();
    }

    public function parse(): TypeCollection
    {
        $this->parseTypes();
        $this->parseProperties();

        return $this->types;
    }

    protected function parseTypes()
    {
        $tasks = $this->crawler
            ->filter('[typeof="rdfs:Class"]')
            ->each(function (Crawler $node) {
                return Fork::spawn(new ParseTypes($node))->join();
            });

        \Amp\all($tasks)->when(function () {
            die('Finished parsing types');
        });
    }

    protected function parseProperties()
    {
        $this->crawler
            ->filter('[typeof="rdf:Property"]')
            ->each(function (Crawler $node) {
                $property = new Property();

                $property->name = $this->getText($node, '[property="rdfs:label"]');

                if (empty($property->name)) {
                    return;
                }

                $property->description = $this->getText($node, '[property="rdfs:comment"]');
                $property->resource = $this->getAttribute($node, 'resource');

                $node
                    ->filter('[property="http://schema.org/domainIncludes"]')
                    ->each(function (Crawler $domain) use ($property) {
                        $this->types->addPropertyToType($property, $this->getText($domain));
                    });

                $node
                    ->filter('[property="http://schema.org/rangeIncludes"]')
                    ->each(function (Crawler $range) use ($property) {
                        $property->addRanges(
                            $this->castRangesToTypes($this->getText($range))
                        );
                    });
            });
    }

    protected function castRangesToTypes(string $range)
    {
        switch ($range) {
            case 'Boolean':
                return ['bool'];
            case 'False':
                return ['false'];
            case 'True':
                return ['true'];
            case 'Date':
            case 'Time':
            case 'DateTime':
                return ['\DateTimeInterface'];
            case 'Text':
            case 'URL':
                return ['string'];
            case 'Number':
                return ['float', 'int'];
            case 'Float':
                return ['float'];
            case 'Integer':
                return ['int'];
            default:
                return [$range];
        }
    }

    protected function getText(Crawler $node, string $selector = null) : string
    {
        if ($selector) {
            $node = $this->node->filter($selector)->first();
        }

        if ($node->count() === 0) {
            return '';
        }

        return trim($node->text());
    }

    protected function getAttribute(Crawler $node, string $attribute) : string
    {
        if ($node->count() === 0) {
            return '';
        }

        return $node->attr($attribute);
    }
}
