<?php

namespace Spatie\SchemaOrg;

/**
 * A PublicationEvent corresponds indifferently to the event of publication for
 * a CreativeWork of any type e.g. a broadcast event, an on-demand event, a
 * book/journal publication via a variety of delivery media.
 *
 * @see 
 */
class PublicationEvent extends Event
{
    /**
     * A flag to signal that the publication is accessible for free.
     *
     * @param bool|bool[] $isAccessibleForFree
     *
     * @return static
     *
     * @see 
     */
    public function isAccessibleForFree($isAccessibleForFree)
    {
        return $this->setProperty('isAccessibleForFree', $isAccessibleForFree);
    }

    /**
     * A flag to signal that the publication or event is accessible for free.
     *
     * @param bool|bool[] $free
     *
     * @return static
     *
     * @see 
     */
    public function free($free)
    {
        return $this->setProperty('free', $free);
    }

    /**
     * A broadcast service associated with the publication event.
     *
     * @param BroadcastService|BroadcastService[] $publishedOn
     *
     * @return static
     *
     * @see 
     */
    public function publishedOn($publishedOn)
    {
        return $this->setProperty('publishedOn', $publishedOn);
    }

}
