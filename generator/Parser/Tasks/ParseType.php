<?php

namespace Spatie\SchemaOrg\Generator\Parser\Tasks;

use Spatie\SchemaOrg\Generator\Type;

class ParseType extends Task
{
    public function __invoke(): ?Type
    {
        $type = new Type();

        $type->className = $type->name = $this->getDefinitionProperty('rdfs:label');

        if ($type->className === '3DModel') {
            $type->className = 'ThreeDimensionalModel';
        }

        if (in_array($type->name, ['', 'DataType', 'Float', 'Integer', 'URL', 'Class'])) {
            return null;
        }

        $subClassOf = $this->getWrappedDefinitionProperty('rdfs:subClassOf');

        if ($subClassOf->count() > 0) {
            $type->parents = $subClassOf
                ->map(function (array $parent): string {
                    return $this->getResourceName($parent);
                })
                ->filter()
                ->toArray();

            if (empty($type->parents)) {
                return null;
            }
        }

        $type->description = $this->getDefinitionProperty('rdfs:comment');

        $type->resource = $this->getResource();

        $type->partOf = $this->definition['schema:isPartOf']['@id'] ?? null;

        $type->source = $this->definition['schema:source']['@id'] ?? null;

        return $type;
    }
}
