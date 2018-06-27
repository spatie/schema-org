<?php

namespace Spatie\SchemaOrg;

use ReflectionClass;
use InvalidArgumentException;

/**
 * @mixin Schema
 */
class Graph extends BaseType
{
    /** @var array */
    protected $hidden = [];

    public function __call(string $method, array $arguments)
    {
        if (is_callable([Schema::class, $method])) {
            return $this->getOrNew((new ReflectionClass(Schema::class))->getMethod($method)->getReturnType());
        }
    }

    public function add(Type $schema)
    {
        $type = get_class($schema);
        if ($this->has($type)) {
            throw new InvalidArgumentException(sprintf('The graph already has an item of type "%s".', $type));
        }

        return $this->set($schema);
    }

    public function has(string $type): bool
    {
        return $this->offsetExists($type);
    }

    public function set(Type $schema)
    {
        return $this->setProperty(get_class($schema), $schema);
    }

    public function get(string $type): Type
    {
        if (! $this->has($type)) {
            throw new InvalidArgumentException(sprintf('The graph does not have an item of type "%s".', $type));
        }

        return $this->getProperty($type);
    }

    public function getOrNew(string $type): Type
    {
        if ($this->has($type)) {
            return $this->get($type);
        } elseif (is_subclass_of($type, Type::class)) {
            return $this->properties[$type] = new $type();
        }

        throw new InvalidArgumentException(sprintf('The given type "%s" is not an instance of "%s".', $type, Type::class));
    }

    public function hide(string $type)
    {
        $this->hidden[$type] = true;

        return $this;
    }

    public function show(string $type)
    {
        $this->hidden[$type] = false;

        return $this;
    }

    public function toArray(): array
    {
        $properties = $this->getProperties();
        foreach ($this->hidden as $type => $hide) {
            if ($hide) {
                unset($properties[$type]);
            }
        }

        return [
            '@context' => $this->getContext(),
            '@graph' => $this->serializeProperty(array_values($properties)),
        ];
    }
}
