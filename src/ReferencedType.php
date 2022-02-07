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
            '@id' => $this->type->toArray()['@id'] ?? null,
        ];
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
