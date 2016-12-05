<?php

namespace Spatie\SchemaOrg;

/**
 * Intended audience for an item, i.e. the group for whom the item was created.
 *
 * @see http://schema.org/Audience
 */
class Audience extends Intangible
{
    /**
     * The target group associated with a given audience (e.g. veterans, car
     * owners, musicians, etc.).
     *
     * @param string $audienceType
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
     * @param \Spatie\SchemaOrg\AdministrativeArea $geographicArea
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
