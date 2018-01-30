<?php

namespace Spatie\SchemaOrg;

/**
 * A trip on a commercial train line.
 *
 * @see http://schema.org/TrainTrip
 */
class TrainTrip extends Intangible
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
     * The expected arrival time.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $arrivalTime
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
     * The expected departure time.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $departureTime
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
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     *
     * @param Person|Person[]|Organization|Organization[] $provider
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
