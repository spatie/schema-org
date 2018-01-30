<?php

namespace Spatie\SchemaOrg;

/**
 * A trip on a commercial train line.
 *
 * @see 
 */
class TrainTrip extends Intangible
{
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
     * The station from which the train departs.
     *
     * @param TrainStation|TrainStation[] $departureStation
     *
     * @return static
     *
     * @see 
     */
    public function departureStation($departureStation)
    {
        return $this->setProperty('departureStation', $departureStation);
    }

    /**
     * The unique identifier for the train.
     *
     * @param string|string[] $trainNumber
     *
     * @return static
     *
     * @see 
     */
    public function trainNumber($trainNumber)
    {
        return $this->setProperty('trainNumber', $trainNumber);
    }

    /**
     * The platform where the train arrives.
     *
     * @param string|string[] $arrivalPlatform
     *
     * @return static
     *
     * @see 
     */
    public function arrivalPlatform($arrivalPlatform)
    {
        return $this->setProperty('arrivalPlatform', $arrivalPlatform);
    }

    /**
     * The platform from which the train departs.
     *
     * @param string|string[] $departurePlatform
     *
     * @return static
     *
     * @see 
     */
    public function departurePlatform($departurePlatform)
    {
        return $this->setProperty('departurePlatform', $departurePlatform);
    }

    /**
     * The station where the train trip ends.
     *
     * @param TrainStation|TrainStation[] $arrivalStation
     *
     * @return static
     *
     * @see 
     */
    public function arrivalStation($arrivalStation)
    {
        return $this->setProperty('arrivalStation', $arrivalStation);
    }

    /**
     * The name of the train (e.g. The Orient Express).
     *
     * @param string|string[] $trainName
     *
     * @return static
     *
     * @see 
     */
    public function trainName($trainName)
    {
        return $this->setProperty('trainName', $trainName);
    }

}
