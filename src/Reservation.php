<?php

namespace Spatie\SchemaOrg;

/**
 * Describes a reservation for travel, dining or an event. Some reservations
 * require tickets. 
 * 
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations. For offers of tickets, restaurant reservations, flights, or
 * rental cars, use [[Offer]].
 *
 * @see 
 */
class Reservation extends Intangible
{
    /**
     * A unique identifier for the reservation.
     *
     * @param string|string[] $reservationId
     *
     * @return static
     *
     * @see 
     */
    public function reservationId($reservationId)
    {
        return $this->setProperty('reservationId', $reservationId);
    }

    /**
     * The current status of the reservation.
     *
     * @param ReservationStatusType|ReservationStatusType[] $reservationStatus
     *
     * @return static
     *
     * @see 
     */
    public function reservationStatus($reservationStatus)
    {
        return $this->setProperty('reservationStatus', $reservationStatus);
    }

    /**
     * The thing -- flight, event, restaurant,etc. being reserved.
     *
     * @param Thing|Thing[] $reservationFor
     *
     * @return static
     *
     * @see 
     */
    public function reservationFor($reservationFor)
    {
        return $this->setProperty('reservationFor', $reservationFor);
    }

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     *
     * @param Person|Person[]|Organization|Organization[] $provider
     *
     * @return static
     *
     * @see 
     */
    public function provider($provider)
    {
        return $this->setProperty('provider', $provider);
    }

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
     * 'bookingAgent' is an out-dated term indicating a 'broker' that serves as
     * a booking agent.
     *
     * @param Person|Person[]|Organization|Organization[] $bookingAgent
     *
     * @return static
     *
     * @see 
     */
    public function bookingAgent($bookingAgent)
    {
        return $this->setProperty('bookingAgent', $bookingAgent);
    }

    /**
     * A ticket associated with the reservation.
     *
     * @param Ticket|Ticket[] $reservedTicket
     *
     * @return static
     *
     * @see 
     */
    public function reservedTicket($reservedTicket)
    {
        return $this->setProperty('reservedTicket', $reservedTicket);
    }

    /**
     * Any membership in a frequent flyer, hotel loyalty program, etc. being
     * applied to the reservation.
     *
     * @param ProgramMembership|ProgramMembership[] $programMembershipUsed
     *
     * @return static
     *
     * @see 
     */
    public function programMembershipUsed($programMembershipUsed)
    {
        return $this->setProperty('programMembershipUsed', $programMembershipUsed);
    }

    /**
     * The date and time the reservation was booked.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $bookingTime
     *
     * @return static
     *
     * @see 
     */
    public function bookingTime($bookingTime)
    {
        return $this->setProperty('bookingTime', $bookingTime);
    }

    /**
     * The date and time the reservation was modified.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $modifiedTime
     *
     * @return static
     *
     * @see 
     */
    public function modifiedTime($modifiedTime)
    {
        return $this->setProperty('modifiedTime', $modifiedTime);
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
     * An entity that arranges for an exchange between a buyer and a seller.  In
     * most cases a broker never acquires or releases ownership of a product or
     * service involved in an exchange.  If it is not clear whether an entity is
     * a broker, seller, or buyer, the latter two terms are preferred.
     *
     * @param Person|Person[]|Organization|Organization[] $broker
     *
     * @return static
     *
     * @see 
     */
    public function broker($broker)
    {
        return $this->setProperty('broker', $broker);
    }

}
