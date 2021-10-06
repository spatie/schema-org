<?php

namespace Spatie\SchemaOrg\Generator\Parser\Tasks;

use Illuminate\Support\Collection;

abstract class Task
{
    protected array $definition;

    public function __construct(array $definition)
    {
        $this->definition = $definition;
    }

    public static function fromJsonLdArray(array $jsonLdArray): self
    {
        return new static($jsonLdArray);
    }

    protected function getDefinitionProperty(string $selector): string
    {
        $property = $this->definition[$selector] ?? '';

        return is_array($property) && array_key_exists('@language', $property) && array_key_exists('@value', $property)
            ? $property['@value']
            : $property;
    }

    protected function getWrappedDefinitionProperty(string $selector): Collection
    {
        $property = $this->definition[$selector] ?? [];

        if (count($property) === 1) {
            $property = [$property];
        }

        return collect($property);
    }

    /**
     * Get the schema resource URL.
     */
    protected function getResource(?array $schemaResource = null): string
    {
        return $schemaResource['@id'] ?? $this->definition['@id'];
    }

    /**
     * Get the Schema resource name.
     */
    protected function getResourceName(?array $schemaResource = null): string
    {
        return str_replace('schema:', '', $this->getResource($schemaResource));
    }
}
