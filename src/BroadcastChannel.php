<?php

namespace Spatie\SchemaOrg;

/**
 * A unique instance of a BroadcastService on a CableOrSatelliteService lineup.
 *
 * @see http://schema.org/BroadcastChannel
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class BroadcastChannel extends BaseType
{
    /**
     * The unique address by which the BroadcastService can be identified in a
     * provider lineup. In US, this is typically a number.
     *
     * @param string|string[] $broadcastChannelId
     *
     * @return static
     *
     * @see http://schema.org/broadcastChannelId
     */
    public function broadcastChannelId($broadcastChannelId)
    {
        return $this->setProperty('broadcastChannelId', $broadcastChannelId);
    }

    /**
     * The type of service required to have access to the channel (e.g. Standard
     * or Premium).
     *
     * @param string|string[] $broadcastServiceTier
     *
     * @return static
     *
     * @see http://schema.org/broadcastServiceTier
     */
    public function broadcastServiceTier($broadcastServiceTier)
    {
        return $this->setProperty('broadcastServiceTier', $broadcastServiceTier);
    }

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     * @param string|string[] $genre
     *
     * @return static
     *
     * @see http://schema.org/genre
     */
    public function genre($genre)
    {
        return $this->setProperty('genre', $genre);
    }

    /**
     * The CableOrSatelliteService offering the channel.
     *
     * @param CableOrSatelliteService|CableOrSatelliteService[] $inBroadcastLineup
     *
     * @return static
     *
     * @see http://schema.org/inBroadcastLineup
     */
    public function inBroadcastLineup($inBroadcastLineup)
    {
        return $this->setProperty('inBroadcastLineup', $inBroadcastLineup);
    }

    /**
     * The BroadcastService offered on this channel.
     *
     * @param BroadcastService|BroadcastService[] $providesBroadcastService
     *
     * @return static
     *
     * @see http://schema.org/providesBroadcastService
     */
    public function providesBroadcastService($providesBroadcastService)
    {
        return $this->setProperty('providesBroadcastService', $providesBroadcastService);
    }

}
