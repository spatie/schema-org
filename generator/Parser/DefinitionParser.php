<?php

namespace Spatie\SchemaOrg\Generator\Parser;

use Symfony\Component\DomCrawler\Crawler;
use Spatie\SchemaOrg\Generator\Definitions;
use Spatie\SchemaOrg\Generator\TypeCollection;
use Spatie\SchemaOrg\Generator\Parser\Tasks\ParseType;
use Spatie\SchemaOrg\Generator\Parser\Tasks\ParseConstant;
use Spatie\SchemaOrg\Generator\Parser\Tasks\ParseProperty;

class DefinitionParser
{
    public function parse(Definitions $definitions): TypeCollection
    {
        $sources = $definitions->getSourceIds();
        $types = [];
        $properties = [];
        $constants = [];

        foreach ($sources as $sourceId) {
            $types = array_merge($types, array_filter($definitions
                ->query($sourceId, '[typeof="rdfs:Class"]')
                ->each(function (Crawler $crawler) {
                    return call_user_func(ParseType::fromCrawler($crawler));
                })));
        }

        foreach ($sources as $sourceId) {
            $properties = array_merge($properties, array_filter($definitions
                ->query($sourceId, '[typeof="rdf:Property"]')
                ->each(function (Crawler $crawler) {
                    return call_user_func(ParseProperty::fromCrawler($crawler));
                })));
        }

        foreach ($sources as $sourceId) {
            foreach ($types as $type) {
                $constants = array_merge($constants, array_filter($definitions
                    ->query($sourceId, '[typeof="'.$type->resource.'"]')
                    ->each(function (Crawler $crawler) use ($type) {
                        $constant = call_user_func(ParseConstant::fromCrawler($crawler));

                        if (! is_null($constant)) {
                            $constant->type = $type->name;
                        }

                        return $constant;
                    })));
            }
        }

        return new TypeCollection($types, $properties, $constants);
    }
}
