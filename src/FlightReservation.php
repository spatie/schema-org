<?php

namespace Spatie\SchemaOrg;

/**
 * A reservation for air travel.
 * 
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations. For offers of tickets, use [[Offer]].
 *
 * @see http://schema.org/FlightReservation
 */
class FlightReservation extends Reservation
{
    /**
     * The passenger's sequence number as assigned by the airline.
     *
     * @param string $passengerSequenceNumber
     *
     * @return static
     *
     * @see http://schema.org/passengerSequenceNumber
     */
    public function passengerSequenceNumber($passengerSequenceNumber)
    {
        return $this->setProperty('passengerSequenceNumber', $passengerSequenceNumber);
    }

    /**
     * The type of security screening the passenger is subject to.
     *
     * @param string $securityScreening
     *
     * @return static
     *
     * @see http://schema.org/securityScreening
     */
    public function securityScreening($securityScreening)
    {
        return $this->setProperty('securityScreening', $securityScreening);
    }

    /**
     * The priority status assigned to a passenger for security or boarding
     * (e.g. FastTrack or Priority).
     *
     * @param string|\Spatie\SchemaOrg\QualitativeValue $passengerPriorityStatus
     *
     * @return static
     *
     * @see http://schema.org/passengerPriorityStatus
     */
    public function passengerPriorityStatus($passengerPriorityStatus)
    {
        return $this->setProperty('passengerPriorityStatus', $passengerPriorityStatus);
    }

}
