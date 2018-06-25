<?php

namespace Spatie\SchemaOrg;

/**
 * An organization that provides flights for passengers.
 *
 * @see http://schema.org/Airline
 *
 * @mixin \Spatie\SchemaOrg\Organization
 */
class Airline extends BaseType
{
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
     * IATA identifier for an airline or airport.
     *
     * @param string|string[] $iataCode
     *
     * @return static
     *
     * @see http://schema.org/iataCode
     */
    public function iataCode($iataCode)
    {
        return $this->setProperty('iataCode', $iataCode);
    }

}
