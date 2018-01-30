<?php

namespace Spatie\SchemaOrg;

/**
 * A reservation for a taxi.
 * 
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations. For offers of tickets, use [[Offer]].
 *
 * @see 
 */
class TaxiReservation extends Reservation
{
    /**
     * Number of people the reservation should accommodate.
     *
     * @param int|int[]|QuantitativeValue|QuantitativeValue[] $partySize
     *
     * @return static
     *
     * @see 
     */
    public function partySize($partySize)
    {
        return $this->setProperty('partySize', $partySize);
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
