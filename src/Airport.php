<?php

namespace Spatie\SchemaOrg;

/**
 * An airport.
 *
 * @see 
 */
class Airport extends CivicStructure
{
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

    /**
     * ICAO identifier for an airport.
     *
     * @param string|string[] $icaoCode
     *
     * @return static
     *
     * @see 
     */
    public function icaoCode($icaoCode)
    {
        return $this->setProperty('icaoCode', $icaoCode);
    }

}
