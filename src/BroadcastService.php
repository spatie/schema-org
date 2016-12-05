<?php

namespace Spatie\SchemaOrg;

/**
 * A delivery service through which content is provided via broadcast over the
 * air or online.
 *
 * @see http://schema.org/BroadcastService
 */
class BroadcastService extends Service
{
    /**
     * The area within which users can expect to reach the broadcast service.
     *
     * @param \Spatie\SchemaOrg\Place $area
     *
     * @return static
     *
     * @see http://schema.org/area
     */
    public function area($area)
    {
        return $this->setProperty('area', $area);
    }

    /**
     * The organization owning or operating the broadcast service.
     *
     * @param \Spatie\SchemaOrg\Organization $broadcaster
     *
     * @return static
     *
     * @see http://schema.org/broadcaster
     */
    public function broadcaster($broadcaster)
    {
        return $this->setProperty('broadcaster', $broadcaster);
    }

    /**
     * A broadcast service to which the broadcast service may belong to such as
     * regional variations of a national channel.
     *
     * @param \Spatie\SchemaOrg\BroadcastService $parentService
     *
     * @return static
     *
     * @see http://schema.org/parentService
     */
    public function parentService($parentService)
    {
        return $this->setProperty('parentService', $parentService);
    }

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD,
     * etc.).
     *
     * @param string $videoFormat
     *
     * @return static
     *
     * @see http://schema.org/videoFormat
     */
    public function videoFormat($videoFormat)
    {
        return $this->setProperty('videoFormat', $videoFormat);
    }

    /**
     * The media network(s) whose content is broadcast on this station.
     *
     * @param \Spatie\SchemaOrg\Organization $broadcastAffiliateOf
     *
     * @return static
     *
     * @see http://schema.org/broadcastAffiliateOf
     */
    public function broadcastAffiliateOf($broadcastAffiliateOf)
    {
        return $this->setProperty('broadcastAffiliateOf', $broadcastAffiliateOf);
    }

    /**
     * The name displayed in the channel guide. For many US affiliates, it is
     * the network name.
     *
     * @param string $broadcastDisplayName
     *
     * @return static
     *
     * @see http://schema.org/broadcastDisplayName
     */
    public function broadcastDisplayName($broadcastDisplayName)
    {
        return $this->setProperty('broadcastDisplayName', $broadcastDisplayName);
    }

    /**
     * The timezone in [ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)
     * for which the service bases its broadcasts
     *
     * @param string $broadcastTimezone
     *
     * @return static
     *
     * @see http://schema.org/broadcastTimezone
     */
    public function broadcastTimezone($broadcastTimezone)
    {
        return $this->setProperty('broadcastTimezone', $broadcastTimezone);
    }

}
