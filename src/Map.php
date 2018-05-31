<?php

namespace Spatie\SchemaOrg;

/**
 * A map.
 *
 * @see http://schema.org/Map
 *
 * @mixin CreativeWork
 */
class Map
{
    /**
     * Indicates the kind of Map, from the MapCategoryType Enumeration.
     *
     * @param MapCategoryType|MapCategoryType[] $mapType
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
