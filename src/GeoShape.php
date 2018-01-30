<?php

namespace Spatie\SchemaOrg;

/**
 * The geographic shape of a place. A GeoShape can be described using several
 * properties whose values are based on latitude/longitude pairs. Either
 * whitespace or commas can be used to separate latitude and longitude;
 * whitespace should be used when writing a list of several such points.
 *
 * @see 
 */
class GeoShape extends StructuredValue
{
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
     * A box is the area enclosed by the rectangle formed by two points. The
     * first point is the lower corner, the second point is the upper corner. A
     * box is expressed as two points separated by a space character.
     *
     * @param string|string[] $box
     *
     * @return static
     *
     * @see 
     */
    public function box($box)
    {
        return $this->setProperty('box', $box);
    }

    /**
     * A circle is the circular region of a specified radius centered at a
     * specified latitude and longitude. A circle is expressed as a pair
     * followed by a radius in meters.
     *
     * @param string|string[] $circle
     *
     * @return static
     *
     * @see 
     */
    public function circle($circle)
    {
        return $this->setProperty('circle', $circle);
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
     * Indicates the GeoCoordinates at the centre of a GeoShape e.g. GeoCircle.
     *
     * @param GeoCoordinates|GeoCoordinates[] $geoMidpoint
     *
     * @return static
     *
     * @see 
     */
    public function geoMidpoint($geoMidpoint)
    {
        return $this->setProperty('geoMidpoint', $geoMidpoint);
    }

    /**
     * A line is a point-to-point path consisting of two or more points. A line
     * is expressed as a series of two or more point objects separated by space.
     *
     * @param string|string[] $line
     *
     * @return static
     *
     * @see 
     */
    public function line($line)
    {
        return $this->setProperty('line', $line);
    }

    /**
     * A polygon is the area enclosed by a point-to-point path for which the
     * starting and ending points are the same. A polygon is expressed as a
     * series of four or more space delimited points where the first and final
     * points are identical.
     *
     * @param string|string[] $polygon
     *
     * @return static
     *
     * @see 
     */
    public function polygon($polygon)
    {
        return $this->setProperty('polygon', $polygon);
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
