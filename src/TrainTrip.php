<?php

namespace Spatie\SchemaOrg;

/**
 * A trip on a commercial train line.
 *
 * @see http://schema.org/TrainTrip
 *
 * @mixin \Spatie\SchemaOrg\Trip
 */
class TrainTrip extends BaseType
{
    /**
     * The platform where the train arrives.
     *
     * @param string|string[] $arrivalPlatform
     *
     * @return static
     *
     * @see http://schema.org/arrivalPlatform
     */
    public function arrivalPlatform($arrivalPlatform)
    {
        return $this->setProperty('arrivalPlatform', $arrivalPlatform);
    }

    /**
     * The station where the train trip ends.
     *
     * @param TrainStation|TrainStation[] $arrivalStation
     *
     * @return static
     *
     * @see http://schema.org/arrivalStation
     */
    public function arrivalStation($arrivalStation)
    {
        return $this->setProperty('arrivalStation', $arrivalStation);
    }

    /**
     * The platform from which the train departs.
     *
     * @param string|string[] $departurePlatform
     *
     * @return static
     *
     * @see http://schema.org/departurePlatform
     */
    public function departurePlatform($departurePlatform)
    {
        return $this->setProperty('departurePlatform', $departurePlatform);
    }

    /**
     * The station from which the train departs.
     *
     * @param TrainStation|TrainStation[] $departureStation
     *
     * @return static
     *
     * @see http://schema.org/departureStation
     */
    public function departureStation($departureStation)
    {
        return $this->setProperty('departureStation', $departureStation);
    }

    /**
     * The name of the train (e.g. The Orient Express).
     *
     * @param string|string[] $trainName
     *
     * @return static
     *
     * @see http://schema.org/trainName
     */
    public function trainName($trainName)
    {
        return $this->setProperty('trainName', $trainName);
    }

    /**
     * The unique identifier for the train.
     *
     * @param string|string[] $trainNumber
     *
     * @return static
     *
     * @see http://schema.org/trainNumber
     */
    public function trainNumber($trainNumber)
    {
        return $this->setProperty('trainNumber', $trainNumber);
    }

}
