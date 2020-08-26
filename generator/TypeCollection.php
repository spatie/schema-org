<?php

namespace Spatie\SchemaOrg\Generator;

class TypeCollection
{
    /** @var array */
    private $types = [];

    public function __construct(array $types, array $properties, array $constants)
    {
        // Initially map the types to named keys and sort them.
        $this->types = collect($types)->mapWithKeys(static function (Type $type) {
            return [$type->name => $type];
        })->sortKeys();

        // Grab list of defined types.
        $definedTypes = $this->types->keys()->toArray();
        // Filter out every type's parents that aren't defined then cast to array.
        $this->types = $this->types->map(static function ($type) use ($definedTypes) {
            $type->parents = array_filter($type->parents, static function ($parentType) use ($definedTypes) {
                return in_array($parentType, $definedTypes, true);
            });
            return $type;
        })->toArray();

        foreach ($properties as $property) {
            foreach ($property->ranges as $range) {
                if (
                    strpos($range, '[]') === false
                    && ! in_array($range, ['bool', 'false', 'true', '\DateTimeInterface', 'string', 'float', 'int'])
                    && ! isset($this->types[$range])
                ) {
                    $property->pending = true;
                }
            }

            $this->addProperty($property);
        }

        foreach ($constants as $constant) {
            $this->addConstant($constant);
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

    private function addConstant(Constant $constant)
    {
        if (isset($this->types[$constant->type])) {
            $this->types[$constant->type]->addConstant($constant);
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
