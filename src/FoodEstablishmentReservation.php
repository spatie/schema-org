<?php

namespace Spatie\SchemaOrg;

/**
 * A reservation to dine at a food-related business.Note: This type is for
 * information about actual reservations, e.g. in confirmation emails or HTML
 * pages with individual confirmations of reservations.
 *
 * @see http://schema.org/FoodEstablishmentReservation
 */
class FoodEstablishmentReservation extends Reservation
{
    /**
     * The endTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. e.g.
     * John wrote a book from January to *December*.
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even
     * when describing dates with times. This situation may be clarified in
     * future revisions.
     *
     * @param \DateTimeInterface $endTime
     *
     * @return static
     *
     * @see http://schema.org/endTime
     */
    public function endTime($endTime)
    {
        return $this->setProperty('endTime', $endTime);
    }

    /**
     * The startTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. e.g.
     * John wrote a book from *January* to December.
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even
     * when describing dates with times. This situation may be clarified in
     * future revisions.
     *
     * @param \DateTimeInterface $startTime
     *
     * @return static
     *
     * @see http://schema.org/startTime
     */
    public function startTime($startTime)
    {
        return $this->setProperty('startTime', $startTime);
    }

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

}
