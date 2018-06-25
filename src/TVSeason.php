<?php

namespace Spatie\SchemaOrg;

/**
 * Season dedicated to TV broadcast and associated online delivery.
 *
 * @see http://schema.org/TVSeason
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 * @mixin \Spatie\SchemaOrg\CreativeWorkSeason
 */
class TVSeason extends BaseType
{
    /**
     * The country of the principal offices of the production company or
     * individual responsible for the movie or program.
     *
     * @param Country|Country[] $countryOfOrigin
     *
     * @return static
     *
     * @see http://schema.org/countryOfOrigin
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
     * @see http://schema.org/partOfTVSeries
     */
    public function partOfTVSeries($partOfTVSeries)
    {
        return $this->setProperty('partOfTVSeries', $partOfTVSeries);
    }

}
