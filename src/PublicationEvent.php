<?php

namespace Spatie\SchemaOrg;

/**
 * A PublicationEvent corresponds indifferently to the event of publication for
 * a CreativeWork of any type e.g. a broadcast event, an on-demand event, a
 * book/journal publication via a variety of delivery media.
 *
 * @see http://schema.org/PublicationEvent
 */
class PublicationEvent extends Event
{
    /**
     * A flag to signal that the publication or event is accessible for free.
     *
     * @param bool $free
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
     * A flag to signal that the publication is accessible for free.
     *
     * @param bool $isAccessibleForFree
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
     * @param \Spatie\SchemaOrg\BroadcastService $publishedOn
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
