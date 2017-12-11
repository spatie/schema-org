<?php

namespace Spatie\SchemaOrg\Generator\Parser\Tasks;

use Spatie\SchemaOrg\Generator\Type;

class ParseTypes extends Task
{
    /**
     * @return \Spatie\SchemaOrg\Generator\Type|null
     */
    public function __invoke()
    {
        $type = new Type();

        $type->name = $this->getText('[property="rdfs:label"]');

        if (in_array($type->name, ['', 'DataType', 'Float', 'Integer', 'URL'])) {
            return;
        }

        $type->description = $this->getText('[property="rdfs:comment"]');
        $type->parent = $this->getText('[property="rdfs:subClassOf"]') ?: 'BaseType';

        if (strpos($type->parent, ':') !== false) {
            return;
        }

        $type->resource = $this->getAttribute('resource');

        return $type;
    }
}
