<?php

namespace Spatie\SchemaOrg;

use ReflectionClass;
use DateTimeInterface;
use Spatie\SchemaOrg\Exceptions\InvalidProperty;

abstract class BaseType implements Type
{
    /** @var array */
    protected $properties = [];

    public function getContext(): string
    {
        return 'http://schema.org';
    }

    public function getType(): string
    {
        return (new ReflectionClass($this))->getShortName();
    }

    public function setProperty(string $property, $value)
    {
        $this->properties[$property] = $value;

        return $this;
    }

    public function getProperty(string $property, $default = null)
    {
        return $this->properties[$property] ?? $default;
    }

    public function getProperties(): array
    {
        return $this->properties;
    }

    public function toArray(): array
    {
        $properties = $this->serialize($this->getProperties());

        return [
            '@context' => $this->getContext(),
            '@type' => $this->getType(),
        ] + $properties;
    }

    protected function serialize($property)
    {
        if (is_array($property)) {
            return array_map(function ($property) {
                return $this->serialize($property);
            }, $property);
        }

        if ($property instanceof Type) {
            $property = $property->toArray();
            unset($property['@context']);

            return $property;
        }

        if ($property instanceof DateTimeInterface) {
            return $property->format('c');
        }

        if (is_object($property)) {
            throw new InvalidProperty();
        }

        return $property;
    }

    public function toScript(): string
    {
        return '<script type="application/ld+json">'.
            json_encode($this->toArray()).
        '</script>';
    }
}
