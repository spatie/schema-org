<?php

namespace Spatie\SchemaOrg;

/**
 * Used to describe a seat, such as a reserved seat in an event reservation.
 *
 * @see http://schema.org/Seat
 */
class Seat extends Intangible
{
    /**
     * The location of the reserved seat (e.g., 27).
     *
     * @param string $seatNumber
     *
     * @return static
     *
     * @see http://schema.org/seatNumber
     */
    public function seatNumber($seatNumber)
    {
        return $this->setProperty('seatNumber', $seatNumber);
    }

    /**
     * The row location of the reserved seat (e.g., B).
     *
     * @param string $seatRow
     *
     * @return static
     *
     * @see http://schema.org/seatRow
     */
    public function seatRow($seatRow)
    {
        return $this->setProperty('seatRow', $seatRow);
    }

    /**
     * The section location of the reserved seat (e.g. Orchestra).
     *
     * @param string $seatSection
     *
     * @return static
     *
     * @see http://schema.org/seatSection
     */
    public function seatSection($seatSection)
    {
        return $this->setProperty('seatSection', $seatSection);
    }

    /**
     * The type/class of the seat.
     *
     * @param string|\Spatie\SchemaOrg\QualitativeValue $seatingType
     *
     * @return static
     *
     * @see http://schema.org/seatingType
     */
    public function seatingType($seatingType)
    {
        return $this->setProperty('seatingType', $seatingType);
    }

}
