<?php

namespace Spatie\SchemaOrg\Generator;

class TypeCollection
{
    /** @var array */
    private $types = [];

    public function __construct(array $types, array $properties)
    {
        $typeNames = array_map(function (Type $type) {
            return $type->name;
        }, $types);

        $this->types = array_combine($typeNames, $types);

        ksort($this->types);

        foreach ($properties as $property) {
            $this->addProperty($property);
        }
    }

    private function addProperty(Property $property)
    {
        foreach ($property->types as $type) {
            if (! isset($this->types[$type])) {
                continue;
            }

            $this->types[$type]->addProperty($property);
        }
    }

    public function each($callable)
    {
        foreach ($this->types as $type) {
            $callable($type);
        }
    }

    public function toArray(): array
    {
        return $this->types;
    }
}
