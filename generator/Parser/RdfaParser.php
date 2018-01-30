<?php

namespace Spatie\SchemaOrg\Generator\Parser;

use Spatie\Async\Pool;
use Spatie\SchemaOrg\Generator\Type;
use Spatie\SchemaOrg\Generator\Property;
use Symfony\Component\DomCrawler\Crawler;
use Spatie\SchemaOrg\Generator\TypeCollection;
use Spatie\SchemaOrg\Generator\Parser\Tasks\ParseTypes;

class RdfaParser
{
    public function parse(string $rdfa): TypeCollection
    {
        $pool = Pool::create();

        $pool
            ->add(new ParseTypes($rdfa))
            ->then(function ($types) {
                dd($types);
            });

        dd($pool->status());
        // $pool->add(function () {
        //     $this->parseProperties();
        // });

        $pool->wait();
    }

    protected function parseTypes()
    {
        $crawler
            ->filter('[typeof="rdfs:Class"]')
            ->each(function (Crawler $node) {
                $type = new Type();

                $type->name = $this->getText($node, '[property="rdfs:label"]');

                if (in_array($type->name, ['', 'DataType', 'Float', 'Integer', 'URL'])) {
                    return;
                }

                $type->description = $this->getText($node, '[property="rdfs:comment"]');
                $type->parent = $this->getText($node, '[property="rdfs:subClassOf"]') ?: 'BaseType';

                if (strpos($type->parent, ':') !== false) {
                    return;
                }

                $type->resource = $this->getAttribute($node, 'resource');

                $this->types->push($type);
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

    protected function getText(Crawler $node, string $selector = null): string
    {
        if ($selector) {
            $node = $node->filter($selector)->first();
        }

        if ($node->count() === 0) {
            return '';
        }

        return trim($node->text());
    }

    protected function getAttribute(Crawler $node, string $attribute): string
    {
        if ($node->count() === 0) {
            return '';
        }

        return $node->attr($attribute);
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
}
