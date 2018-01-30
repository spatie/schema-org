<?php

namespace Spatie\SchemaOrg;

/**
 * Used to describe a seat, such as a reserved seat in an event reservation.
 *
 * @see 
 */
class Seat extends Intangible
{
    /**
     * The location of the reserved seat (e.g., 27).
     *
     * @param string|string[] $seatNumber
     *
     * @return static
     *
     * @see 
     */
    public function seatNumber($seatNumber)
    {
        return $this->setProperty('seatNumber', $seatNumber);
    }

    /**
     * The row location of the reserved seat (e.g., B).
     *
     * @param string|string[] $seatRow
     *
     * @return static
     *
     * @see 
     */
    public function seatRow($seatRow)
    {
        return $this->setProperty('seatRow', $seatRow);
    }

    /**
     * The section location of the reserved seat (e.g. Orchestra).
     *
     * @param string|string[] $seatSection
     *
     * @return static
     *
     * @see 
     */
    public function seatSection($seatSection)
    {
        return $this->setProperty('seatSection', $seatSection);
    }

    /**
     * The type/class of the seat.
     *
     * @param string|string[]|QualitativeValue|QualitativeValue[] $seatingType
     *
     * @return static
     *
     * @see 
     */
    public function seatingType($seatingType)
    {
        return $this->setProperty('seatingType', $seatingType);
    }

}
