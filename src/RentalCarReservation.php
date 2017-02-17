<?php

namespace Spatie\SchemaOrg;

/**
 * A reservation for a rental car.
 * 
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations.
 *
 * @see http://schema.org/RentalCarReservation
 */
class RentalCarReservation extends Reservation
{
    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     *
     * @param \Spatie\SchemaOrg\Place $pickupLocation
     *
     * @return static
     *
     * @see http://schema.org/pickupLocation
     */
    public function pickupLocation($pickupLocation)
    {
        return $this->setProperty('pickupLocation', $pickupLocation);
    }

    /**
     * Where a rental car can be dropped off.
     *
     * @param \Spatie\SchemaOrg\Place $dropoffLocation
     *
     * @return static
     *
     * @see http://schema.org/dropoffLocation
     */
    public function dropoffLocation($dropoffLocation)
    {
        return $this->setProperty('dropoffLocation', $dropoffLocation);
    }

    /**
     * When a taxi will pickup a passenger or a rental car can be picked up.
     *
     * @param \DateTimeInterface $pickupTime
     *
     * @return static
     *
     * @see http://schema.org/pickupTime
     */
    public function pickupTime($pickupTime)
    {
        return $this->setProperty('pickupTime', $pickupTime);
    }

    /**
     * When a rental car can be dropped off.
     *
     * @param \DateTimeInterface $dropoffTime
     *
     * @return static
     *
     * @see http://schema.org/dropoffTime
     */
    public function dropoffTime($dropoffTime)
    {
        return $this->setProperty('dropoffTime', $dropoffTime);
    }

}
