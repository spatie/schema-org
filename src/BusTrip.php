<?php

namespace Spatie\SchemaOrg;

/**
 * A trip on a commercial bus line.
 *
 * @see http://schema.org/BusTrip
 */
class BusTrip extends Intangible
{
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
     * The unique identifier for the bus.
     *
     * @param string $busNumber
     *
     * @return static
     *
     * @see http://schema.org/busNumber
     */
    public function busNumber($busNumber)
    {
        return $this->setProperty('busNumber', $busNumber);
    }

    /**
     * The name of the bus (e.g. Bolt Express).
     *
     * @param string $busName
     *
     * @return static
     *
     * @see http://schema.org/busName
     */
    public function busName($busName)
    {
        return $this->setProperty('busName', $busName);
    }

    /**
     * The stop or station from which the bus departs.
     *
     * @param \Spatie\SchemaOrg\BusStation|\Spatie\SchemaOrg\BusStop $departureBusStop
     *
     * @return static
     *
     * @see http://schema.org/departureBusStop
     */
    public function departureBusStop($departureBusStop)
    {
        return $this->setProperty('departureBusStop', $departureBusStop);
    }

    /**
     * The stop or station from which the bus arrives.
     *
     * @param \Spatie\SchemaOrg\BusStation|\Spatie\SchemaOrg\BusStop $arrivalBusStop
     *
     * @return static
     *
     * @see http://schema.org/arrivalBusStop
     */
    public function arrivalBusStop($arrivalBusStop)
    {
        return $this->setProperty('arrivalBusStop', $arrivalBusStop);
    }

}
