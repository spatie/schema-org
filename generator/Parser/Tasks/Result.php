<?php

namespace Spatie\SchemaOrg\Generator\Parser\Tasks;

use Spatie\SchemaOrg\Generator\Type;
use Spatie\SchemaOrg\Generator\Property;

class Result
{
    const TYPE_EMPTY = 'empty';
    const TYPE_TYPE = 'type';
    const TYPE_PROPERTY = 'property';

    /** @var string */
    private $type;

    /** @var mixed */
    private $result;

    private function __construct(string $type, $result)
    {
        $this->type = $type;
        $this->result = $result;
    }

    public static function empty(): self
    {
        return new self(self::TYPE_EMPTY, null);
    }

    public static function type(Type $type) : self
    {
        return new self(self::TYPE_TYPE, $type);
    }

    public static function property(Property $property): self
    {
        return new self(self::TYPE_PROPERTY, $property);
    }
}
