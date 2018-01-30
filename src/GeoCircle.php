<?php

namespace Spatie\SchemaOrg;

/**
 * A GeoCircle is a GeoShape representing a circular geographic area. As it is a
 * GeoShape
 *           it provides the simple textual property 'circle', but also allows
 * the combination of postalCode alongside geoRadius.
 *           The center of the circle can be indicated via the 'geoMidpoint'
 * property, or more approximately using 'address', 'postalCode'.
 *
 * @see http://schema.org/GeoCircle
 */
class GeoCircle extends GeoShape
{
    /**
     * Indicates the approximate radius of a GeoCircle (metres unless indicated
     * otherwise via Distance notation).
     *
     * @param string|string[]|float|float[]|int|int[]|Distance|Distance[] $geoRadius
     *
     * @return static
     *
     * @see http://schema.org/geoRadius
     */
    public function geoRadius($geoRadius)
    {
        return $this->setProperty('geoRadius', $geoRadius);
    }

}
