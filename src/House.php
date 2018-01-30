<?php

namespace Spatie\SchemaOrg;

/**
 * A house is a building or structure that has the ability to be occupied for
 * habitation by humans or other creatures (Source: Wikipedia, the free
 * encyclopedia, see <a
 * href="http://en.wikipedia.org/wiki/House">http://en.wikipedia.org/wiki/House</a>).
 *
 * @see 
 */
class House extends Accommodation
{
    /**
     * The number of rooms (excluding bathrooms and closets) of the
     * acccommodation or lodging business.
     * Typical unit code(s): ROM for room or C62 for no unit. The type of room
     * can be put in the unitText property of the QuantitativeValue.
     *
     * @param float|float[]|int|int[]|QuantitativeValue|QuantitativeValue[] $numberOfRooms
     *
     * @return static
     *
     * @see 
     */
    public function numberOfRooms($numberOfRooms)
    {
        return $this->setProperty('numberOfRooms', $numberOfRooms);
    }

}
