<?php

namespace Spatie\SchemaOrg;

/**
 * A list of items of any sort&#x2014;for example, Top 10 Movies About
 * Weathermen, or Top 100 Party Songs. Not to be confused with HTML lists, which
 * are often used only for formatting.
 *
 * @see http://schema.org/ItemList
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class ItemList extends BaseType
{
    /**
     * For itemListElement values, you can use simple strings (e.g. "Peter",
     * "Paul", "Mary"), existing entities, or use ListItem.
     * 
     * Text values are best if the elements in the list are plain strings.
     * Existing entities are best for a simple, unordered list of existing
     * things in your data. ListItem is used with ordered lists when you want to
     * provide additional context about the element in that list or when the
     * same item might be in different places in different lists.
     * 
     * Note: The order of elements in your mark-up is not sufficient for
     * indicating the order or elements.  Use ListItem with a 'position'
     * property in such cases.
     *
     * @param ListItem|ListItem[]|Thing|Thing[]|string|string[] $itemListElement
     *
     * @return static
     *
     * @see http://schema.org/itemListElement
     */
    public function itemListElement($itemListElement)
    {
        return $this->setProperty('itemListElement', $itemListElement);
    }

    /**
     * Type of ordering (e.g. Ascending, Descending, Unordered).
     *
     * @param ItemListOrderType|ItemListOrderType[]|string|string[] $itemListOrder
     *
     * @return static
     *
     * @see http://schema.org/itemListOrder
     */
    public function itemListOrder($itemListOrder)
    {
        return $this->setProperty('itemListOrder', $itemListOrder);
    }

    /**
     * The number of items in an ItemList. Note that some descriptions might not
     * fully describe all items in a list (e.g., multi-page pagination); in such
     * cases, the numberOfItems would be for the entire list.
     *
     * @param int|int[] $numberOfItems
     *
     * @return static
     *
     * @see http://schema.org/numberOfItems
     */
    public function numberOfItems($numberOfItems)
    {
        return $this->setProperty('numberOfItems', $numberOfItems);
    }

}
