<?php

namespace Spatie\SchemaOrg;

/**
 * Server that provides game interaction in a multiplayer game.
 *
 * @see http://schema.org/GameServer
 */
class GameServer extends Intangible
{
    /**
     * Status of a game server.
     *
     * @param \Spatie\SchemaOrg\GameServerStatus $serverStatus
     *
     * @return static
     *
     * @see http://schema.org/serverStatus
     */
    public function serverStatus($serverStatus)
    {
        return $this->setProperty('serverStatus', $serverStatus);
    }

    /**
     * Number of players on the server.
     *
     * @param int $playersOnline
     *
     * @return static
     *
     * @see http://schema.org/playersOnline
     */
    public function playersOnline($playersOnline)
    {
        return $this->setProperty('playersOnline', $playersOnline);
    }

    /**
     * Video game which is played on this server.
     *
     * @param \Spatie\SchemaOrg\VideoGame $game
     *
     * @return static
     *
     * @see http://schema.org/game
     */
    public function game($game)
    {
        return $this->setProperty('game', $game);
    }

}
