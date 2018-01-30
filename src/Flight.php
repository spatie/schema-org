<?php

namespace Spatie\SchemaOrg;

/**
 * An airline flight.
 *
 * @see 
 */
class Flight extends Intangible
{
    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel
     * delivery and flights.
     *
     * @param Organization|Organization[] $carrier
     *
     * @return static
     *
     * @see 
     */
    public function carrier($carrier)
    {
        return $this->setProperty('carrier', $carrier);
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services /
     * goods.  A seller may also be a provider.
     *
     * @param Organization|Organization[]|Person|Person[] $seller
     *
     * @return static
     *
     * @see 
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
     * The unique identifier for a flight including the airline IATA code. For
     * example, if describing United flight 110, where the IATA code for United
     * is 'UA', the flightNumber is 'UA110'.
     *
     * @param string|string[] $flightNumber
     *
     * @return static
     *
     * @see 
     */
    public function flightNumber($flightNumber)
    {
        return $this->setProperty('flightNumber', $flightNumber);
    }

    /**
     * The expected arrival time.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $arrivalTime
     *
     * @return static
     *
     * @see 
     */
    public function arrivalTime($arrivalTime)
    {
        return $this->setProperty('arrivalTime', $arrivalTime);
    }

    /**
     * Identifier of the flight's departure terminal.
     *
     * @param string|string[] $departureTerminal
     *
     * @return static
     *
     * @see 
     */
    public function departureTerminal($departureTerminal)
    {
        return $this->setProperty('departureTerminal', $departureTerminal);
    }

    /**
     * Identifier of the flight's departure gate.
     *
     * @param string|string[] $departureGate
     *
     * @return static
     *
     * @see 
     */
    public function departureGate($departureGate)
    {
        return $this->setProperty('departureGate', $departureGate);
    }

    /**
     * The airport where the flight originates.
     *
     * @param Airport|Airport[] $departureAirport
     *
     * @return static
     *
     * @see 
     */
    public function departureAirport($departureAirport)
    {
        return $this->setProperty('departureAirport', $departureAirport);
    }

    /**
     * The expected departure time.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $departureTime
     *
     * @return static
     *
     * @see 
     */
    public function departureTime($departureTime)
    {
        return $this->setProperty('departureTime', $departureTime);
    }

    /**
     * The estimated time the flight will take.
     *
     * @param string|string[]|Duration|Duration[] $estimatedFlightDuration
     *
     * @return static
     *
     * @see 
     */
    public function estimatedFlightDuration($estimatedFlightDuration)
    {
        return $this->setProperty('estimatedFlightDuration', $estimatedFlightDuration);
    }

    /**
     * Identifier of the flight's arrival terminal.
     *
     * @param string|string[] $arrivalTerminal
     *
     * @return static
     *
     * @see 
     */
    public function arrivalTerminal($arrivalTerminal)
    {
        return $this->setProperty('arrivalTerminal', $arrivalTerminal);
    }

    /**
     * The time when a passenger can check into the flight online.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $webCheckinTime
     *
     * @return static
     *
     * @see 
     */
    public function webCheckinTime($webCheckinTime)
    {
        return $this->setProperty('webCheckinTime', $webCheckinTime);
    }

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or
     * group-based).
     *
     * @param BoardingPolicyType|BoardingPolicyType[] $boardingPolicy
     *
     * @return static
     *
     * @see 
     */
    public function boardingPolicy($boardingPolicy)
    {
        return $this->setProperty('boardingPolicy', $boardingPolicy);
    }

    /**
     * Identifier of the flight's arrival gate.
     *
     * @param string|string[] $arrivalGate
     *
     * @return static
     *
     * @see 
     */
    public function arrivalGate($arrivalGate)
    {
        return $this->setProperty('arrivalGate', $arrivalGate);
    }

    /**
     * The airport where the flight terminates.
     *
     * @param Airport|Airport[] $arrivalAirport
     *
     * @return static
     *
     * @see 
     */
    public function arrivalAirport($arrivalAirport)
    {
        return $this->setProperty('arrivalAirport', $arrivalAirport);
    }

    /**
     * The distance of the flight.
     *
     * @param string|string[]|Distance|Distance[] $flightDistance
     *
     * @return static
     *
     * @see 
     */
    public function flightDistance($flightDistance)
    {
        return $this->setProperty('flightDistance', $flightDistance);
    }

    /**
     * Description of the meals that will be provided or available for purchase.
     *
     * @param string|string[] $mealService
     *
     * @return static
     *
     * @see 
     */
    public function mealService($mealService)
    {
        return $this->setProperty('mealService', $mealService);
    }

    /**
     * The kind of aircraft (e.g., "Boeing 747").
     *
     * @param string|string[]|Vehicle|Vehicle[] $aircraft
     *
     * @return static
     *
     * @see 
     */
    public function aircraft($aircraft)
    {
        return $this->setProperty('aircraft', $aircraft);
    }

}
