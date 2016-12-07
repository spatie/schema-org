<?php

namespace Spatie\SchemaOrg;

/**
 * A video game series.
 *
 * @see http://schema.org/VideoGameSeries
 */
class VideoGameSeries extends CreativeWorkSeries
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
     * An episode of a tv, radio or game media within a series or season.
     *
     * @param \Spatie\SchemaOrg\Episode $episode
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
     * @param \Spatie\SchemaOrg\Episode $episodes
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
     * The number of episodes in this season or series.
     *
     * @param int $numberOfEpisodes
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
     * @param int $numberOfSeasons
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
     * A season in a media series.
     *
     * @param \Spatie\SchemaOrg\CreativeWorkSeason $season
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
     * A season that is part of the media series.
     *
     * @param \Spatie\SchemaOrg\CreativeWorkSeason $containsSeason
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
     * A season in a media series.
     *
     * @param \Spatie\SchemaOrg\CreativeWorkSeason $seasons
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

    /**
     * Indicate how many people can play this game (minimum, maximum, or range).
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue $numberOfPlayers
     *
     * @return static
     *
     * @see http://schema.org/numberOfPlayers
     */
    public function numberOfPlayers($numberOfPlayers)
    {
        return $this->setProperty('numberOfPlayers', $numberOfPlayers);
    }

    /**
     * The task that a player-controlled character, or group of characters may
     * complete in order to gain a reward.
     *
     * @param \Spatie\SchemaOrg\Thing $quest
     *
     * @return static
     *
     * @see http://schema.org/quest
     */
    public function quest($quest)
    {
        return $this->setProperty('quest', $quest);
    }

    /**
     * An item is an object within the game world that can be collected by a
     * player or, occasionally, a non-player character.
     *
     * @param \Spatie\SchemaOrg\Thing $gameItem
     *
     * @return static
     *
     * @see http://schema.org/gameItem
     */
    public function gameItem($gameItem)
    {
        return $this->setProperty('gameItem', $gameItem);
    }

    /**
     * A piece of data that represents a particular aspect of a fictional
     * character (skill, power, character points, advantage, disadvantage).
     *
     * @param \Spatie\SchemaOrg\Thing $characterAttribute
     *
     * @return static
     *
     * @see http://schema.org/characterAttribute
     */
    public function characterAttribute($characterAttribute)
    {
        return $this->setProperty('characterAttribute', $characterAttribute);
    }

    /**
     * Indicates whether this game is multi-player, co-op or single-player.  The
     * game can be marked as multi-player, co-op and single-player at the same
     * time.
     *
     * @param \Spatie\SchemaOrg\GamePlayMode $playMode
     *
     * @return static
     *
     * @see http://schema.org/playMode
     */
    public function playMode($playMode)
    {
        return $this->setProperty('playMode', $playMode);
    }

    /**
     * Cheat codes to the game.
     *
     * @param \Spatie\SchemaOrg\CreativeWork $cheatCode
     *
     * @return static
     *
     * @see http://schema.org/cheatCode
     */
    public function cheatCode($cheatCode)
    {
        return $this->setProperty('cheatCode', $cheatCode);
    }

    /**
     * The electronic systems used to play <a
     * href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video
     * games</a>.
     *
     * @param string|\Spatie\SchemaOrg\Thing $gamePlatform
     *
     * @return static
     *
     * @see http://schema.org/gamePlatform
     */
    public function gamePlatform($gamePlatform)
    {
        return $this->setProperty('gamePlatform', $gamePlatform);
    }

    /**
     * Real or fictional location of the game (or part of game).
     *
     * @param string|\Spatie\SchemaOrg\Place|\Spatie\SchemaOrg\PostalAddress $gameLocation
     *
     * @return static
     *
     * @see http://schema.org/gameLocation
     */
    public function gameLocation($gameLocation)
    {
        return $this->setProperty('gameLocation', $gameLocation);
    }

}
