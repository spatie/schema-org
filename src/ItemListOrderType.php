<?php

namespace Spatie\SchemaOrg;

/**
 * Enumerated for values for itemListOrder for indicating how an ordered
 * ItemList is organized.
 *
 * @see http://schema.org/ItemListOrderType
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class ItemListOrderType extends BaseType
{
    /**
     * An ItemList ordered with lower values listed first.
     *
     * @see http://schema.org/ItemListOrderAscending
     */
     const ItemListOrderAscending = 'http://schema.org/ItemListOrderAscending';

    /**
     * An ItemList ordered with higher values listed first.
     *
     * @see http://schema.org/ItemListOrderDescending
     */
     const ItemListOrderDescending = 'http://schema.org/ItemListOrderDescending';

    /**
     * An ItemList ordered with no explicit order.
     *
     * @see http://schema.org/ItemListUnordered
     */
     const ItemListUnordered = 'http://schema.org/ItemListUnordered';

}
