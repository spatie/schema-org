<?php

namespace Spatie\SchemaOrg\Decoder;

use Spatie\SchemaOrg\BaseType;
use Spatie\SchemaOrg\Graph;

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
            throw new \InvalidArgumentException('no @context');
        }

        if (strpos($data['@context'], 'schema.org') === false) {
            throw new \InvalidArgumentException('@context invalid');
        }

        if (!isset($data['@type'])) {
            throw new \InvalidArgumentException('no @type');
        }

        unset($data['@context']);
        return static::generateType($data);
    }

    protected static function generateType(array $data): BaseType
    {
        if (!isset($data['@type'])) {
            throw new \InvalidArgumentException('no @type');
        }

        $fqcn = '\\Spatie\\SchemaOrg\\' . $data['@type'];
        unset($data['@type']);
        if (!static::isValidType($fqcn)) {
            throw new \InvalidArgumentException('type does not exist');
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
        return class_exists($fqcn);
    }
}
