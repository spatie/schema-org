<?php

namespace Spatie\SchemaOrg;

/**
 * Indicates whether this game is multi-player, co-op or single-player.
 *
 * @see http://schema.org/GamePlayMode
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class GamePlayMode extends BaseType
{
    /**
     * Play mode: CoOp. Co-operative games, where you play on the same team with
     * friends.
     *
     * @see http://schema.org/CoOp
     */
     const CoOp = 'http://schema.org/CoOp';

    /**
     * Play mode: MultiPlayer. Requiring or allowing multiple human players to
     * play simultaneously.
     *
     * @see http://schema.org/MultiPlayer
     */
     const MultiPlayer = 'http://schema.org/MultiPlayer';

    /**
     * Play mode: SinglePlayer. Which is played by a lone player.
     *
     * @see http://schema.org/SinglePlayer
     */
     const SinglePlayer = 'http://schema.org/SinglePlayer';

}
