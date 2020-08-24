<?php

namespace Spatie\SchemaOrg\Generator\Parser;

use Spatie\SchemaOrg\Generator\Definitions;
use Spatie\SchemaOrg\Generator\Parser\Tasks\ParseConstant;
use Spatie\SchemaOrg\Generator\Parser\Tasks\ParseProperty;
use Spatie\SchemaOrg\Generator\Parser\Tasks\ParseType;
use Spatie\SchemaOrg\Generator\TypeCollection;

class DefinitionParser
{
    public function parse(Definitions $definitions): TypeCollection
    {
        $types = array_filter($definitions
            ->query('rdfs:Class')
            ->map(static function (array $jsonLdArray) {
                return call_user_func(ParseType::fromJsonLdArray($jsonLdArray));
            })->toArray());

        $properties = array_filter($definitions
            ->query('rdf:Property')
            ->map(static function (array $jsonLdArray) {
                return call_user_func(ParseProperty::fromJsonLdArray($jsonLdArray));
            })->toArray());

        $constants = [];

        foreach ($types as $type) {
            $constants = array_merge($constants, array_filter($definitions
                ->query($type->resource)
                ->map(function (array $constant) use ($type) {
                    $constant = call_user_func(ParseConstant::fromJsonLdArray($constant));

                    if (! is_null($constant)) {
                        $constant->type = $type->name;
                    }

                    return $constant;
                })->toArray()));
        }

        return new TypeCollection($types, $properties, $constants);
    }
}
