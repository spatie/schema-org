<?php

namespace Spatie\SchemaOrg\Generator\Parser\Tasks;

use Spatie\SchemaOrg\Generator\Property;

class ParseProperty extends Task
{
    public function __invoke(): ?Property
    {
        $property = new Property();

        $property->name = $this->getDefinitionProperty('rdfs:label');

        if (empty($property->name)) {
            return null;
        }

        $property->description = $this->getDefinitionProperty('rdfs:comment');

        $property->resource = $this->getResource();

        $this->getWrappedDefinitionProperty('schema:domainIncludes')
            ->each(function (array $domain) use ($property): void {
                $property->addType($this->getResourceName($domain));
            });

        $this->getWrappedDefinitionProperty('schema:rangeIncludes')
            ->each(function (array $range) use ($property): void {
                $property->addRanges(
                    $this->castRangesToTypes($this->getResourceName($range))
                );
            });

        $property->partOf = $this->definition['schema:isPartOf']['@id'] ?? null;

        $property->source = $this->definition['schema:source']['@id'] ?? null;

        return $property;
    }

    private function castRangesToTypes(string $range): array
    {
        switch ($range) {
            case 'Boolean':
                return ['bool'];
            case 'False':
                return ['false'];
            case 'True':
                return ['true'];
            case 'Date':
            case 'Time':
            case 'DateTime':
                return ['\DateTimeInterface'];
            case 'Text':
            case 'URL':
                return ['string'];
            case 'Number':
                return ['float', 'int'];
            case 'Float':
                return ['float'];
            case 'Integer':
                return ['int'];
            default:
                return [$range];
        }
    }
}
