<?php

namespace Spatie\SchemaOrg;

/**
 * A media episode (e.g. TV, radio, video game) which can be part of a series or
 * season.
 *
 * @see 
 */
class Episode extends CreativeWork
{
    /**
     * An actor, e.g. in tv, radio, movie, video games etc. Actors can be
     * associated with individual items or with a series, episode, clip.
     *
     * @param Person|Person[] $actors
     *
     * @return static
     *
     * @see 
     */
    public function actors($actors)
    {
        return $this->setProperty('actors', $actors);
    }

    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event.
     * Actors can be associated with individual items or with a series, episode,
     * clip.
     *
     * @param Person|Person[] $actor
     *
     * @return static
     *
     * @see 
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
     * @see 
     */
    public function director($director)
    {
        return $this->setProperty('director', $director);
    }

    /**
     * A director of e.g. tv, radio, movie, video games etc. content. Directors
     * can be associated with individual items or with a series, episode, clip.
     *
     * @param Person|Person[] $directors
     *
     * @return static
     *
     * @see 
     */
    public function directors($directors)
    {
        return $this->setProperty('directors', $directors);
    }

    /**
     * Position of the episode within an ordered group of episodes.
     *
     * @param int|int[]|string|string[] $episodeNumber
     *
     * @return static
     *
     * @see 
     */
    public function episodeNumber($episodeNumber)
    {
        return $this->setProperty('episodeNumber', $episodeNumber);
    }

    /**
     * The season to which this episode belongs.
     *
     * @param CreativeWorkSeason|CreativeWorkSeason[] $partOfSeason
     *
     * @return static
     *
     * @see 
     */
    public function partOfSeason($partOfSeason)
    {
        return $this->setProperty('partOfSeason', $partOfSeason);
    }

    /**
     * The series to which this episode or season belongs.
     *
     * @param CreativeWorkSeries|CreativeWorkSeries[] $partOfSeries
     *
     * @return static
     *
     * @see 
     */
    public function partOfSeries($partOfSeries)
    {
        return $this->setProperty('partOfSeries', $partOfSeries);
    }

    /**
     * The composer of the soundtrack.
     *
     * @param MusicGroup|MusicGroup[]|Person|Person[] $musicBy
     *
     * @return static
     *
     * @see 
     */
    public function musicBy($musicBy)
    {
        return $this->setProperty('musicBy', $musicBy);
    }

    /**
     * The production company or studio responsible for the item e.g. series,
     * video game, episode etc.
     *
     * @param Organization|Organization[] $productionCompany
     *
     * @return static
     *
     * @see 
     */
    public function productionCompany($productionCompany)
    {
        return $this->setProperty('productionCompany', $productionCompany);
    }

    /**
     * The trailer of a movie or tv/radio series, season, episode, etc.
     *
     * @param VideoObject|VideoObject[] $trailer
     *
     * @return static
     *
     * @see 
     */
    public function trailer($trailer)
    {
        return $this->setProperty('trailer', $trailer);
    }

}
