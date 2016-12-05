<?php

namespace Spatie\SchemaOrg;

/**
 * A map.
 *
 * @see http://schema.org/Map
 */
class Map extends CreativeWork
{
    /**
     * Indicates the kind of Map, from the MapCategoryType Enumeration.
     *
     * @param \Spatie\SchemaOrg\MapCategoryType $mapType
     *
     * @return static
     *
     * @see http://schema.org/mapType
     */
    public function mapType($mapType)
    {
        return $this->setProperty('mapType', $mapType);
    }

}
