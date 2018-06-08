<?php

namespace Spatie\SchemaOrg;

/**
 * Status of a game server.
 *
 * @see http://schema.org/GameServerStatus
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class GameServerStatus extends BaseType
{
    /**
     * Game server status: OfflinePermanently. Server is offline and not
     * available.
     *
     * @see http://schema.org/OfflinePermanently
     */
     const OfflinePermanently = 'http://schema.org/OfflinePermanently';

    /**
     * Game server status: OfflineTemporarily. Server is offline now but it can
     * be online soon.
     *
     * @see http://schema.org/OfflineTemporarily
     */
     const OfflineTemporarily = 'http://schema.org/OfflineTemporarily';

    /**
     * Game server status: Online. Server is available.
     *
     * @see http://schema.org/Online
     */
     const Online = 'http://schema.org/Online';

    /**
     * Game server status: OnlineFull. Server is online but unavailable. The
     * maximum number of players has reached.
     *
     * @see http://schema.org/OnlineFull
     */
     const OnlineFull = 'http://schema.org/OnlineFull';

}
