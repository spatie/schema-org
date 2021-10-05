<?php

namespace Spatie\SchemaOrg\Generator\Writer;

class Filters
{
    public static function doc($text, array $options = []): string
    {
        $indentation = $options[0] ?? 0;
        $docblockPrefix = str_repeat(' ', $indentation * 4).' * ';

        $lineLength = 80 - 3 - ($indentation * 4);

        // Remove HTML breaks
        $text = str_replace(['<br/>', '<br />'], '', $text);
        $text = str_replace(['&amp;', '&lt;', '&gt;', '&quot;'], ['&', '<', '>', '"'], $text);

        // HTML code block to MD code
        $text = str_replace(['<code>', '</code>'], '```', $text);

        // Emphasis to MD bold
        $text = str_replace(['<em>', '</em>'], '*', $text);
        // Strong to bold
        $text = str_replace(['<strong>', '</strong>'], '__', $text);

        // Parse lists into markdown
        $text = str_replace(["<ul>\n", '</ul>', '</li>'], '', $text);
        $text = str_replace('<li>', '* ', $text);

        // Replace any remote links first...
        $text = preg_replace('/<a href="([\.0-9A-Za-z\:\/\-\_#\+]+)">([0-9a-zA-Z\s\-\_]*)<\/a>/', '[$2]($1)', $text);

        // Next replace any local links...
        $text = preg_replace('/<a class="localLink" href="[a-zA-Z0-9\.\/\:\#\+]+">([a-zA-Z\s]*)<\/a>/', '[[$1]]', $text);

        $text = rtrim($text);

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

    public static function fixLink(string $input): string
    {
        if (! str_starts_with($input, 'schema:')) {
            return $input;
        }

        return str_replace('schema:', 'https://schema.org/', $input);
    }
}
