<?php

namespace Spatie\SchemaOrg;

/**
 * A placeholder for multiple similar products of the same kind.
 *
 * @see 
 */
class SomeProducts extends Product
{
    /**
     * The current approximate inventory level for the item or items.
     *
     * @param QuantitativeValue|QuantitativeValue[] $inventoryLevel
     *
     * @return static
     *
     * @see 
     */
    public function inventoryLevel($inventoryLevel)
    {
        return $this->setProperty('inventoryLevel', $inventoryLevel);
    }

}
