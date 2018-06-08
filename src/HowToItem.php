<?php

namespace Spatie\SchemaOrg;

/**
 * An item used as either a tool or supply when performing the instructions for
 * how to to achieve a result.
 *
 * @see http://schema.org/HowToItem
 */
class HowToItem extends ListItem
{
    /**
     * The required quantity of the item(s).
     *
     * @param QuantitativeValue|QuantitativeValue[]|float|float[]|int|int[]|string|string[] $requiredQuantity
     *
     * @return static
     *
     * @see http://schema.org/requiredQuantity
     */
    public function requiredQuantity($requiredQuantity)
    {
        return $this->setProperty('requiredQuantity', $requiredQuantity);
    }

}
