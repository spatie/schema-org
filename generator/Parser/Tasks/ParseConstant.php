<?php

namespace Spatie\SchemaOrg\Generator\Parser\Tasks;

use Spatie\SchemaOrg\Generator\Constant;
use Symfony\Component\DomCrawler\Crawler;

class ParseConstant extends Task
{
    public function __invoke(): ?Constant
    {
        $node = new Crawler($this->definition);

        $constant = new Constant();

        $constant->name = $this->getText($node, '[property="rdfs:label"]');

        if (empty($constant->name)) {
            return null;
        }

        $constant->description = $this->getText($node, '[property="rdfs:comment"]');

        $constant->value = $this->getAttribute($node, 'resource');

        return $constant;
    }
}
