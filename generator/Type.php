<?php

namespace Spatie\SchemaOrg\Generator;

class Type
{
    /** @var string */
    public $name;

    /** @var string */
    public $parent;

    /** @var string */
    public $description;

    /** @var array */
    public $properties = [];

    /** @var string */
    public $resource;

    public function addProperty(Property $property)
    {
        $this->properties[$property->name] = $property;

        ksort($this->properties);
    }
}
