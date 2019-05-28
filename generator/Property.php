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

    /** var array */
    public $types = [];

    /** @var array */
    public $ranges = [];

    /** @var bool */
    public $pending = false;

    public function addType(string $type)
    {
        $this->types[] = $type;
    }

    public function addRanges(array $ranges)
    {
        foreach ($ranges as $range) {
            $this->addRange($range);
        }

        sort($this->ranges);
    }

    private function addRange(string $range)
    {
        $this->ranges[] = $range;
        $this->ranges[] = "{$range}[]";

        $this->ranges = array_unique($this->ranges);
    }
}
