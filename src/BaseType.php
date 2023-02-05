<?php

namespace Spatie\SchemaOrg;

use ArrayAccess;
use DateTime;
use DateTimeInterface;
use JsonSerializable;
use ReflectionClass;
use Spatie\SchemaOrg\Exceptions\InvalidProperty;

abstract class BaseType implements Type, ArrayAccess, JsonSerializable
{
    /** @var array */
    protected $properties = [];

    /** @var string */
    protected $nonce = '';

    public function getContext(): string
    {
        return 'https://schema.org';
    }

    public function getType(): string
    {
        return (new ReflectionClass($this))->getShortName();
    }

    public function setProperty(string $property, $value)
    {
        if ($value !== null && $value !== '') {
            $this->properties[$property] = $value;
        }

        return $this;
    }

    public function addProperties(array $properties)
    {
        foreach ($properties as $property => $value) {
            $this->setProperty($property, $value);
        }

        return $this;
    }

    public function if($condition, $callback)
    {
        if ($condition) {
            $callback($this);
        }

        return $this;
    }

    public function setNonce(string $nonce)
    {
        $this->nonce = $nonce;

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

    /**
     * @return ReferencedType|static
     */
    public function referenced()
    {
        return new ReferencedType($this);
    }

    public function offsetExists($offset): bool
    {
        return array_key_exists($offset, $this->properties);
    }

    public function offsetGet($offset): mixed
    {
        return $this->getProperty($offset);
    }

    public function offsetSet($offset, $value): void
    {
        $this->setProperty($offset, $value);
    }

    public function offsetUnset($offset): void
    {
        unset($this->properties[$offset]);
    }

    public function toArray(): array
    {
        $this->serializeIdentifier();
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
            $property = $property->format(DateTime::ATOM);
        }

        if (is_object($property) && method_exists($property, '__toString')) {
            $property = (string) $property;
        }

        if (is_object($property)) {
            throw new InvalidProperty();
        }

        return $property;
    }

    protected function serializeIdentifier()
    {
        if (
            isset($this['identifier'])
            && ! $this['identifier'] instanceof Type
        ) {
            $this->setProperty('@id', $this['identifier']);
            unset($this['identifier']);
        }
    }

    public function nonceAttr(): string
    {
        if ($this->nonce) {
            $attr = ' nonce="'.$this->nonce.'"';
        } else {
            $attr = '';
        }

        return $attr;
    }

    public function toScript(): string
    {
        return '<script type="application/ld+json"'.$this->nonceAttr().'>'.json_encode($this->toArray(), JSON_UNESCAPED_UNICODE).'</script>';
    }

    public function jsonSerialize(): mixed
    {
        return $this->toArray();
    }

    public function __call(string $method, array $arguments)
    {
        return $this->setProperty($method, $arguments[0] ?? '');
    }

    public function __toString(): string
    {
        return $this->toScript();
    }
}
