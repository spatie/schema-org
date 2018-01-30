<?php

namespace Spatie\SchemaOrg\Generator\Parser\Tasks;

use Spatie\SchemaOrg\Generator\Type;
use Symfony\Component\DomCrawler\Crawler;
use Spatie\SchemaOrg\Generator\Parser\CrawlsDefinitions;

class ParseType
{
    use CrawlsDefinitions;

    /** @string */
    protected $definition;

    public function __construct(string $definition)
    {
        $this->definition = $definition;
    }

    public function __invoke(): ?Type
    {
        $node = new Crawler($this->definition);

        $type = new Type();

        $type->name = $this->getText($node, '[property="rdfs:label"]');

        if (in_array($type->name, ['', 'DataType', 'Float', 'Integer', 'URL'])) {
            return null;
        }

        $type->description = $this->getText($node, '[property="rdfs:comment"]');
        $type->parent = $this->getText($node, '[property="rdfs:subClassOf"]') ? : 'BaseType';

        if (strpos($type->parent, ':') !== false) {
            return null;
        }

        $type->resource = $this->getAttribute($node, 'resource');

        return $type;
    }
}
