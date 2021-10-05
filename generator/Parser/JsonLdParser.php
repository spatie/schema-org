<?php

namespace Spatie\SchemaOrg\Generator\Parser;

use Illuminate\Support\Collection;

class JsonLdParser
{
    protected Collection $jsonLdGraph;

    public function __construct(string $rawJsonLd)
    {
        $parsedJson = json_decode($rawJsonLd, true);
        $this->jsonLdGraph = collect($parsedJson['@graph']);
    }

    public function filter(string $selector): Collection
    {
        return $this->jsonLdGraph->filter(static function ($schema) use ($selector): bool {
            return array_key_exists('@type', $schema) && $schema['@type'] === $selector;
        });
    }
}
