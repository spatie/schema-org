<?php

namespace Spatie\SchemaOrg;

/**
 * The act of traveling from an fromLocation to a destination by a specified
 * mode of transport, optionally with participants.
 *
 * @see 
 */
class TravelAction extends MoveAction
{
    /**
     * The distance travelled, e.g. exercising or travelling.
     *
     * @param Distance|Distance[] $distance
     *
     * @return static
     *
     * @see 
     */
    public function distance($distance)
    {
        return $this->setProperty('distance', $distance);
    }

}
