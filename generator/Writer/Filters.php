<?php

namespace Spatie\SchemaOrg\Generator\Writer;

class Filters
{
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

            if (in_array($baseType, ['bool', 'false', 'true', 'string', 'float', 'int'])) {
                return $type;
            }

            if (substr($type, 0, 1) === '\\') {
                return $type;
            }

            return "\\Spatie\\SchemaOrg\\Contracts\\{$baseType}Contract".($isArray ? '[]' : '');
        }, $ranges));
    }
}
