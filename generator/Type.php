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
    }

    public function sortProperties()
    {
        usort($this->properties, function (Property $a, Property $b) {
            return $a->name <=> $b->name;
        });
    }
}
