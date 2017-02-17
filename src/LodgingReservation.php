<?php

namespace Spatie\SchemaOrg;

/**
 * A reservation for lodging at a hotel, motel, inn, etc.
 * 
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations.
 *
 * @see http://schema.org/LodgingReservation
 */
class LodgingReservation extends Reservation
{
    /**
     * The earliest someone may check into a lodging establishment.
     *
     * @param \DateTimeInterface $checkinTime
     *
     * @return static
     *
     * @see http://schema.org/checkinTime
     */
    public function checkinTime($checkinTime)
    {
        return $this->setProperty('checkinTime', $checkinTime);
    }

    /**
     * The latest someone may check out of a lodging establishment.
     *
     * @param \DateTimeInterface $checkoutTime
     *
     * @return static
     *
     * @see http://schema.org/checkoutTime
     */
    public function checkoutTime($checkoutTime)
    {
        return $this->setProperty('checkoutTime', $checkoutTime);
    }

    /**
     * Textual description of the unit type (including suite vs. room, size of
     * bed, etc.).
     *
     * @param string|\Spatie\SchemaOrg\QualitativeValue $lodgingUnitType
     *
     * @return static
     *
     * @see http://schema.org/lodgingUnitType
     */
    public function lodgingUnitType($lodgingUnitType)
    {
        return $this->setProperty('lodgingUnitType', $lodgingUnitType);
    }

    /**
     * A full description of the lodging unit.
     *
     * @param string $lodgingUnitDescription
     *
     * @return static
     *
     * @see http://schema.org/lodgingUnitDescription
     */
    public function lodgingUnitDescription($lodgingUnitDescription)
    {
        return $this->setProperty('lodgingUnitDescription', $lodgingUnitDescription);
    }

    /**
     * The number of adults staying in the unit.
     *
     * @param int|\Spatie\SchemaOrg\QuantitativeValue $numAdults
     *
     * @return static
     *
     * @see http://schema.org/numAdults
     */
    public function numAdults($numAdults)
    {
        return $this->setProperty('numAdults', $numAdults);
    }

    /**
     * The number of children staying in the unit.
     *
     * @param int|\Spatie\SchemaOrg\QuantitativeValue $numChildren
     *
     * @return static
     *
     * @see http://schema.org/numChildren
     */
    public function numChildren($numChildren)
    {
        return $this->setProperty('numChildren', $numChildren);
    }

}
