<?php

namespace Spatie\SchemaOrg;

use DateTime;
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

    public function if($condition, $callback)
    {
        if ($condition) {
            $callback($this);
        }

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
        $properties = $this->serializeProperty($this->getProperties());

        return [
            '@context' => $this->getContext(),
            '@type' => $this->getType(),
        ] + $properties;
    }

    protected function serializeProperty($property)
    {
        if (is_array($property)) {
            return array_map([$this, 'serializeProperty'], $property);
        }

        if ($property instanceof Type) {
            $property = $property->toArray();
            unset($property['@context']);
        }

        if ($property instanceof DateTimeInterface) {
            $property = $property->format(DateTime::ISO8601);
        }

        if (is_object($property)) {
            throw new InvalidProperty();
        }

        return $property;
    }

    public function toScript(): string
    {
        return '<script type="application/ld+json">'.json_encode($this->toArray()).'</script>';
    }

    public function __toString(): string
    {
        return $this->toScript();
    }
}
