<?php

namespace Spatie\SchemaOrg;

/**
 * An list item, e.g. a step in a checklist or how-to description.
 *
 * @see http://schema.org/ListItem
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class ListItem extends BaseType
{
    /**
     * An entity represented by an entry in a list or data feed (e.g. an
     * 'artist' in a list of 'artists')’.
     *
     * @param Thing|Thing[] $item
     *
     * @return static
     *
     * @see http://schema.org/item
     */
    public function item($item)
    {
        return $this->setProperty('item', $item);
    }

    /**
     * A link to the ListItem that follows the current one.
     *
     * @param ListItem|ListItem[] $nextItem
     *
     * @return static
     *
     * @see http://schema.org/nextItem
     */
    public function nextItem($nextItem)
    {
        return $this->setProperty('nextItem', $nextItem);
    }

    /**
     * The position of an item in a series or sequence of items.
     *
     * @param int|int[]|string|string[] $position
     *
     * @return static
     *
     * @see http://schema.org/position
     */
    public function position($position)
    {
        return $this->setProperty('position', $position);
    }

    /**
     * A link to the ListItem that preceeds the current one.
     *
     * @param ListItem|ListItem[] $previousItem
     *
     * @return static
     *
     * @see http://schema.org/previousItem
     */
    public function previousItem($previousItem)
    {
        return $this->setProperty('previousItem', $previousItem);
    }

}
