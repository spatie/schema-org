<?php

namespace Spatie\SchemaOrg\Generator;

class TypeCollection
{
    /** @var array */
    protected $types = [];

    public function push(Type $type)
    {
        $this->types[$type->name] = $type;
    }

    public function addProperty(Property $property)
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
