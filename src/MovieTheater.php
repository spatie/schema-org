<?php

namespace Spatie\SchemaOrg;

/**
 * A movie theater.
 *
 * @see 
 */
class MovieTheater extends CivicStructure
{
    /**
     * The number of screens in the movie theater.
     *
     * @param float|float[]|int|int[] $screenCount
     *
     * @return static
     *
     * @see 
     */
    public function screenCount($screenCount)
    {
        return $this->setProperty('screenCount', $screenCount);
    }

}
