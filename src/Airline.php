<?php

namespace Spatie\SchemaOrg;

/**
 * An organization that provides flights for passengers.
 *
 * @see 
 */
class Airline extends Organization
{
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
     * IATA identifier for an airline or airport.
     *
     * @param string|string[] $iataCode
     *
     * @return static
     *
     * @see 
     */
    public function iataCode($iataCode)
    {
        return $this->setProperty('iataCode', $iataCode);
    }

}
