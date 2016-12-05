<?php

namespace Spatie\SchemaOrg\Generator\Writer;

class Filters
{
    public static function doc($text, array $options = []): string
    {
        $indentation = $options[0] ?? 0;

        $lineLength = 80 - 3 - ($indentation * 4);

        return wordwrap($text, $lineLength, "\n".str_repeat(' ', $indentation * 4).' * ');
    }
}
