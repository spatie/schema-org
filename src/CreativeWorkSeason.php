<?php

namespace Spatie\SchemaOrg;

/**
 * A media season e.g. tv, radio, video game etc.
 *
 * @see http://schema.org/CreativeWorkSeason
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class CreativeWorkSeason extends BaseType
{
    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event.
     * Actors can be associated with individual items or with a series, episode,
     * clip.
     *
     * @param Person|Person[] $actor
     *
     * @return static
     *
     * @see http://schema.org/actor
     */
    public function actor($actor)
    {
        return $this->setProperty('actor', $actor);
    }

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an
     * event. Directors can be associated with individual items or with a
     * series, episode, clip.
     *
     * @param Person|Person[] $director
     *
     * @return static
     *
     * @see http://schema.org/director
     */
    public function director($director)
    {
        return $this->setProperty('director', $director);
    }

    /**
     * The end date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $endDate
     *
     * @return static
     *
     * @see http://schema.org/endDate
     */
    public function endDate($endDate)
    {
        return $this->setProperty('endDate', $endDate);
    }

    /**
     * An episode of a tv, radio or game media within a series or season.
     *
     * @param Episode|Episode[] $episode
     *
     * @return static
     *
     * @see http://schema.org/episode
     */
    public function episode($episode)
    {
        return $this->setProperty('episode', $episode);
    }

    /**
     * An episode of a TV/radio series or season.
     *
     * @param Episode|Episode[] $episodes
     *
     * @return static
     *
     * @see http://schema.org/episodes
     */
    public function episodes($episodes)
    {
        return $this->setProperty('episodes', $episodes);
    }

    /**
     * The number of episodes in this season or series.
     *
     * @param int|int[] $numberOfEpisodes
     *
     * @return static
     *
     * @see http://schema.org/numberOfEpisodes
     */
    public function numberOfEpisodes($numberOfEpisodes)
    {
        return $this->setProperty('numberOfEpisodes', $numberOfEpisodes);
    }

    /**
     * The series to which this episode or season belongs.
     *
     * @param CreativeWorkSeries|CreativeWorkSeries[] $partOfSeries
     *
     * @return static
     *
     * @see http://schema.org/partOfSeries
     */
    public function partOfSeries($partOfSeries)
    {
        return $this->setProperty('partOfSeries', $partOfSeries);
    }

    /**
     * The production company or studio responsible for the item e.g. series,
     * video game, episode etc.
     *
     * @param Organization|Organization[] $productionCompany
     *
     * @return static
     *
     * @see http://schema.org/productionCompany
     */
    public function productionCompany($productionCompany)
    {
        return $this->setProperty('productionCompany', $productionCompany);
    }

    /**
     * Position of the season within an ordered group of seasons.
     *
     * @param int|int[]|string|string[] $seasonNumber
     *
     * @return static
     *
     * @see http://schema.org/seasonNumber
     */
    public function seasonNumber($seasonNumber)
    {
        return $this->setProperty('seasonNumber', $seasonNumber);
    }

    /**
     * The start date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $startDate
     *
     * @return static
     *
     * @see http://schema.org/startDate
     */
    public function startDate($startDate)
    {
        return $this->setProperty('startDate', $startDate);
    }

    /**
     * The trailer of a movie or tv/radio series, season, episode, etc.
     *
     * @param VideoObject|VideoObject[] $trailer
     *
     * @return static
     *
     * @see http://schema.org/trailer
     */
    public function trailer($trailer)
    {
        return $this->setProperty('trailer', $trailer);
    }

}
