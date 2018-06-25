<?php

namespace Spatie\SchemaOrg;

/**
 * A supply consumed when performing the instructions for how to achieve a
 * result.
 *
 * @see http://schema.org/HowToSupply
 *
 * @mixin \Spatie\SchemaOrg\HowToItem
 */
class HowToSupply extends BaseType
{
    /**
     * The estimated cost of the supply or supplies consumed when performing
     * instructions.
     *
     * @param MonetaryAmount|MonetaryAmount[]|string|string[] $estimatedCost
     *
     * @return static
     *
     * @see http://schema.org/estimatedCost
     */
    public function estimatedCost($estimatedCost)
    {
        return $this->setProperty('estimatedCost', $estimatedCost);
    }

}
