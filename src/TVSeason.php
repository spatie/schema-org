<?php

namespace Spatie\SchemaOrg;

/**
 * Season dedicated to TV broadcast and associated online delivery.
 *
 * @see 
 */
class TVSeason extends CreativeWork
{
    /**
     * The country of the principal offices of the production company or
     * individual responsible for the movie or program.
     *
     * @param Country|Country[] $countryOfOrigin
     *
     * @return static
     *
     * @see 
     */
    public function countryOfOrigin($countryOfOrigin)
    {
        return $this->setProperty('countryOfOrigin', $countryOfOrigin);
    }

    /**
     * The TV series to which this episode or season belongs.
     *
     * @param TVSeries|TVSeries[] $partOfTVSeries
     *
     * @return static
     *
     * @see 
     */
    public function partOfTVSeries($partOfTVSeries)
    {
        return $this->setProperty('partOfTVSeries', $partOfTVSeries);
    }

}
