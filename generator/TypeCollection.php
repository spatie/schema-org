<?php

namespace Spatie\SchemaOrg\Generator;

class TypeCollection
{
    /** @var array */
    private $types = [];

    public function __construct(array $types, array $properties, array $constants)
    {
        $typeNames = array_map(static function (Type $type) {
            return $type->name;
        }, $types);

        $this->types = array_combine($typeNames, $this->sanitizePendingParents($typeNames, $types));

        ksort($this->types);

        foreach ($properties as $property) {
            foreach ($property->ranges as $range) {
                if (
                    strpos($range, '[]') === false
                    && ! in_array($range, ['bool', 'false', 'true', '\DateTimeInterface', 'string', 'float', 'int'])
                    && ! in_array($range, ['GeospatialGeometry', 'EducationalOccupationalCredential', 'DefinedTerm', 'VirtualLocation', 'PhysicalActivityCategory', 'GovernmentBenefitsType'])
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

    /**
     * @param array $types
     *
     * @return array
     */
    private function sanitizePendingParents(array $typeNames, array $types): array
    {
        $types = collect($types)->map(static function ($type) use ($typeNames) {
            $type->parents = array_filter($type->parents, static function ($parent) use ($typeNames) {
               return in_array($parent, $typeNames);
            });
            return $type;
        })->toArray();

        return $types;
    }
}
