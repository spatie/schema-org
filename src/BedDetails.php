<?php

namespace Spatie\SchemaOrg;

/**
 * An entity holding detailed information about the available bed types, e.g.
 * the quantity of twin beds for a hotel room. For the single case of just one
 * bed of a certain type, you can use bed directly with a text. See also
 * [[BedType]] (under development).
 *
 * @see http://schema.org/BedDetails
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class BedDetails extends BaseType
{
    /**
     * The quantity of the given bed type available in the HotelRoom, Suite,
     * House, or Apartment.
     *
     * @param float|float[]|int|int[] $numberOfBeds
     *
     * @return static
     *
     * @see http://schema.org/numberOfBeds
     */
    public function numberOfBeds($numberOfBeds)
    {
        return $this->setProperty('numberOfBeds', $numberOfBeds);
    }

    /**
     * The type of bed to which the BedDetail refers, i.e. the type of bed
     * available in the quantity indicated by quantity.
     *
     * @param string|string[] $typeOfBed
     *
     * @return static
     *
     * @see http://schema.org/typeOfBed
     */
    public function typeOfBed($typeOfBed)
    {
        return $this->setProperty('typeOfBed', $typeOfBed);
    }

}
