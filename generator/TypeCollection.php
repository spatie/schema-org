<?php

namespace Spatie\SchemaOrg\Generator;

use Closure;
use Illuminate\Support\Collection;

class TypeCollection
{
    /** @var iterable|Collection|Type[]
     */
    private $types = [];

    /**
     * @param  iterable|Type[]  $types
     * @param  iterable|Property[]  $properties
     * @param  iterable|Constant[]  $constants
     */
    public function __construct(iterable $types, iterable $properties, iterable $constants)
    {
        // Initially map the types to named keys and sort them.
        $this->types = collect($types)
            ->mapWithKeys(static function (Type $type): array {
                return [$type->name => $type];
            })
            ->sortKeys();

        // Grab list of defined types.
        $definedTypes = $this->types->keys()->toArray();

        // Filter out every type's parents that aren't defined then cast to array.
        $this->types->each(static function (Type $type) use ($definedTypes): void {
            $type->parents = array_filter($type->parents, static function (string $parentType) use ($definedTypes): bool {
                return in_array($parentType, $definedTypes, true);
            });
        });

        foreach ($properties as $property) {
            foreach ($property->ranges as $range) {
                if (
                    strpos($range, '[]') === false
                    && ! in_array($range, ['bool', 'false', 'true', '\DateTimeInterface', 'string', 'float', 'int'])
                    && empty($this->types[$range])
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

    private function addProperty(Property $property): void
    {
        foreach ($property->types as $type) {
            if (! isset($this->types[$type])) {
                continue;
            }

            $this->types[$type]->addProperty($property);
        }
    }

    private function addConstant(Constant $constant): void
    {
        if (isset($this->types[$constant->type])) {
            $this->types[$constant->type]->addConstant($constant);
        }
    }

    public function each(Closure $callable): void
    {
        foreach ($this->types as $type) {
            $callable($type);
        }
    }

    public function toArray(): array
    {
        return collect($this->types)->all();
    }
}
