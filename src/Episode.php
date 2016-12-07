<?php

namespace Spatie\SchemaOrg;

/**
 * A media episode (e.g. TV, radio, video game) which can be part of a series or
 * season.
 *
 * @see http://schema.org/Episode
 */
class Episode extends CreativeWork
{
    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event.
     * Actors can be associated with individual items or with a series, episode,
     * clip.
     *
     * @param \Spatie\SchemaOrg\Person $actor
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
     * An actor, e.g. in tv, radio, movie, video games etc. Actors can be
     * associated with individual items or with a series, episode, clip.
     *
     * @param \Spatie\SchemaOrg\Person $actors
     *
     * @return static
     *
     * @see http://schema.org/actors
     */
    public function actors($actors)
    {
        return $this->setProperty('actors', $actors);
    }

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an
     * event. Directors can be associated with individual items or with a
     * series, episode, clip.
     *
     * @param \Spatie\SchemaOrg\Person $director
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
     * A director of e.g. tv, radio, movie, video games etc. content. Directors
     * can be associated with individual items or with a series, episode, clip.
     *
     * @param \Spatie\SchemaOrg\Person $directors
     *
     * @return static
     *
     * @see http://schema.org/directors
     */
    public function directors($directors)
    {
        return $this->setProperty('directors', $directors);
    }

    /**
     * Position of the episode within an ordered group of episodes.
     *
     * @param int|string $episodeNumber
     *
     * @return static
     *
     * @see http://schema.org/episodeNumber
     */
    public function episodeNumber($episodeNumber)
    {
        return $this->setProperty('episodeNumber', $episodeNumber);
    }

    /**
     * The composer of the soundtrack.
     *
     * @param \Spatie\SchemaOrg\MusicGroup|\Spatie\SchemaOrg\Person $musicBy
     *
     * @return static
     *
     * @see http://schema.org/musicBy
     */
    public function musicBy($musicBy)
    {
        return $this->setProperty('musicBy', $musicBy);
    }

    /**
     * The season to which this episode belongs.
     *
     * @param \Spatie\SchemaOrg\CreativeWorkSeason $partOfSeason
     *
     * @return static
     *
     * @see http://schema.org/partOfSeason
     */
    public function partOfSeason($partOfSeason)
    {
        return $this->setProperty('partOfSeason', $partOfSeason);
    }

    /**
     * The series to which this episode or season belongs.
     *
     * @param \Spatie\SchemaOrg\CreativeWorkSeries $partOfSeries
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
     * @param \Spatie\SchemaOrg\Organization $productionCompany
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
     * The trailer of a movie or tv/radio series, season, episode, etc.
     *
     * @param \Spatie\SchemaOrg\VideoObject $trailer
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
