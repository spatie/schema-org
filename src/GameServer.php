<?php

namespace Spatie\SchemaOrg;

/**
 * Server that provides game interaction in a multiplayer game.
 *
 * @see http://schema.org/GameServer
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class GameServer extends BaseType
{
    /**
     * Video game which is played on this server.
     *
     * @param VideoGame|VideoGame[] $game
     *
     * @return static
     *
     * @see http://schema.org/game
     */
    public function game($game)
    {
        return $this->setProperty('game', $game);
    }

    /**
     * Number of players on the server.
     *
     * @param int|int[] $playersOnline
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
     * Status of a game server.
     *
     * @param GameServerStatus|GameServerStatus[] $serverStatus
     *
     * @return static
     *
     * @see http://schema.org/serverStatus
     */
    public function serverStatus($serverStatus)
    {
        return $this->setProperty('serverStatus', $serverStatus);
    }

}
