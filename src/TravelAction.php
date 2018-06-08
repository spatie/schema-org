<?php

namespace Spatie\SchemaOrg;

/**
 * The act of traveling from an fromLocation to a destination by a specified
 * mode of transport, optionally with participants.
 *
 * @see http://schema.org/TravelAction
 *
 * @mixin \Spatie\SchemaOrg\MoveAction
 */
class TravelAction extends BaseType
{
    /**
     * The distance travelled, e.g. exercising or travelling.
     *
     * @param Distance|Distance[] $distance
     *
     * @return static
     *
     * @see http://schema.org/distance
     */
    public function distance($distance)
    {
        return $this->setProperty('distance', $distance);
    }

}
