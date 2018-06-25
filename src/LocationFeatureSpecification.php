<?php

namespace Spatie\SchemaOrg;

/**
 * Specifies a location feature by providing a structured value representing a
 * feature of an accommodation as a property-value pair of varying degrees of
 * formality.
 *
 * @see http://schema.org/LocationFeatureSpecification
 *
 * @mixin \Spatie\SchemaOrg\PropertyValue
 */
class LocationFeatureSpecification extends BaseType
{
    /**
     * The hours during which this service or contact is available.
     *
     * @param OpeningHoursSpecification|OpeningHoursSpecification[] $hoursAvailable
     *
     * @return static
     *
     * @see http://schema.org/hoursAvailable
     */
    public function hoursAvailable($hoursAvailable)
    {
        return $this->setProperty('hoursAvailable', $hoursAvailable);
    }

    /**
     * The date when the item becomes valid.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $validFrom
     *
     * @return static
     *
     * @see http://schema.org/validFrom
     */
    public function validFrom($validFrom)
    {
        return $this->setProperty('validFrom', $validFrom);
    }

    /**
     * The date after when the item is not valid. For example the end of an
     * offer, salary period, or a period of opening hours.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $validThrough
     *
     * @return static
     *
     * @see http://schema.org/validThrough
     */
    public function validThrough($validThrough)
    {
        return $this->setProperty('validThrough', $validThrough);
    }

}
