<?php

namespace Spatie\SchemaOrg;

/**
 * Intended audience for an item, i.e. the group for whom the item was created.
 *
 * @see http://schema.org/Audience
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class Audience extends BaseType
{
    /**
     * Researchers.
     *
     * @see http://schema.org/Researcher
     */
     const Researcher = 'http://schema.org/Researcher';

    /**
     * The target group associated with a given audience (e.g. veterans, car
     * owners, musicians, etc.).
     *
     * @param string|string[] $audienceType
     *
     * @return static
     *
     * @see http://schema.org/audienceType
     */
    public function audienceType($audienceType)
    {
        return $this->setProperty('audienceType', $audienceType);
    }

    /**
     * The geographic area associated with the audience.
     *
     * @param AdministrativeArea|AdministrativeArea[] $geographicArea
     *
     * @return static
     *
     * @see http://schema.org/geographicArea
     */
    public function geographicArea($geographicArea)
    {
        return $this->setProperty('geographicArea', $geographicArea);
    }

}
