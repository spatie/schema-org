<?php

namespace Spatie\SchemaOrg;

/**
 * A video game series.
 *
 * @see http://schema.org/VideoGameSeries
 *
 * @mixin \Spatie\SchemaOrg\CreativeWorkSeries
 */
class VideoGameSeries extends BaseType
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
     * A piece of data that represents a particular aspect of a fictional
     * character (skill, power, character points, advantage, disadvantage).
     *
     * @param Thing|Thing[] $characterAttribute
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
     * Cheat codes to the game.
     *
     * @param CreativeWork|CreativeWork[] $cheatCode
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
     * An item is an object within the game world that can be collected by a
     * player or, occasionally, a non-player character.
     *
     * @param Thing|Thing[] $gameItem
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
     * Real or fictional location of the game (or part of game).
     *
     * @param Place|Place[]|PostalAddress|PostalAddress[]|string|string[] $gameLocation
     *
     * @return static
     *
     * @see http://schema.org/gameLocation
     */
    public function gameLocation($gameLocation)
    {
        return $this->setProperty('gameLocation', $gameLocation);
    }

    /**
     * The electronic systems used to play <a
     * href="http://en.wikipedia.org/wiki/Category:Video_game_platforms">video
     * games</a>.
     *
     * @param Thing|Thing[]|string|string[] $gamePlatform
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
     * Indicate how many people can play this game (minimum, maximum, or range).
     *
     * @param QuantitativeValue|QuantitativeValue[] $numberOfPlayers
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
     * Indicates whether this game is multi-player, co-op or single-player.  The
     * game can be marked as multi-player, co-op and single-player at the same
     * time.
     *
     * @param GamePlayMode|GamePlayMode[] $playMode
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
     * The task that a player-controlled character, or group of characters may
     * complete in order to gain a reward.
     *
     * @param Thing|Thing[] $quest
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
