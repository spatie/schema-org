<?php

namespace Spatie\SchemaOrg;

/**
 * A video game is an electronic game that involves human interaction with a
 * user interface to generate visual feedback on a video device.
 *
 * @see http://schema.org/VideoGame
 *
 * @mixin \Spatie\SchemaOrg\SoftwareApplication
 * @mixin \Spatie\SchemaOrg\Game
 */
class VideoGame extends BaseType
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
     * The server on which  it is possible to play the game.
     *
     * @param GameServer|GameServer[] $gameServer
     *
     * @return static
     *
     * @see http://schema.org/gameServer
     */
    public function gameServer($gameServer)
    {
        return $this->setProperty('gameServer', $gameServer);
    }

    /**
     * Links to tips, tactics, etc.
     *
     * @param CreativeWork|CreativeWork[] $gameTip
     *
     * @return static
     *
     * @see http://schema.org/gameTip
     */
    public function gameTip($gameTip)
    {
        return $this->setProperty('gameTip', $gameTip);
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
