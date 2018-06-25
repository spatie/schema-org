<?php

namespace Spatie\SchemaOrg;

/**
 * A list of possible conditions for the item.
 *
 * @see http://schema.org/OfferItemCondition
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class OfferItemCondition extends BaseType
{
    /**
     * Indicates that the item is damaged.
     *
     * @see http://schema.org/DamagedCondition
     */
     const DamagedCondition = 'http://schema.org/DamagedCondition';

    /**
     * Indicates that the item is new.
     *
     * @see http://schema.org/NewCondition
     */
     const NewCondition = 'http://schema.org/NewCondition';

    /**
     * Indicates that the item is refurbished.
     *
     * @see http://schema.org/RefurbishedCondition
     */
     const RefurbishedCondition = 'http://schema.org/RefurbishedCondition';

    /**
     * Indicates that the item is used.
     *
     * @see http://schema.org/UsedCondition
     */
     const UsedCondition = 'http://schema.org/UsedCondition';

}
