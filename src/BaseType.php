<?php

namespace Spatie\SchemaOrg;

use ReflectionClass;
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

    public function setProperty(string $property, $value, $validTypes = null)
    {
        if ($validTypes) {
            $this->validateValue($value, $validTypes);
        }

        $this->properties[$property] = $value;

        return $this;
    }

    protected function validateValue($value, array $validTypes)
    {
        foreach ($validTypes as $type) {
            if ($type === 'string' && is_string($value)) {
                return;
            }

            if ($value instanceof $type) {
                return;
            }
        }

        throw new InvalidProperty();
    }

    public function getProperties(): array
    {
        return $this->properties;
    }

    public function toArray(): array
    {
        $properties = array_map(function ($property) {
            if ($property instanceof Type) {
                $property = $property->toArray();
                unset($property['@context']);
            }

            if (is_object($property)) {
                throw new InvalidProperty();
            }

            return $property;
        }, $this->getProperties());

        return [
            '@context' => $this->getContext(),
            '@type' => $this->getType(),
        ] + $properties;
    }

    public function toScript(): string
    {
        return '<script type="application/ld+json">'.json_encode($this->toArray()).'</script>';
    }
}
