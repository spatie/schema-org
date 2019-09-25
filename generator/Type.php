<?php

namespace Spatie\SchemaOrg\Generator;

class Type
{
    /** @var string */
    public $name;

    /** @var string[] */
    public $parents = [];

    /** @var string */
    public $description;

    /** @var Property[] */
    public $properties = [];

    /** @var array */
    public $constants = [];

    /** @var string */
    public $resource;

    /** @var bool */
    protected $parentsLoaded = false;

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
        if ($this->parentsLoaded) {
            return;
        }

        $this->parentsLoaded = true;

        if (empty($this->parents)) {
            return;
        }

        $types = $typeCollection->toArray();

        foreach ($this->parents as $parentType) {
            if (! isset($types[$parentType])) {
                continue;
            }

            /** @var Type $parent */
            $parent = $types[$parentType];
            $parent->setTypeCollection($typeCollection);

            $this->parents = array_unique(array_merge($this->parents, $parent->parents));

            sort($this->parents);

            foreach ($parent->properties as $property) {
                $this->addProperty($property);
            }
        }
    }
}
