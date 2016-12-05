<?php

namespace Spatie\SchemaOrg;

/**
 * A placeholder for multiple similar products of the same kind.
 *
 * @see http://schema.org/SomeProducts
 */
class SomeProducts extends Product
{
    /**
     * The current approximate inventory level for the item or items.
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue $inventoryLevel
     *
     * @return static
     *
     * @see http://schema.org/inventoryLevel
     */
    public function inventoryLevel($inventoryLevel)
    {
        return $this->setProperty('inventoryLevel', $inventoryLevel);
    }

}
