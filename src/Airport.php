<?php

namespace Spatie\SchemaOrg;

/**
 * An airport.
 *
 * @see http://schema.org/Airport
 *
 * @mixin \Spatie\SchemaOrg\CivicStructure
 */
class Airport extends BaseType
{
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

    /**
     * ICAO identifier for an airport.
     *
     * @param string|string[] $icaoCode
     *
     * @return static
     *
     * @see http://schema.org/icaoCode
     */
    public function icaoCode($icaoCode)
    {
        return $this->setProperty('icaoCode', $icaoCode);
    }

}
