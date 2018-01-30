<?php

namespace Spatie\SchemaOrg;

/**
 * A reservation for a rental car.
 * 
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations.
 *
 * @see 
 */
class RentalCarReservation extends Reservation
{
    /**
     * Where a rental car can be dropped off.
     *
     * @param Place|Place[] $dropoffLocation
     *
     * @return static
     *
     * @see 
     */
    public function dropoffLocation($dropoffLocation)
    {
        return $this->setProperty('dropoffLocation', $dropoffLocation);
    }

    /**
     * When a taxi will pickup a passenger or a rental car can be picked up.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $pickupTime
     *
     * @return static
     *
     * @see 
     */
    public function pickupTime($pickupTime)
    {
        return $this->setProperty('pickupTime', $pickupTime);
    }

    /**
     * When a rental car can be dropped off.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dropoffTime
     *
     * @return static
     *
     * @see 
     */
    public function dropoffTime($dropoffTime)
    {
        return $this->setProperty('dropoffTime', $dropoffTime);
    }

    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     *
     * @param Place|Place[] $pickupLocation
     *
     * @return static
     *
     * @see 
     */
    public function pickupLocation($pickupLocation)
    {
        return $this->setProperty('pickupLocation', $pickupLocation);
    }

}
