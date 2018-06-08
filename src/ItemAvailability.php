<?php

namespace Spatie\SchemaOrg;

/**
 * A list of possible product availability options.
 *
 * @see http://schema.org/ItemAvailability
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class ItemAvailability extends BaseType
{
    /**
     * Indicates that the item has been discontinued.
     *
     * @see http://schema.org/Discontinued
     */
     const Discontinued = 'http://schema.org/Discontinued';

    /**
     * Indicates that the item is in stock.
     *
     * @see http://schema.org/InStock
     */
     const InStock = 'http://schema.org/InStock';

    /**
     * Indicates that the item is available only at physical locations.
     *
     * @see http://schema.org/InStoreOnly
     */
     const InStoreOnly = 'http://schema.org/InStoreOnly';

    /**
     * Indicates that the item has limited availability.
     *
     * @see http://schema.org/LimitedAvailability
     */
     const LimitedAvailability = 'http://schema.org/LimitedAvailability';

    /**
     * Indicates that the item is available only online.
     *
     * @see http://schema.org/OnlineOnly
     */
     const OnlineOnly = 'http://schema.org/OnlineOnly';

    /**
     * Indicates that the item is out of stock.
     *
     * @see http://schema.org/OutOfStock
     */
     const OutOfStock = 'http://schema.org/OutOfStock';

    /**
     * Indicates that the item is available for pre-order, but will be delivered
     * when generally available.
     *
     * @see http://schema.org/PreOrder
     */
     const PreOrder = 'http://schema.org/PreOrder';

    /**
     * Indicates that the item is available for ordering and delivery before
     * general availability.
     *
     * @see http://schema.org/PreSale
     */
     const PreSale = 'http://schema.org/PreSale';

    /**
     * Indicates that the item has sold out.
     *
     * @see http://schema.org/SoldOut
     */
     const SoldOut = 'http://schema.org/SoldOut';

}
