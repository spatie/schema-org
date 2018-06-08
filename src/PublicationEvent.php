<?php

namespace Spatie\SchemaOrg;

/**
 * A PublicationEvent corresponds indifferently to the event of publication for
 * a CreativeWork of any type e.g. a broadcast event, an on-demand event, a
 * book/journal publication via a variety of delivery media.
 *
 * @see http://schema.org/PublicationEvent
 *
 * @mixin \Spatie\SchemaOrg\Event
 */
class PublicationEvent extends BaseType
{
    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     * @param bool|bool[] $free
     *
     * @return static
     *
     * @see http://schema.org/free
     */
    public function free($free)
    {
        return $this->setProperty('free', $free);
    }

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     *
     * @param bool|bool[] $isAccessibleForFree
     *
     * @return static
     *
     * @see http://schema.org/isAccessibleForFree
     */
    public function isAccessibleForFree($isAccessibleForFree)
    {
        return $this->setProperty('isAccessibleForFree', $isAccessibleForFree);
    }

    /**
     * A broadcast service associated with the publication event.
     *
     * @param BroadcastService|BroadcastService[] $publishedOn
     *
     * @return static
     *
     * @see http://schema.org/publishedOn
     */
    public function publishedOn($publishedOn)
    {
        return $this->setProperty('publishedOn', $publishedOn);
    }

}
