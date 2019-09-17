<?php

namespace Spatie\SchemaOrg\Generator;

class Type
{
    /** @var string */
    public $name;

    /** @var string[] */
    public $parents = [];

    /** @var string[] */
    public $grandParents = [];

    /** @var string */
    public $description;

    /** @var Property[] */
    public $properties = [];

    /** @var array */
    public $constants = [];

    /** @var string */
    public $resource;

    public function addProperty(Property $property)
    {
        $this->properties[$property->name] = $property;

        ksort($this->properties);
    }

    public function addConstant(Constant $constant)
    {
        $this->constants[$constant->name] = $constant;

        ksort($this->constants);
    }

    public function setTypeCollection(TypeCollection $typeCollection): void
    {
        if ($this->parentProperties !== null) {
            return;
        }

        $this->parentProperties = [];

        if (empty($this->parents)) {
            return;
        }

        $types = $typeCollection->toArray();

        foreach ($this->parents as $parent) {
            if (! isset($types[$parent])) {
                continue;
            }

            /** @var Type $parent */
            $parent = $types[$parent];
            $parent->setTypeCollection($typeCollection);

            $this->grandParents = array_merge($parent->parents, $parent->grandParents);

            foreach ($parent->properties as $property) {
                $this->addProperty($property);
            }

            foreach ($parent->parentProperties as $parentProperty) {
                $this->addProperty($parentProperty);
            }
        }
    }
}
