<?php

namespace Spatie\SchemaOrg;

/**
 * An airline flight.
 *
 * @see http://schema.org/Flight
 */
class Flight extends Intangible
{
    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel
     * delivery and flights.
     *
     * @param \Spatie\SchemaOrg\Organization $carrier
     *
     * @return static
     *
     * @see http://schema.org/carrier
     */
    public function carrier($carrier)
    {
        return $this->setProperty('carrier', $carrier);
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services /
     * goods.  A seller may also be a provider.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $seller
     *
     * @return static
     *
     * @see http://schema.org/seller
     */
    public function seller($seller)
    {
        return $this->setProperty('seller', $seller);
    }

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     *
     * @param \Spatie\SchemaOrg\Person|\Spatie\SchemaOrg\Organization $provider
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
     * The unique identifier for a flight including the airline IATA code. For
     * example, if describing United flight 110, where the IATA code for United
     * is 'UA', the flightNumber is 'UA110'.
     *
     * @param string $flightNumber
     *
     * @return static
     *
     * @see http://schema.org/flightNumber
     */
    public function flightNumber($flightNumber)
    {
        return $this->setProperty('flightNumber', $flightNumber);
    }

    /**
     * The expected departure time.
     *
     * @param \DateTimeInterface $departureTime
     *
     * @return static
     *
     * @see http://schema.org/departureTime
     */
    public function departureTime($departureTime)
    {
        return $this->setProperty('departureTime', $departureTime);
    }

    /**
     * The expected arrival time.
     *
     * @param \DateTimeInterface $arrivalTime
     *
     * @return static
     *
     * @see http://schema.org/arrivalTime
     */
    public function arrivalTime($arrivalTime)
    {
        return $this->setProperty('arrivalTime', $arrivalTime);
    }

    /**
     * The airport where the flight originates.
     *
     * @param \Spatie\SchemaOrg\Airport $departureAirport
     *
     * @return static
     *
     * @see http://schema.org/departureAirport
     */
    public function departureAirport($departureAirport)
    {
        return $this->setProperty('departureAirport', $departureAirport);
    }

    /**
     * The airport where the flight terminates.
     *
     * @param \Spatie\SchemaOrg\Airport $arrivalAirport
     *
     * @return static
     *
     * @see http://schema.org/arrivalAirport
     */
    public function arrivalAirport($arrivalAirport)
    {
        return $this->setProperty('arrivalAirport', $arrivalAirport);
    }

    /**
     * Identifier of the flight's departure gate.
     *
     * @param string $departureGate
     *
     * @return static
     *
     * @see http://schema.org/departureGate
     */
    public function departureGate($departureGate)
    {
        return $this->setProperty('departureGate', $departureGate);
    }

    /**
     * Identifier of the flight's arrival gate.
     *
     * @param string $arrivalGate
     *
     * @return static
     *
     * @see http://schema.org/arrivalGate
     */
    public function arrivalGate($arrivalGate)
    {
        return $this->setProperty('arrivalGate', $arrivalGate);
    }

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or
     * group-based).
     *
     * @param \Spatie\SchemaOrg\BoardingPolicyType $boardingPolicy
     *
     * @return static
     *
     * @see http://schema.org/boardingPolicy
     */
    public function boardingPolicy($boardingPolicy)
    {
        return $this->setProperty('boardingPolicy', $boardingPolicy);
    }

    /**
     * Identifier of the flight's departure terminal.
     *
     * @param string $departureTerminal
     *
     * @return static
     *
     * @see http://schema.org/departureTerminal
     */
    public function departureTerminal($departureTerminal)
    {
        return $this->setProperty('departureTerminal', $departureTerminal);
    }

    /**
     * Identifier of the flight's arrival terminal.
     *
     * @param string $arrivalTerminal
     *
     * @return static
     *
     * @see http://schema.org/arrivalTerminal
     */
    public function arrivalTerminal($arrivalTerminal)
    {
        return $this->setProperty('arrivalTerminal', $arrivalTerminal);
    }

    /**
     * The kind of aircraft (e.g., "Boeing 747").
     *
     * @param string|\Spatie\SchemaOrg\Vehicle $aircraft
     *
     * @return static
     *
     * @see http://schema.org/aircraft
     */
    public function aircraft($aircraft)
    {
        return $this->setProperty('aircraft', $aircraft);
    }

    /**
     * Description of the meals that will be provided or available for purchase.
     *
     * @param string $mealService
     *
     * @return static
     *
     * @see http://schema.org/mealService
     */
    public function mealService($mealService)
    {
        return $this->setProperty('mealService', $mealService);
    }

    /**
     * The estimated time the flight will take.
     *
     * @param string|\Spatie\SchemaOrg\Duration $estimatedFlightDuration
     *
     * @return static
     *
     * @see http://schema.org/estimatedFlightDuration
     */
    public function estimatedFlightDuration($estimatedFlightDuration)
    {
        return $this->setProperty('estimatedFlightDuration', $estimatedFlightDuration);
    }

    /**
     * The distance of the flight.
     *
     * @param string|\Spatie\SchemaOrg\Distance $flightDistance
     *
     * @return static
     *
     * @see http://schema.org/flightDistance
     */
    public function flightDistance($flightDistance)
    {
        return $this->setProperty('flightDistance', $flightDistance);
    }

    /**
     * The time when a passenger can check into the flight online.
     *
     * @param \DateTimeInterface $webCheckinTime
     *
     * @return static
     *
     * @see http://schema.org/webCheckinTime
     */
    public function webCheckinTime($webCheckinTime)
    {
        return $this->setProperty('webCheckinTime', $webCheckinTime);
    }

}
