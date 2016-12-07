<?php

namespace Spatie\SchemaOrg;

/**
 * The geographic shape of a place. A GeoShape can be described using several
 * properties whose values are based on latitude/longitude pairs. Either
 * whitespace or commas can be used to separate latitude and longitude;
 * whitespace should be used when writing a list of several such points.
 *
 * @see http://schema.org/GeoShape
 */
class GeoShape extends StructuredValue
{
    /**
     * Indicates the GeoCoordinates at the centre of a GeoShape e.g. GeoCircle.
     *
     * @param \Spatie\SchemaOrg\GeoCoordinates $geoMidpoint
     *
     * @return static
     *
     * @see http://schema.org/geoMidpoint
     */
    public function geoMidpoint($geoMidpoint)
    {
        return $this->setProperty('geoMidpoint', $geoMidpoint);
    }

    /**
     * Physical address of the item.
     *
     * @param \Spatie\SchemaOrg\PostalAddress|string $address
     *
     * @return static
     *
     * @see http://schema.org/address
     */
    public function address($address)
    {
        return $this->setProperty('address', $address);
    }

    /**
     * The country. For example, USA. You can also provide the two-letter [ISO
     * 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     *
     * @param string|\Spatie\SchemaOrg\Country $addressCountry
     *
     * @return static
     *
     * @see http://schema.org/addressCountry
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
     * @param string $box
     *
     * @return static
     *
     * @see http://schema.org/box
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
     * @param string $circle
     *
     * @return static
     *
     * @see http://schema.org/circle
     */
    public function circle($circle)
    {
        return $this->setProperty('circle', $circle);
    }

    /**
     * The elevation of a location ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     * @param float|int|string $elevation
     *
     * @return static
     *
     * @see http://schema.org/elevation
     */
    public function elevation($elevation)
    {
        return $this->setProperty('elevation', $elevation);
    }

    /**
     * A line is a point-to-point path consisting of two or more points. A line
     * is expressed as a series of two or more point objects separated by space.
     *
     * @param string $line
     *
     * @return static
     *
     * @see http://schema.org/line
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
     * @param string $polygon
     *
     * @return static
     *
     * @see http://schema.org/polygon
     */
    public function polygon($polygon)
    {
        return $this->setProperty('polygon', $polygon);
    }

    /**
     * The postal code. For example, 94043.
     *
     * @param string $postalCode
     *
     * @return static
     *
     * @see http://schema.org/postalCode
     */
    public function postalCode($postalCode)
    {
        return $this->setProperty('postalCode', $postalCode);
    }

}
