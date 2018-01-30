<?php

namespace Spatie\SchemaOrg;

/**
 * A structured value providing information about the opening hours of a place
 * or a certain service inside a place.
 * 
 * 
 * The place is __open__ if the [[opens]] property is specified, and __closed__
 * otherwise.
 * 
 * If the value for the [[closes]] property is less than the value for the
 * [[opens]] property then the hour range is assumed to span over the next day.
 *
 * @see 
 */
class OpeningHoursSpecification extends StructuredValue
{
    /**
     * The closing hour of the place or service on the given day(s) of the week.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $closes
     *
     * @return static
     *
     * @see 
     */
    public function closes($closes)
    {
        return $this->setProperty('closes', $closes);
    }

    /**
     * The day of the week for which these opening hours are valid.
     *
     * @param DayOfWeek|DayOfWeek[] $dayOfWeek
     *
     * @return static
     *
     * @see 
     */
    public function dayOfWeek($dayOfWeek)
    {
        return $this->setProperty('dayOfWeek', $dayOfWeek);
    }

    /**
     * The opening hour of the place or service on the given day(s) of the week.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $opens
     *
     * @return static
     *
     * @see 
     */
    public function opens($opens)
    {
        return $this->setProperty('opens', $opens);
    }

    /**
     * The date when the item becomes valid.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $validFrom
     *
     * @return static
     *
     * @see 
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
     * @see 
     */
    public function validThrough($validThrough)
    {
        return $this->setProperty('validThrough', $validThrough);
    }

}
