<?php

namespace Spatie\SchemaOrg;

use JsonSerializable;

class ReferencedType implements Type, JsonSerializable
{
    /** @var Type */
    protected $type;

    public function __construct(Type $type)
    {
        $this->type = $type;
    }

    public function toArray(): array
    {
        return [
            '@id' => $this->resolveIdentifier(),
        ];
    }

    protected function resolveIdentifier()
    {
        if (! $this->type instanceof BaseType) {
            return $this->type->toArray()['@id'] ?? null;
        }

        $identifier = $this->type->getProperty('identifier');

        if ($identifier === null || $identifier instanceof Type) {
            $identifier = $this->type->getProperty('@id');
        }

        return $identifier instanceof Type ? null : $identifier;
    }

    public function toScript(): string
    {
        return $this->type->toScript();
    }

    public function jsonSerialize(): mixed
    {
        return $this->toArray();
    }

    public function __toString(): string
    {
        return $this->toScript();
    }
}
