<?php

namespace Spatie\SchemaOrg\Generator;

class Property
{
    public string $name;

    public string $description;

    public string $resource;

    /** @var Type[] */
    public array $types = [];

    /** @var string[] */
    public array $ranges = [];

    public bool $pending = false;

    public ?string $partOf;

    public ?string $source;

    public function addType(string $type): void
    {
        $this->types[] = $type;
    }

    public function addRanges(array $ranges): void
    {
        foreach ($ranges as $range) {
            $this->addRange($range);
        }

        sort($this->ranges);
    }

    private function addRange(string $range): void
    {
        $this->ranges[] = $range;
        $this->ranges[] = "{$range}[]";

        $this->ranges = array_unique($this->ranges);
    }
}
