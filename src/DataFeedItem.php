<?php

namespace Spatie\SchemaOrg;

/**
 * A single item within a larger data feed.
 *
 * @see 
 */
class DataFeedItem extends Intangible
{
    /**
     * The date on which the CreativeWork was created or the item was added to a
     * DataFeed.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dateCreated
     *
     * @return static
     *
     * @see 
     */
    public function dateCreated($dateCreated)
    {
        return $this->setProperty('dateCreated', $dateCreated);
    }

    /**
     * The datetime the item was removed from the DataFeed.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dateDeleted
     *
     * @return static
     *
     * @see 
     */
    public function dateDeleted($dateDeleted)
    {
        return $this->setProperty('dateDeleted', $dateDeleted);
    }

    /**
     * The date on which the CreativeWork was most recently modified or when the
     * item's entry was modified within a DataFeed.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dateModified
     *
     * @return static
     *
     * @see 
     */
    public function dateModified($dateModified)
    {
        return $this->setProperty('dateModified', $dateModified);
    }

    /**
     * An entity represented by an entry in a list or data feed (e.g. an
     * 'artist' in a list of 'artists')’.
     *
     * @param Thing|Thing[] $item
     *
     * @return static
     *
     * @see 
     */
    public function item($item)
    {
        return $this->setProperty('item', $item);
    }

}
