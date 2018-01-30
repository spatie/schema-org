<?php

namespace Spatie\SchemaOrg\Generator\Parser;

use Spatie\Async\Pool;
use Spatie\SchemaOrg\Generator\Type;
use Spatie\SchemaOrg\Generator\Property;
use Symfony\Component\DomCrawler\Crawler;
use Spatie\SchemaOrg\Generator\Definitions;
use Spatie\SchemaOrg\Generator\TypeCollection;
use Spatie\SchemaOrg\Generator\Parser\Tasks\ParseType;
use Spatie\SchemaOrg\Generator\Parser\Tasks\ParseProperty;

class DefinitionParser
{
    public function parse(Definitions $definitions): TypeCollection
    {
        $pool = Pool::create();

        $definitions
            ->query('[typeof="rdfs:Class"]')
            ->each(function (Crawler $crawler) use ($pool) {
                $pool->add(new ParseType($crawler->html()));
            });

        $definitions
            ->query('[typeof="rdf:Property"]')
            ->each(function (Crawler $crawler) use ($pool) {
                $pool->add(new ParseProperty($crawler->html()));
            });

        $types = new TypeCollection();
        $properties = [];

        foreach ($pool->wait() as $result) {
            if ($result instanceof Type) {
                $types->push($result);
            }

            if ($result instanceof Property) {
                $properties[] = $result;
            }
        }

        foreach ($properties as $property) {
            $types->addProperty($property);
        }

        return $types;
    }
}
