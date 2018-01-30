<?php

namespace Spatie\SchemaOrg;

/**
 * A group of multiple reservations with common values for all sub-reservations.
 *
 * @see 
 */
class ReservationPackage extends Reservation
{
    /**
     * The individual reservations included in the package. Typically a repeated
     * property.
     *
     * @param Reservation|Reservation[] $subReservation
     *
     * @return static
     *
     * @see 
     */
    public function subReservation($subReservation)
    {
        return $this->setProperty('subReservation', $subReservation);
    }

    /**
     * The airline-specific indicator of boarding order / preference.
     *
     * @param string|string[] $boardingGroup
     *
     * @return static
     *
     * @see 
     */
    public function boardingGroup($boardingGroup)
    {
        return $this->setProperty('boardingGroup', $boardingGroup);
    }

}
