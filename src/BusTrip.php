<?php

namespace Spatie\SchemaOrg;

/**
 * A trip on a commercial bus line.
 *
 * @see http://schema.org/BusTrip
 *
 * @mixin \Spatie\SchemaOrg\Trip
 */
class BusTrip extends BaseType
{
    /**
     * The stop or station from which the bus arrives.
     *
     * @param BusStation|BusStation[]|BusStop|BusStop[] $arrivalBusStop
     *
     * @return static
     *
     * @see http://schema.org/arrivalBusStop
     */
    public function arrivalBusStop($arrivalBusStop)
    {
        return $this->setProperty('arrivalBusStop', $arrivalBusStop);
    }

    /**
     * The name of the bus (e.g. Bolt Express).
     *
     * @param string|string[] $busName
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
     * The unique identifier for the bus.
     *
     * @param string|string[] $busNumber
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
     * The stop or station from which the bus departs.
     *
     * @param BusStation|BusStation[]|BusStop|BusStop[] $departureBusStop
     *
     * @return static
     *
     * @see http://schema.org/departureBusStop
     */
    public function departureBusStop($departureBusStop)
    {
        return $this->setProperty('departureBusStop', $departureBusStop);
    }

}
