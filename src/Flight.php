<?php

namespace Spatie\SchemaOrg;

/**
 * An airline flight.
 *
 * @see http://schema.org/Flight
 *
 * @mixin \Spatie\SchemaOrg\Trip
 */
class Flight extends BaseType
{
    /**
     * The kind of aircraft (e.g., "Boeing 747").
     *
     * @param Vehicle|Vehicle[]|string|string[] $aircraft
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
     * The airport where the flight terminates.
     *
     * @param Airport|Airport[] $arrivalAirport
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
     * Identifier of the flight's arrival gate.
     *
     * @param string|string[] $arrivalGate
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
     * Identifier of the flight's arrival terminal.
     *
     * @param string|string[] $arrivalTerminal
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
     * The type of boarding policy used by the airline (e.g. zone-based or
     * group-based).
     *
     * @param BoardingPolicyType|BoardingPolicyType[] $boardingPolicy
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
     * 'carrier' is an out-dated term indicating the 'provider' for parcel
     * delivery and flights.
     *
     * @param Organization|Organization[] $carrier
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
     * The airport where the flight originates.
     *
     * @param Airport|Airport[] $departureAirport
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
     * Identifier of the flight's departure gate.
     *
     * @param string|string[] $departureGate
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
     * Identifier of the flight's departure terminal.
     *
     * @param string|string[] $departureTerminal
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
     * The estimated time the flight will take.
     *
     * @param Duration|Duration[]|string|string[] $estimatedFlightDuration
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
     * @param Distance|Distance[]|string|string[] $flightDistance
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
     * The unique identifier for a flight including the airline IATA code. For
     * example, if describing United flight 110, where the IATA code for United
     * is 'UA', the flightNumber is 'UA110'.
     *
     * @param string|string[] $flightNumber
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
     * Description of the meals that will be provided or available for purchase.
     *
     * @param string|string[] $mealService
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
     * An entity which offers (sells / leases / lends / loans) the services /
     * goods.  A seller may also be a provider.
     *
     * @param Organization|Organization[]|Person|Person[] $seller
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
     * The time when a passenger can check into the flight online.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $webCheckinTime
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
