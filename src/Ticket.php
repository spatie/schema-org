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
     * The person or organization the reservation or ticket is for.
     *
     * @param \Spatie\SchemaOrg\Person|\Spatie\SchemaOrg\Organization $underName
     *
     * @return static
     *
     * @see http://schema.org/underName
     */
    public function underName($underName)
    {
        return $this->setProperty('underName', $underName);
    }

    /**
     * The total price for the reservation or ticket, including applicable
     * taxes, shipping, etc.
     *
     * @param float|int|string|\Spatie\SchemaOrg\PriceSpecification $totalPrice
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
     * The currency (in 3-letter ISO 4217 format) of the price or a price
     * component, when attached to [[PriceSpecification]] and its subtypes.
     *
     * @param string $priceCurrency
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
     * The organization issuing the ticket or permit.
     *
     * @param \Spatie\SchemaOrg\Organization $issuedBy
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
     * The date the ticket was issued.
     *
     * @param \DateTimeInterface $dateIssued
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
     * The seat associated with the ticket.
     *
     * @param \Spatie\SchemaOrg\Seat $ticketedSeat
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
     * The unique identifier for the ticket.
     *
     * @param string $ticketNumber
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
     * @param string $ticketToken
     *
     * @return static
     *
     * @see http://schema.org/ticketToken
     */
    public function ticketToken($ticketToken)
    {
        return $this->setProperty('ticketToken', $ticketToken);
    }

}
