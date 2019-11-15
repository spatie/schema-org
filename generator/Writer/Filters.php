<?php

namespace Spatie\SchemaOrg\Generator\Writer;

use Spatie\SchemaOrg\Generator\Type;

class Filters
{
    const PRIMARY_TYPES = ['bool', 'false', 'true', 'string', 'float', 'int'];

    public static function doc($text, array $options = []): string
    {
        $indentation = $options[0] ?? 0;
        $docblockPrefix = str_repeat(' ', $indentation * 4).' * ';

        $lineLength = 80 - 3 - ($indentation * 4);

        $text = str_replace('<br />', '', $text);

        $text = preg_replace('/(\n|\\\n)/', "\n".$docblockPrefix, $text);

        return wordwrap($text, $lineLength, "\n".$docblockPrefix);
    }

    public static function lcfirst($text): string
    {
        return lcfirst($text);
    }

    public static function param(array $ranges): string
    {
        return implode('|', array_map(function (string $type) {
            $isArray = strpos($type, '[]') !== false;
            $baseType = str_replace('[]', '', $type);

            if (in_array($baseType, self::PRIMARY_TYPES)) {
                return $type;
            }

            if (substr($type, 0, 1) === '\\') {
                return $type;
            }

            return "{$baseType}Contract".($isArray ? '[]' : '');
        }, $ranges));
    }

    public static function contracts(Type $type):array
    {
        $contracts = $type->parents;
        foreach ($type->properties as $property) {
            if (! $property->pending) {
                foreach ($property->ranges as $type) {
                    $baseType = str_replace('[]', '', $type);
                    if (in_array($baseType, self::PRIMARY_TYPES) || in_array($baseType, $contracts)) {
                        continue;
                    }
                    if (substr($type, 0, 1) === '\\') {
                        continue;
                    }
                    $contracts[] = $baseType;
                }
            }
        }
        sort($contracts);

        return $contracts;
    }
}
