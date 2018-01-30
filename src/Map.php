<?php

namespace Spatie\SchemaOrg;

/**
 * A map.
 *
 * @see 
 */
class Map extends CreativeWork
{
    /**
     * Indicates the kind of Map, from the MapCategoryType Enumeration.
     *
     * @param MapCategoryType|MapCategoryType[] $mapType
     *
     * @return static
     *
     * @see 
     */
    public function mapType($mapType)
    {
        return $this->setProperty('mapType', $mapType);
    }

}
