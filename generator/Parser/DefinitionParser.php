<?php

namespace Spatie\SchemaOrg\Generator\Parser;

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
        $types = $definitions
            ->query('[typeof="rdfs:Class"]')
            ->each(function (Crawler $crawler) {
                $node = $crawler->getNode(0);
                $html = $node->ownerDocument->saveHTML($node);

                return call_user_func(new ParseType($html));
            });

        $properties = $definitions
            ->query('[typeof="rdf:Property"]')
            ->each(function (Crawler $crawler) use (&$properties) {
                $node = $crawler->getNode(0);
                $html = $node->ownerDocument->saveHTML($node);

                return call_user_func(new ParseProperty($html));
            });

        return new TypeCollection(
            array_filter($types), array_filter($properties)
        );
    }
}
