<?php

namespace Spatie\SchemaOrg;

/**
 * A movie theater.
 *
 * @see http://schema.org/MovieTheater
 */
class MovieTheater extends CivicStructure
{
    /**
     * The number of screens in the movie theater.
     *
     * @param float|int $screenCount
     *
     * @return static
     *
     * @see http://schema.org/screenCount
     */
    public function screenCount($screenCount)
    {
        return $this->setProperty('screenCount', $screenCount);
    }

}
