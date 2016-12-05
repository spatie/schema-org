<?php

namespace Spatie\SchemaOrg\Generator\Parser;

use Spatie\SchemaOrg\Generator\Property;
use Spatie\SchemaOrg\Generator\Type;
use Spatie\SchemaOrg\Generator\TypeCollection;
use Symfony\Component\DomCrawler\Crawler;

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
        $this->crawler
            ->filter('[typeof="rdfs:Class"]')
            ->each(function (Crawler $node) {
                $type = new Type();

                $type->name = $this->getText($node, '[property="rdfs:label"]');

                if (empty($type->name)) {
                    return;
                }

                if ($type->name === 'DataType') {
                    return;
                }

                $type->description = $this->getText($node, '[property="rdfs:comment"]');
                $type->parent = $this->getText($node, '[property="rdfs:subClassOf"]') ?: 'BaseType';
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
                $property->description = $this->getText($node, '[property="rdfs:comment"]');
                $property->resource = $this->getAttribute($node, 'resource');

                $node
                    ->filter('[property="http://schema.org/rangeIncludes"]')
                    ->each(function (Crawler $range) use ($property) {
                        $property->addRange(
                            $this->getTypeFromRange($this->getText($range))
                        );
                    });

                $node
                    ->filter('[property="http://schema.org/domainIncludes"]')
                    ->each(function (Crawler $domain) use ($property) {
                        $this->types->addPropertyToType($property, $domain->text());
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

        return $node->text();
    }

    protected function getAttribute(Crawler $node, string $attribute): string
    {
        if ($node->count() === 0) {
            return '';
        }

        return $node->attr($attribute);
    }

    protected function getTypeFromRange(string $range)
    {
        switch($range) {
            case 'Boolean':
                return 'bool';
            case 'False':
                return 'false';
            case 'True':
                return 'true';
            case 'Date':
            case 'Time':
            case 'DateTime':
                return '\DateTimeInterface';
            case 'Text':
            case 'URL':
                return 'string';
            case 'Number':
                return 'float|int';
            case 'Float':
                return 'float';
            case 'Integer':
                return 'int';
            default:
                return "\\Spatie\\SchemaOrg\\{$range}";
        }
    }
}
