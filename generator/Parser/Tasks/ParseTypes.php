<?php

namespace Spatie\SchemaOrg\Generator\Parser\Tasks;

use Symfony\Component\DomCrawler\Crawler;

class ParseTypes
{
    /** @var string */
    protected $rdfa;

    public function __construct(string $rdfa)
    {
        $this->rdfa = $rdfa;
    }

    public function __invoke(): array
    {
        // $crawler = new Crawler($this->rdfa);

        // $types = $crawler->filter('[typeof="rdfs:Class"]');

        return 'foo';
        // return $types->each(function (Crawler $node) {
        // });
    }

    private function parseNode()
    {
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
    }
}
