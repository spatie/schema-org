<?php

namespace Spatie\SchemaOrg;

/**
 * A short TV or radio program or a segment/part of a program.
 *
 * @see http://schema.org/Clip
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class Clip extends BaseType
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
     * An actor, e.g. in tv, radio, movie, video games etc. Actors can be
     * associated with individual items or with a series, episode, clip.
     *
     * @param Person|Person[] $actors
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
     * Position of the clip within an ordered group of clips.
     *
     * @param int|int[]|string|string[] $clipNumber
     *
     * @return static
     *
     * @see http://schema.org/clipNumber
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
     * @param Person|Person[] $directors
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
     * The composer of the soundtrack.
     *
     * @param MusicGroup|MusicGroup[]|Person|Person[] $musicBy
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
     * The episode to which this clip belongs.
     *
     * @param Episode|Episode[] $partOfEpisode
     *
     * @return static
     *
     * @see http://schema.org/partOfEpisode
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
     * @see http://schema.org/partOfSeason
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
     * @see http://schema.org/partOfSeries
     */
    public function partOfSeries($partOfSeries)
    {
        return $this->setProperty('partOfSeries', $partOfSeries);
    }

}
