<?php

namespace Spatie\SchemaOrg\Generator\Parser\Tasks;

use Spatie\SchemaOrg\Generator\Type;
use Symfony\Component\DomCrawler\Crawler;

class ParseType extends Task
{
    public function __invoke(): ?Type
    {
        $node = new Crawler($this->definition);

        $type = new Type();

        $type->name = $this->getText($node, '[property="rdfs:label"]');

        if (in_array($type->name, ['', 'DataType', 'Float', 'Integer', 'URL'])) {
            return null;
        }

        $subClassOf = $node->filter('[property="rdfs:subClassOf"]');

        if ($subClassOf->count() > 0) {
            $type->parents = array_filter($subClassOf
                ->each(function (Crawler $node) {
                    $parent = str_replace('schema:', '', $this->getText($node));

                    return strpos($parent, ':') === false ? $parent : null;
                }));

            if (empty($type->parents)) {
                return null;
            }
        }

        $type->description = $this->getText($node, '[property="rdfs:comment"]');

        $type->resource = $this->getAttribute($node, 'resource');

        return $type;
    }
}
