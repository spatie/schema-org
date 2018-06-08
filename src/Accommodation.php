<?php

namespace Spatie\SchemaOrg;

/**
 * An accommodation is a place that can accommodate human beings, e.g. a hotel
 * room, a camping pitch, or a meeting room. Many accommodations are for
 * overnight stays, but this is not a mandatory requirement.
 * For more specific types of accommodations not defined in schema.org, one can
 * use additionalType with external vocabularies.
 * 
 * See also the <a href="/docs/hotels.html">dedicated document on the use of
 * schema.org for marking up hotels and other forms of accommodations</a>.
 *
 * @see http://schema.org/Accommodation
 *
 * @mixin \Spatie\SchemaOrg\Place
 */
class Accommodation extends BaseType
{
    /**
     * An amenity feature (e.g. a characteristic or service) of the
     * Accommodation. This generic property does not make a statement about
     * whether the feature is included in an offer for the main accommodation or
     * available at extra costs.
     *
     * @param LocationFeatureSpecification|LocationFeatureSpecification[] $amenityFeature
     *
     * @return static
     *
     * @see http://schema.org/amenityFeature
     */
    public function amenityFeature($amenityFeature)
    {
        return $this->setProperty('amenityFeature', $amenityFeature);
    }

    /**
     * The size of the accommodation, e.g. in square meter or squarefoot.
     * Typical unit code(s): MTK for square meter, FTK for square foot, or YDK
     * for square yard
     *
     * @param QuantitativeValue|QuantitativeValue[] $floorSize
     *
     * @return static
     *
     * @see http://schema.org/floorSize
     */
    public function floorSize($floorSize)
    {
        return $this->setProperty('floorSize', $floorSize);
    }

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
     * Indications regarding the permitted usage of the accommodation.
     *
     * @param string|string[] $permittedUsage
     *
     * @return static
     *
     * @see http://schema.org/permittedUsage
     */
    public function permittedUsage($permittedUsage)
    {
        return $this->setProperty('permittedUsage', $permittedUsage);
    }

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging
     * business. More detailed information can be put in a text value.
     *
     * @param bool|bool[]|string|string[] $petsAllowed
     *
     * @return static
     *
     * @see http://schema.org/petsAllowed
     */
    public function petsAllowed($petsAllowed)
    {
        return $this->setProperty('petsAllowed', $petsAllowed);
    }

}
