<?php

namespace Spatie\SchemaOrg;

/**
 * An over the air or online broadcast event.
 *
 * @see http://schema.org/BroadcastEvent
 *
 * @mixin \Spatie\SchemaOrg\PublicationEvent
 */
class BroadcastEvent extends BaseType
{
    /**
     * The event being broadcast such as a sporting event or awards ceremony.
     *
     * @param Event|Event[] $broadcastOfEvent
     *
     * @return static
     *
     * @see http://schema.org/broadcastOfEvent
     */
    public function broadcastOfEvent($broadcastOfEvent)
    {
        return $this->setProperty('broadcastOfEvent', $broadcastOfEvent);
    }

    /**
     * True is the broadcast is of a live event.
     *
     * @param bool|bool[] $isLiveBroadcast
     *
     * @return static
     *
     * @see http://schema.org/isLiveBroadcast
     */
    public function isLiveBroadcast($isLiveBroadcast)
    {
        return $this->setProperty('isLiveBroadcast', $isLiveBroadcast);
    }

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD,
     * etc.).
     *
     * @param string|string[] $videoFormat
     *
     * @return static
     *
     * @see http://schema.org/videoFormat
     */
    public function videoFormat($videoFormat)
    {
        return $this->setProperty('videoFormat', $videoFormat);
    }

}
