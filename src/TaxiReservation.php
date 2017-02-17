<?php

namespace Spatie\SchemaOrg;

/**
 * A reservation for a taxi.
 * 
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations. For offers of tickets, use [[Offer]].
 *
 * @see http://schema.org/TaxiReservation
 */
class TaxiReservation extends Reservation
{
    /**
     * Number of people the reservation should accommodate.
     *
     * @param int|\Spatie\SchemaOrg\QuantitativeValue $partySize
     *
     * @return static
     *
     * @see http://schema.org/partySize
     */
    public function partySize($partySize)
    {
        return $this->setProperty('partySize', $partySize);
    }

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

}
