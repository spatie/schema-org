<?php

namespace Spatie\SchemaOrg\Generator;

class Property
{
    /** @var string */
    public $name;

    /** @var string */
    public $description;

    /** @var string */
    public $resource;

    /** @var array */
    public $ranges = [];

    public function addRange(string $range)
    {
        $this->ranges[$range] = $range;

        $this->ranges = array_unique($this->ranges);
    }
}
