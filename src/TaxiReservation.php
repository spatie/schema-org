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
 *
 * @mixin \Spatie\SchemaOrg\Reservation
 */
class TaxiReservation extends BaseType
{
    /**
     * Number of people the reservation should accommodate.
     *
     * @param QuantitativeValue|QuantitativeValue[]|int|int[] $partySize
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
     * @param Place|Place[] $pickupLocation
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
     * @param \DateTimeInterface|\DateTimeInterface[] $pickupTime
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
