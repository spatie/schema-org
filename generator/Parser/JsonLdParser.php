<?php

namespace Spatie\SchemaOrg\Generator\Parser;

use Illuminate\Support\Collection;

class JsonLdParser
{
    protected string $schemaPrefix;
    protected Collection $jsonLdGraph;

    public function __construct(string $rawJsonLd)
    {
        $parsedJson = json_decode($rawJsonLd, true);
        $this->schemaPrefix = $parsedJson['@context']['schema'];
        $this->jsonLdGraph = collect($parsedJson['@graph'])->map(function ($schemaArray) {
            $schemaArray['@id'] = $this->replaceSchemaPrefix($schemaArray['@id']);
            if (isset($schemaArray['rdfs:subClassOf'])) {
                if (isset($schemaArray['rdfs:subClassOf']['@id'])) {
                    $schemaArray['rdfs:subClassOf']['@id'] = $this->replaceSchemaPrefix(
                        $schemaArray['rdfs:subClassOf']['@id']
                    );
                } else {
                    $temp = [];
                    foreach ($schemaArray['rdfs:subClassOf'] as $key => $value) {
                        $value['@id'] = $this->replaceSchemaPrefix($value['@id']);
                        $temp[] = $value;
                    }
                    $schemaArray['rdfs:subClassOf'] = $temp;
                }
            }
            if (isset($schemaArray['schema:isPartOf'])) {
                $schemaArray['schema:isPartOf']['@id'] = $this->replaceSchemaPrefix(
                    $schemaArray['schema:isPartOf']['@id']
                );
            }

            if (isset($schemaArray['schema:domainIncludes'])) {
                if (isset($schemaArray['schema:domainIncludes']['@id'])) {
                    $schemaArray['schema:domainIncludes']['@id'] = $this->replaceSchemaPrefix(
                        $schemaArray['schema:domainIncludes']['@id']
                    );
                } else {
                    $temp = [];
                    foreach ($schemaArray['schema:domainIncludes'] as $key => $value) {
                        $value['@id'] = $this->replaceSchemaPrefix($value['@id']);
                        $temp[] = $value;
                    }
                    $schemaArray['schema:domainIncludes'] = $temp;
                }
            }

            if (isset($schemaArray['schema:rangeIncludes'])) {
                if (isset($schemaArray['schema:rangeIncludes']['@id'])) {
                    $schemaArray['schema:rangeIncludes']['@id'] = $this->replaceSchemaPrefix(
                        $schemaArray['schema:rangeIncludes']['@id']
                    );
                } else {
                    $temp = [];
                    foreach ($schemaArray['schema:rangeIncludes'] as $key => $value) {
                        $value['@id'] = $this->replaceSchemaPrefix($value['@id']);
                        $temp[] = $value;
                    }
                    $schemaArray['schema:rangeIncludes'] = $temp;
                }
            }

            return $schemaArray;
        });
    }

    private function replaceSchemaPrefix(string $attributeValue): string
    {
        return str_replace('schema:', $this->schemaPrefix, $attributeValue);
    }

    public function filter(string $selector): Collection
    {
        return $this->jsonLdGraph->filter(static function ($schema) use ($selector): bool {
            return array_key_exists('@type', $schema) && $schema['@type'] === $selector;
        });
    }
}
