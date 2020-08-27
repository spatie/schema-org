<?php

namespace Spatie\SchemaOrg\Generator\Parser\Tasks;

use Spatie\SchemaOrg\Generator\Constant;

class ParseConstant extends Task
{
    public function __invoke(): ?Constant
    {
        $constant = new Constant();

        $constant->name = preg_replace('/\s+/', '_', $this->getDefinitionProperty('rdfs:label'));

        if (empty($constant->name)) {
            return null;
        }

        $constant->description = $this->getDefinitionProperty('rdfs:comment');

        $constant->value = $this->getResource();

        $constant->partOf = $this->definition['https://schema.org/isPartOf']['@id'] ?? null;

        $constant->source = $this->definition['https://schema.org/source']['@id'] ?? null;

        return $constant;
    }
}
