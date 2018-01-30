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

        $tasks = [];

        $definitions
            ->query('[typeof="rdfs:Class"]')
            ->each(function (Crawler $crawler) use (&$tasks) {
                $tasks[] = new ParseType($crawler->html());
            });

        $definitions
            ->query('[typeof="rdf:Property"]')
            ->each(function (Crawler $crawler) use (&$tasks) {
                $tasks[] = new ParseProperty($crawler->html());
            });

        foreach (array_chunk($tasks, 20) as $chunk) {
            $pool->add(function () use ($chunk) {
                return array_map(function ($task) {
                    return call_user_func($task);
                }, $chunk);
            });
        }

        $types = [];
        $properties = [];

        foreach ($pool->wait() as $results) {
            foreach ($results as $result) {
                if ($result instanceof Type) {
                    $types[] = $result;
                }

                if ($result instanceof Property) {
                    $properties[] = $result;
                }
            }
        }

        $typeCollection = new TypeCollection($types);

        $typeCollection->addProperties($properties);

        return $typeCollection;
    }
}
