<?php

namespace Spatie\SchemaOrg;

/**
 * A TV episode which can be part of a series or season.
 *
 * @see http://schema.org/TVEpisode
 *
 * @mixin \Spatie\SchemaOrg\Episode
 */
class TVEpisode extends BaseType
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

    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47
     * standard format](http://tools.ietf.org/html/bcp47).
     *
     * @param Language|Language[]|string|string[] $subtitleLanguage
     *
     * @return static
     *
     * @see http://schema.org/subtitleLanguage
     */
    public function subtitleLanguage($subtitleLanguage)
    {
        return $this->setProperty('subtitleLanguage', $subtitleLanguage);
    }

}
