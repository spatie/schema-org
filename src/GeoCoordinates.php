<?php

namespace Spatie\SchemaOrg;

/**
 * The geographic coordinates of a place or event.
 *
 * @see 
 */
class GeoCoordinates extends StructuredValue
{
    /**
     * The country. For example, USA. You can also provide the two-letter [ISO
     * 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     *
     * @param string|string[]|Country|Country[] $addressCountry
     *
     * @return static
     *
     * @see 
     */
    public function addressCountry($addressCountry)
    {
        return $this->setProperty('addressCountry', $addressCountry);
    }

    /**
     * Physical address of the item.
     *
     * @param PostalAddress|PostalAddress[]|string|string[] $address
     *
     * @return static
     *
     * @see 
     */
    public function address($address)
    {
        return $this->setProperty('address', $address);
    }

    /**
     * The elevation of a location ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     * @param float|float[]|int|int[]|string|string[] $elevation
     *
     * @return static
     *
     * @see 
     */
    public function elevation($elevation)
    {
        return $this->setProperty('elevation', $elevation);
    }

    /**
     * The latitude of a location. For example ```37.42242``` ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     * @param float|float[]|int|int[]|string|string[] $latitude
     *
     * @return static
     *
     * @see 
     */
    public function latitude($latitude)
    {
        return $this->setProperty('latitude', $latitude);
    }

    /**
     * The longitude of a location. For example ```-122.08585``` ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     * @param float|float[]|int|int[]|string|string[] $longitude
     *
     * @return static
     *
     * @see 
     */
    public function longitude($longitude)
    {
        return $this->setProperty('longitude', $longitude);
    }

    /**
     * The postal code. For example, 94043.
     *
     * @param string|string[] $postalCode
     *
     * @return static
     *
     * @see 
     */
    public function postalCode($postalCode)
    {
        return $this->setProperty('postalCode', $postalCode);
    }

}
