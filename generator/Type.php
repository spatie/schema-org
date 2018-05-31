<?php

namespace Spatie\SchemaOrg\Generator;

class Type
{
    /** @var string */
    public $name;

    /** @var array */
    public $parents = [];

    /** @var string */
    public $description;

    /** @var array */
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
}
