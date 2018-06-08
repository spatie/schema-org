<?php

namespace Spatie\SchemaOrg;

/**
 * Residence type: Single-family home.
 *
 * @see http://schema.org/SingleFamilyResidence
 *
 * @mixin \Spatie\SchemaOrg\House
 */
class SingleFamilyResidence extends BaseType
{
    /**
     * The number of rooms (excluding bathrooms and closets) of the
     * accommodation or lodging business.
     * Typical unit code(s): ROM for room or C62 for no unit. The type of room
     * can be put in the unitText property of the QuantitativeValue.
     *
     * @param QuantitativeValue|QuantitativeValue[]|float|float[]|int|int[] $numberOfRooms
     *
     * @return static
     *
     * @see http://schema.org/numberOfRooms
     */
    public function numberOfRooms($numberOfRooms)
    {
        return $this->setProperty('numberOfRooms', $numberOfRooms);
    }

    /**
     * The allowed total occupancy for the accommodation in persons (including
     * infants etc). For individual accommodations, this is not necessarily the
     * legal maximum but defines the permitted usage as per the contractual
     * agreement (e.g. a double room used by a single person).
     * Typical unit code(s): C62 for person
     *
     * @param QuantitativeValue|QuantitativeValue[] $occupancy
     *
     * @return static
     *
     * @see http://schema.org/occupancy
     */
    public function occupancy($occupancy)
    {
        return $this->setProperty('occupancy', $occupancy);
    }

}
