<?php

namespace Spatie\SchemaOrg;

/**
 * A reservation for air travel.
 * 
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations. For offers of tickets, use [[Offer]].
 *
 * @see 
 */
class FlightReservation extends Reservation
{
    /**
     * The priority status assigned to a passenger for security or boarding
     * (e.g. FastTrack or Priority).
     *
     * @param string|string[]|QualitativeValue|QualitativeValue[] $passengerPriorityStatus
     *
     * @return static
     *
     * @see 
     */
    public function passengerPriorityStatus($passengerPriorityStatus)
    {
        return $this->setProperty('passengerPriorityStatus', $passengerPriorityStatus);
    }

    /**
     * The passenger's sequence number as assigned by the airline.
     *
     * @param string|string[] $passengerSequenceNumber
     *
     * @return static
     *
     * @see 
     */
    public function passengerSequenceNumber($passengerSequenceNumber)
    {
        return $this->setProperty('passengerSequenceNumber', $passengerSequenceNumber);
    }

    /**
     * The type of security screening the passenger is subject to.
     *
     * @param string|string[] $securityScreening
     *
     * @return static
     *
     * @see 
     */
    public function securityScreening($securityScreening)
    {
        return $this->setProperty('securityScreening', $securityScreening);
    }

}
