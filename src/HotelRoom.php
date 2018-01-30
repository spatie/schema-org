<?php

namespace Spatie\SchemaOrg;

/**
 * A hotel room is a single room in a hotel.
 * 
 * See also the <a href="/docs/hotels.html">dedicated document on the use of
 * schema.org for marking up hotels and other forms of accommodations</a>.
 *
 * @see 
 */
class HotelRoom extends Room
{
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
     * @see 
     */
    public function occupancy($occupancy)
    {
        return $this->setProperty('occupancy', $occupancy);
    }

    /**
     * The type of bed or beds included in the accommodation. For the single
     * case of just one bed of a certain type, you use bed directly with a text.
     *       If you want to indicate the quantity of a certain kind of bed, use
     * an instance of BedDetails. For more detailed information, use the
     * amenityFeature property.
     *
     * @param string|string[]|BedDetails|BedDetails[] $bed
     *
     * @return static
     *
     * @see 
     */
    public function bed($bed)
    {
        return $this->setProperty('bed', $bed);
    }

}
