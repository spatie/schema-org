<?php

namespace Spatie\SchemaOrg;

/**
 * An list item, e.g. a step in a checklist or how-to description.
 *
 * @see 
 */
class ListItem extends Intangible
{
    /**
     * The position of an item in a series or sequence of items.
     *
     * @param string|string[]|int|int[] $position
     *
     * @return static
     *
     * @see 
     */
    public function position($position)
    {
        return $this->setProperty('position', $position);
    }

    /**
     * A link to the ListItem that follows the current one.
     *
     * @param ListItem|ListItem[] $nextItem
     *
     * @return static
     *
     * @see 
     */
    public function nextItem($nextItem)
    {
        return $this->setProperty('nextItem', $nextItem);
    }

    /**
     * A link to the ListItem that preceeds the current one.
     *
     * @param ListItem|ListItem[] $previousItem
     *
     * @return static
     *
     * @see 
     */
    public function previousItem($previousItem)
    {
        return $this->setProperty('previousItem', $previousItem);
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
