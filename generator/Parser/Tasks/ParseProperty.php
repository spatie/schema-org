<?php

namespace Spatie\SchemaOrg\Generator\Parser\Tasks;

use Spatie\SchemaOrg\Generator\Property;
use Symfony\Component\DomCrawler\Crawler;

class ParseProperty extends Task
{
    public function __invoke(): ?Property
    {
        $node = new Crawler($this->definition);

        $property = new Property();

        $property->name = $this->getText($node, '[property="rdfs:label"]');

        if (empty($property->name)) {
            return null;
        }

        $property->description = $this->getText($node, '[property="rdfs:comment"]');

        $property->resource = $this->getAttribute($node, 'resource');

        $node
            ->filter('[property="http://schema.org/domainIncludes"]')
            ->each(function (Crawler $domain) use ($property) {
                $property->addType($this->getText($domain));
            });

        $node
            ->filter('[property="http://schema.org/rangeIncludes"]')
            ->each(function (Crawler $range) use ($property) {
                $property->addRanges(
                    $this->castRangesToTypes($this->getText($range))
                );
            });

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
