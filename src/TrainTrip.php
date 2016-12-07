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
     * The unique identifier for the train.
     *
     * @param string $trainNumber
     *
     * @return static
     *
     * @see http://schema.org/trainNumber
     */
    public function trainNumber($trainNumber)
    {
        return $this->setProperty('trainNumber', $trainNumber);
    }

    /**
     * The name of the train (e.g. The Orient Express).
     *
     * @param string $trainName
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
     * The station from which the train departs.
     *
     * @param \Spatie\SchemaOrg\TrainStation $departureStation
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
     * The station where the train trip ends.
     *
     * @param \Spatie\SchemaOrg\TrainStation $arrivalStation
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
     * @param string $departurePlatform
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
     * The platform where the train arrives.
     *
     * @param string $arrivalPlatform
     *
     * @return static
     *
     * @see http://schema.org/arrivalPlatform
     */
    public function arrivalPlatform($arrivalPlatform)
    {
        return $this->setProperty('arrivalPlatform', $arrivalPlatform);
    }

}
