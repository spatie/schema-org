<?php

namespace Spatie\SchemaOrg;

/**
 * An over the air or online broadcast event.
 *
 * @see http://schema.org/BroadcastEvent
 */
class BroadcastEvent extends PublicationEvent
{
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
     * The event being broadcast such as a sporting event or awards ceremony.
     *
     * @param \Spatie\SchemaOrg\Event $broadcastOfEvent
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
     * @param bool $isLiveBroadcast
     *
     * @return static
     *
     * @see http://schema.org/isLiveBroadcast
     */
    public function isLiveBroadcast($isLiveBroadcast)
    {
        return $this->setProperty('isLiveBroadcast', $isLiveBroadcast);
    }

}
