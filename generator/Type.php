<?php

namespace Spatie\SchemaOrg\Generator;

class Type
{
    public string $name;

    public string $className;

    /** @var string[] */
    public array $parents = [];

    public string $description;

    /** @var Property[] */
    public array $properties = [];

    /** @var Constant[] */
    public array $constants = [];

    public string $resource;

    public ?string $partOf;

    public ?string $source;

    protected bool $parentsLoaded = false;

    public function addProperty(Property $property): void
    {
        $this->properties[$property->name] = $property;

        ksort($this->properties);
    }

    public function addConstant(Constant $constant): void
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
