<?php

namespace Spatie\SchemaOrg\Generator\Parser;

use Tightenco\Collect\Support\Collection;

class JsonLdParser
{
    /**
     * @var \Tightenco\Collect\Support\Collection
     */
    private $jsonLdGraph;

    /**
     * JsonLdParser constructor.
     *
     * @param string $rawJsonLd
     */
    public function __construct(string $rawJsonLd)
    {
        $parsedJson = json_decode($rawJsonLd, true);
        $this->jsonLdGraph = collect($parsedJson['@graph']);
    }

    public function filter(string $selector): Collection
    {
        return $this->jsonLdGraph->filter(static function ($schema) use ($selector) {
            return array_key_exists('@type', $schema) && $schema['@type'] === $selector;
        });
    }
}
