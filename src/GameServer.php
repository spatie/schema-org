<?php

namespace Spatie\SchemaOrg;

/**
 * Server that provides game interaction in a multiplayer game.
 *
 * @see 
 */
class GameServer extends Intangible
{
    /**
     * Number of players on the server.
     *
     * @param int|int[] $playersOnline
     *
     * @return static
     *
     * @see 
     */
    public function playersOnline($playersOnline)
    {
        return $this->setProperty('playersOnline', $playersOnline);
    }

    /**
     * Video game which is played on this server.
     *
     * @param VideoGame|VideoGame[] $game
     *
     * @return static
     *
     * @see 
     */
    public function game($game)
    {
        return $this->setProperty('game', $game);
    }

    /**
     * Status of a game server.
     *
     * @param GameServerStatus|GameServerStatus[] $serverStatus
     *
     * @return static
     *
     * @see 
     */
    public function serverStatus($serverStatus)
    {
        return $this->setProperty('serverStatus', $serverStatus);
    }

}
