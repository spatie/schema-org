<?php

namespace Spatie\SchemaOrg;

/**
 * A group of multiple reservations with common values for all sub-reservations.
 *
 * @see http://schema.org/ReservationPackage
 */
class ReservationPackage extends Reservation
{
    /**
     * The individual reservations included in the package. Typically a repeated
     * property.
     *
     * @param \Spatie\SchemaOrg\Reservation $subReservation
     *
     * @return static
     *
     * @see http://schema.org/subReservation
     */
    public function subReservation($subReservation)
    {
        return $this->setProperty('subReservation', $subReservation);
    }

    /**
     * The airline-specific indicator of boarding order / preference.
     *
     * @param string $boardingGroup
     *
     * @return static
     *
     * @see http://schema.org/boardingGroup
     */
    public function boardingGroup($boardingGroup)
    {
        return $this->setProperty('boardingGroup', $boardingGroup);
    }

}
