<?php

namespace Spatie\SchemaOrg;

/**
 * An enumeration of several kinds of Map.
 *
 * @see http://schema.org/MapCategoryType
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class MapCategoryType extends BaseType
{
    /**
     * A parking map.
     *
     * @see http://schema.org/ParkingMap
     */
     const ParkingMap = 'http://schema.org/ParkingMap';

    /**
     * A seating map.
     *
     * @see http://schema.org/SeatingMap
     */
     const SeatingMap = 'http://schema.org/SeatingMap';

    /**
     * A transit map.
     *
     * @see http://schema.org/TransitMap
     */
     const TransitMap = 'http://schema.org/TransitMap';

    /**
     * A venue map (e.g. for malls, auditoriums, museums, etc.).
     *
     * @see http://schema.org/VenueMap
     */
     const VenueMap = 'http://schema.org/VenueMap';

}
