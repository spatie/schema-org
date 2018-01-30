<?php

namespace Spatie\SchemaOrg;

/**
 * A short TV or radio program or a segment/part of a program.
 *
 * @see 
 */
class Clip extends CreativeWork
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
     * @see 
     */
    public function actor($actor)
    {
        return $this->setProperty('actor', $actor);
    }

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
     * Position of the clip within an ordered group of clips.
     *
     * @param int|int[]|string|string[] $clipNumber
     *
     * @return static
     *
     * @see 
     */
    public function clipNumber($clipNumber)
    {
        return $this->setProperty('clipNumber', $clipNumber);
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
     * The episode to which this clip belongs.
     *
     * @param Episode|Episode[] $partOfEpisode
     *
     * @return static
     *
     * @see 
     */
    public function partOfEpisode($partOfEpisode)
    {
        return $this->setProperty('partOfEpisode', $partOfEpisode);
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

}
