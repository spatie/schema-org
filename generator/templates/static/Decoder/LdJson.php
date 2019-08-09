<?php

namespace Spatie\SchemaOrg\Decoder;

use InvalidArgumentException;
use Spatie\SchemaOrg\BaseType;
use Spatie\SchemaOrg\Exceptions\InvalidType;

class LdJson
{
    public static function fromJson(string $json): BaseType
    {
        $data = json_decode($json, true);

        return static::fromArray($data);
    }

    public static function fromArray(array $data): BaseType
    {
        if (!isset($data['@context'])) {
            throw new InvalidArgumentException('No context given in schema.');
        }

        if (strpos($data['@context'], 'schema.org') === false) {
            throw new InvalidArgumentException('The given @context is not valid.');
        }

        unset($data['@context']);
        return static::generateType($data);
    }

    protected static function generateType(array $data): BaseType
    {
        if (!isset($data['@type'])) {
            throw new InvalidType('No type given in schema.');
        }

        $fqcn = '\\Spatie\\SchemaOrg\\' . $data['@type'];
        unset($data['@type']);
        if (!static::isValidType($fqcn)) {
            throw new InvalidType(sprintf('The given type "%s" is not an instance of "%s".', $fqcn, BaseType::class));
        }
        /** @var BaseType $type */
        $type = new $fqcn();

        foreach ($data as $property => $value) {
            if(is_array($value)) {
                if(isset($value['@type'])) {
                    $type->setProperty($property, static::generateType($value));
                    continue;
                }

                $type->setProperty($property, array_map(function ($value) {
                    if(is_array($value) && isset($value['@type'])) {
                        return static::generateType($value);
                    }

                    return $value;
                }, $value));
                continue;
            }

            $type->setProperty($property, $value);
        }

        return $type;
    }

    protected static function isValidType(string $fqcn): bool
    {
        return class_exists($fqcn) && is_a($fqcn, BaseType::class);
    }
}
