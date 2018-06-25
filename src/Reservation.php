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
 * @see http://schema.org/Reservation
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class Reservation extends BaseType
{
    /**
     * 'bookingAgent' is an out-dated term indicating a 'broker' that serves as
     * a booking agent.
     *
     * @param Organization|Organization[]|Person|Person[] $bookingAgent
     *
     * @return static
     *
     * @see http://schema.org/bookingAgent
     */
    public function bookingAgent($bookingAgent)
    {
        return $this->setProperty('bookingAgent', $bookingAgent);
    }

    /**
     * The date and time the reservation was booked.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $bookingTime
     *
     * @return static
     *
     * @see http://schema.org/bookingTime
     */
    public function bookingTime($bookingTime)
    {
        return $this->setProperty('bookingTime', $bookingTime);
    }

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In
     * most cases a broker never acquires or releases ownership of a product or
     * service involved in an exchange.  If it is not clear whether an entity is
     * a broker, seller, or buyer, the latter two terms are preferred.
     *
     * @param Organization|Organization[]|Person|Person[] $broker
     *
     * @return static
     *
     * @see http://schema.org/broker
     */
    public function broker($broker)
    {
        return $this->setProperty('broker', $broker);
    }

    /**
     * The date and time the reservation was modified.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $modifiedTime
     *
     * @return static
     *
     * @see http://schema.org/modifiedTime
     */
    public function modifiedTime($modifiedTime)
    {
        return $this->setProperty('modifiedTime', $modifiedTime);
    }

    /**
     * The currency of the price, or a price component when attached to
     * [[PriceSpecification]] and its subtypes.
     * 
     * Use standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies e.g. "BTC"; well known names for [Local Exchange
     * Tradings
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system)
     * (LETS) and other currency types e.g. "Ithaca HOUR".
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
     * Any membership in a frequent flyer, hotel loyalty program, etc. being
     * applied to the reservation.
     *
     * @param ProgramMembership|ProgramMembership[] $programMembershipUsed
     *
     * @return static
     *
     * @see http://schema.org/programMembershipUsed
     */
    public function programMembershipUsed($programMembershipUsed)
    {
        return $this->setProperty('programMembershipUsed', $programMembershipUsed);
    }

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     *
     * @param Organization|Organization[]|Person|Person[] $provider
     *
     * @return static
     *
     * @see http://schema.org/provider
     */
    public function provider($provider)
    {
        return $this->setProperty('provider', $provider);
    }

    /**
     * The thing -- flight, event, restaurant,etc. being reserved.
     *
     * @param Thing|Thing[] $reservationFor
     *
     * @return static
     *
     * @see http://schema.org/reservationFor
     */
    public function reservationFor($reservationFor)
    {
        return $this->setProperty('reservationFor', $reservationFor);
    }

    /**
     * A unique identifier for the reservation.
     *
     * @param string|string[] $reservationId
     *
     * @return static
     *
     * @see http://schema.org/reservationId
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
     * @see http://schema.org/reservationStatus
     */
    public function reservationStatus($reservationStatus)
    {
        return $this->setProperty('reservationStatus', $reservationStatus);
    }

    /**
     * A ticket associated with the reservation.
     *
     * @param Ticket|Ticket[] $reservedTicket
     *
     * @return static
     *
     * @see http://schema.org/reservedTicket
     */
    public function reservedTicket($reservedTicket)
    {
        return $this->setProperty('reservedTicket', $reservedTicket);
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
