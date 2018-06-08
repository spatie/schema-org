<?php

namespace Spatie\SchemaOrg;

/**
 * CreativeWorkSeries dedicated to TV broadcast and associated online delivery.
 *
 * @see http://schema.org/TVSeries
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 * @mixin \Spatie\SchemaOrg\CreativeWorkSeries
 */
class TVSeries extends BaseType
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
     * A season that is part of the media series.
     *
     * @param CreativeWorkSeason|CreativeWorkSeason[] $containsSeason
     *
     * @return static
     *
     * @see http://schema.org/containsSeason
     */
    public function containsSeason($containsSeason)
    {
        return $this->setProperty('containsSeason', $containsSeason);
    }

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
     * The number of seasons in this series.
     *
     * @param int|int[] $numberOfSeasons
     *
     * @return static
     *
     * @see http://schema.org/numberOfSeasons
     */
    public function numberOfSeasons($numberOfSeasons)
    {
        return $this->setProperty('numberOfSeasons', $numberOfSeasons);
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
     * A season in a media series.
     *
     * @param CreativeWorkSeason|CreativeWorkSeason[] $season
     *
     * @return static
     *
     * @see http://schema.org/season
     */
    public function season($season)
    {
        return $this->setProperty('season', $season);
    }

    /**
     * A season in a media series.
     *
     * @param CreativeWorkSeason|CreativeWorkSeason[] $seasons
     *
     * @return static
     *
     * @see http://schema.org/seasons
     */
    public function seasons($seasons)
    {
        return $this->setProperty('seasons', $seasons);
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
