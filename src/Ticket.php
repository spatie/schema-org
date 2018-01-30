<?php

namespace Spatie\SchemaOrg;

/**
 * Used to describe a ticket to an event, a flight, a bus ride, etc.
 *
 * @see http://schema.org/Ticket
 */
class Ticket extends Intangible
{
    /**
     * The date the ticket was issued.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dateIssued
     *
     * @return static
     *
     * @see http://schema.org/dateIssued
     */
    public function dateIssued($dateIssued)
    {
        return $this->setProperty('dateIssued', $dateIssued);
    }

    /**
     * The organization issuing the ticket or permit.
     *
     * @param Organization|Organization[] $issuedBy
     *
     * @return static
     *
     * @see http://schema.org/issuedBy
     */
    public function issuedBy($issuedBy)
    {
        return $this->setProperty('issuedBy', $issuedBy);
    }

    /**
     * The currency (in 3-letter ISO 4217 format) of the price or a price
     * component, when attached to [[PriceSpecification]] and its subtypes.
     *
     * @param string|string[] $priceCurrency
     *
     * @return static
     *
     * @see http://schema.org/priceCurrency
     */
    public function priceCurrency($priceCurrency)
    {
        return $this->setProperty('priceCurrency', $priceCurrency);
    }

    /**
     * The unique identifier for the ticket.
     *
     * @param string|string[] $ticketNumber
     *
     * @return static
     *
     * @see http://schema.org/ticketNumber
     */
    public function ticketNumber($ticketNumber)
    {
        return $this->setProperty('ticketNumber', $ticketNumber);
    }

    /**
     * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for
     * entrance.
     *
     * @param string|string[] $ticketToken
     *
     * @return static
     *
     * @see http://schema.org/ticketToken
     */
    public function ticketToken($ticketToken)
    {
        return $this->setProperty('ticketToken', $ticketToken);
    }

    /**
     * The seat associated with the ticket.
     *
     * @param Seat|Seat[] $ticketedSeat
     *
     * @return static
     *
     * @see http://schema.org/ticketedSeat
     */
    public function ticketedSeat($ticketedSeat)
    {
        return $this->setProperty('ticketedSeat', $ticketedSeat);
    }

    /**
     * The total price for the reservation or ticket, including applicable
     * taxes, shipping, etc.
     *
     * @param PriceSpecification|PriceSpecification[]|float|float[]|int|int[]|string|string[] $totalPrice
     *
     * @return static
     *
     * @see http://schema.org/totalPrice
     */
    public function totalPrice($totalPrice)
    {
        return $this->setProperty('totalPrice', $totalPrice);
    }

    /**
     * The person or organization the reservation or ticket is for.
     *
     * @param Organization|Organization[]|Person|Person[] $underName
     *
     * @return static
     *
     * @see http://schema.org/underName
     */
    public function underName($underName)
    {
        return $this->setProperty('underName', $underName);
    }

}
