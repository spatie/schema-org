<?php

namespace Spatie\SchemaOrg;

use ArrayAccess;
use BadMethodCallException;
use JsonSerializable;
use ReflectionClass;
use ReflectionNamedType;
use Spatie\SchemaOrg\Exceptions\InvalidType;
use Spatie\SchemaOrg\Exceptions\TypeAlreadyInGraph;
use Spatie\SchemaOrg\Exceptions\TypeNotInGraph;

/**
 * @mixin \Spatie\SchemaOrg\Schema
 */
class Graph implements Type, ArrayAccess, JsonSerializable
{
    public const IDENTIFIER_DEFAULT = 'default';

    /** @var array */
    protected $elements = [];

    /** @var array */
    protected $hidden = [];

    /**
     * This overloads all \Spatie\SchemaOrg\Schema construction methods.
     * You can call them the same like on the \Spatie\SchemaOrg\Schema class.
     * But you can also use the extended signatures:
     *
     * Graph::organisation(): Organisation
     * Graph::organisation('spatie'): Organisation
     * Graph::organisation(function(Organisation $organisation, Graph $graph) {}): Graph
     * Graph::organisation('spatie', function(Organisation $organisation, Graph $graph) {}): Graph
     *
     * @see \Spatie\SchemaOrg\Schema
     *
     * @param string $method
     * @param array $arguments
     *
     * @return $this|Type
     *
     * @throws \ReflectionException
     * @throws \BadMethodCallException
     */
    public function __call(string $method, array $arguments)
    {
        if (is_callable([Schema::class, $method])) {
            $type = (new ReflectionClass(Schema::class))->getMethod($method)->getReturnType();

            if (! $type instanceof ReflectionNamedType) {
                throw new BadMethodCallException(sprintf('The method "%" has an invalid return type which does not resolve to "%s".', $method, ReflectionNamedType::class));
            }

            $identifier = self::IDENTIFIER_DEFAULT;

            if (isset($arguments[0])) {
                if (is_string($arguments[0])) {
                    $identifier = $arguments[0];

                    if (isset($arguments[1]) && is_callable($arguments[1])) {
                        $callback = $arguments[1];
                    }
                } elseif (is_callable($arguments[0])) {
                    $callback = $arguments[0];
                }
            }

            $schema = $this->getOrCreate($type->getName(), $identifier);

            if (isset($callback)) {
                call_user_func($callback, $schema, $this);

                return $this;
            }

            return $schema;
        }

        throw new BadMethodCallException(sprintf('The method "%" does not exist on class "%s".', $method, get_class($this)));
    }

    public function add(Type $schema, string $identifier = self::IDENTIFIER_DEFAULT): self
    {
        $type = get_class($schema);

        if ($this->has($type, $identifier)) {
            throw new TypeAlreadyInGraph(sprintf('The graph already has an item of type "%s" with identifier "%s".', $type, $identifier));
        }

        return $this->set($schema, $identifier);
    }

    public function has(string $type, string $identifier = self::IDENTIFIER_DEFAULT): bool
    {
        return array_key_exists($type, $this->elements) && array_key_exists($identifier, $this->elements[$type]);
    }

    public function set(Type $schema, string $identifier = self::IDENTIFIER_DEFAULT)
    {
        $this->elements[get_class($schema)][$identifier] = $schema;

        return $this;
    }

    public function get(string $type, string $identifier = self::IDENTIFIER_DEFAULT): Type
    {
        if (! $this->has($type, $identifier)) {
            throw new TypeNotInGraph(sprintf('The graph does not have an item of type "%s" with identifier "%s".', $type, $identifier));
        }

        return $this->elements[$type][$identifier];
    }

    public function getOrCreate(string $type, string $identifier = self::IDENTIFIER_DEFAULT): Type
    {
        if (! is_subclass_of($type, Type::class)) {
            throw new InvalidType(sprintf('The given type "%s" is not an instance of "%s".', $type, Type::class));
        }

        if (! $this->has($type, $identifier)) {
            $this->set(new $type(), $identifier);
        }

        return $this->get($type, $identifier);
    }

