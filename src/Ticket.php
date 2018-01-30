<?php

namespace Spatie\SchemaOrg;

/**
 * Used to describe a ticket to an event, a flight, a bus ride, etc.
 *
 * @see 
 */
class Ticket extends Intangible
{
    /**
     * The person or organization the reservation or ticket is for.
     *
     * @param Person|Person[]|Organization|Organization[] $underName
     *
     * @return static
     *
     * @see 
     */
    public function underName($underName)
    {
        return $this->setProperty('underName', $underName);
    }

    /**
     * The currency (in 3-letter ISO 4217 format) of the price or a price
     * component, when attached to [[PriceSpecification]] and its subtypes.
     *
     * @param string|string[] $priceCurrency
     *
     * @return static
     *
     * @see 
     */
    public function priceCurrency($priceCurrency)
    {
        return $this->setProperty('priceCurrency', $priceCurrency);
    }

    /**
     * The total price for the reservation or ticket, including applicable
     * taxes, shipping, etc.
     *
     * @param float|float[]|int|int[]|string|string[]|PriceSpecification|PriceSpecification[] $totalPrice
     *
     * @return static
     *
     * @see 
     */
    public function totalPrice($totalPrice)
    {
        return $this->setProperty('totalPrice', $totalPrice);
    }

    /**
     * The date the ticket was issued.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dateIssued
     *
     * @return static
     *
     * @see 
     */
    public function dateIssued($dateIssued)
    {
        return $this->setProperty('dateIssued', $dateIssued);
    }

    /**
     * The unique identifier for the ticket.
     *
     * @param string|string[] $ticketNumber
     *
     * @return static
     *
     * @see 
     */
    public function ticketNumber($ticketNumber)
    {
        return $this->setProperty('ticketNumber', $ticketNumber);
    }

    /**
     * The seat associated with the ticket.
     *
     * @param Seat|Seat[] $ticketedSeat
     *
     * @return static
     *
     * @see 
     */
    public function ticketedSeat($ticketedSeat)
    {
        return $this->setProperty('ticketedSeat', $ticketedSeat);
    }

    /**
     * The organization issuing the ticket or permit.
     *
     * @param Organization|Organization[] $issuedBy
     *
     * @return static
     *
     * @see 
     */
    public function issuedBy($issuedBy)
    {
        return $this->setProperty('issuedBy', $issuedBy);
    }

    /**
     * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for
     * entrance.
     *
     * @param string|string[] $ticketToken
     *
     * @return static
     *
     * @see 
     */
    public function ticketToken($ticketToken)
    {
        return $this->setProperty('ticketToken', $ticketToken);
    }

}