    public function hide(string $type, ?string $identifier = self::IDENTIFIER_DEFAULT): self
    {
        // hide all
        if ($identifier === null) {
            $this->hidden[$type] = true;

            return $this;
        }

        // hide single one if nothing configured
        if (!isset($this->hidden[$type])) {
            $this->hidden[$type][$identifier] = true;

            return $this;
        }

        // hide single one only if all are not already hidden
        if ($this->hidden[$type] !== true) {
            $this->hidden[$type][$identifier] = true;

            return $this;
        }

        return $this;
    }

    public function show(string $type, ?string $identifier = self::IDENTIFIER_DEFAULT): self
    {
        // show all
        if ($identifier === null) {
            $this->hidden[$type] = false;

            return $this;
        }

        // show single one if nothing configured
        if (!isset($this->hidden[$type])) {
            $this->hidden[$type][$identifier] = false;

            return $this;
        }

        // ignore if everything is shown
        if ($this->hidden[$type] === false) {
            return $this;
        }

        // show single one if identifier configuration exists
        if (is_array($this->hidden[$type])) {
            $this->hidden[$type][$identifier] = false;

            return $this;
        }

        if ($this->hidden[$type] === true) {
            $this->hidden[$type] = [];

            // keep everything hidden and show only single one
            if (isset($this->elements[$type])) {
                foreach ($this->elements[$type] as $id => $element) {
                    $this->hidden[$type][$id] = $id !== $identifier;
                }

                return $this;
            }

            // show single one if no elements exist
            $this->hidden[$type][$identifier] = false;

            return $this;
        }

        return $this;
    }

    public function toArray(): array
    {
        $elements = $this->getElements();

        foreach ($this->hidden as $type => $hideAll) {
            if (is_bool($hideAll) && $hideAll) {
                unset($elements[$type]);

                continue;
            }

            if (is_array($hideAll)) {
                foreach ($hideAll as $identifier => $hide) {
                    if (is_bool($hide) && $hide) {
                        unset($elements[$type][$identifier]);
                    }
                }
            }
        }

        $elements = array_reduce($elements, function (array $carry, array $types) {
            return array_merge($carry, array_values($types));
        }, []);

        return [
            '@context' => $this->getContext(),
            '@graph' => $this->serializeElement(array_values($elements)),
        ];
    }
    protected function serializeElement($element)
    {
        if (is_array($element)) {
            return array_map([$this, 'serializeElement'], array_values($element));
        }

        if ($element instanceof Type) {
            $element = $element->toArray();
            unset($element['@context']);
        }

        return $element;
    }

    public function getElements(): array
    {
        return $this->elements;
    }

    public function getContext(): string
    {
        return 'https://schema.org';
    }

    public function toScript(): string
    {
        return '<script type="application/ld+json">'.json_encode($this, JSON_UNESCAPED_UNICODE).'</script>';
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    public function __toString(): string
    {
        return $this->toScript();
    }

    protected function getTypeAndIdentifier(string $key): array
    {
        if (strpos($key, '.') === false) {
            return [$key, self::IDENTIFIER_DEFAULT];
        }

        return explode('.', $key);
    }

    public function offsetExists($offset)
    {
        [$type, $identifier] = $this->getTypeAndIdentifier($offset);

        return $this->has($type, $identifier);
    }

    public function offsetGet($offset)
    {
        [$type, $identifier] = $this->getTypeAndIdentifier($offset);

        return $this->get($type, $identifier);
    }

    public function offsetSet($offset, $value)
    {
        $identifier = $offset;

        if (strpos($offset, '.') !== false) {
            [$type, $identifier] = $this->getTypeAndIdentifier($offset);
        }

        $this->set($value, $identifier);
    }

    public function offsetUnset($offset)
    {
        [$type, $identifier] = $this->getTypeAndIdentifier($offset);

        unset($this->elements[$type][$identifier]);
    }
}
