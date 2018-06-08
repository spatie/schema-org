<?php

namespace Spatie\SchemaOrg;

/**
 * A supply consumed when performing the instructions for how to achieve a
 * result.
 *
 * @see http://schema.org/HowToSupply
 */
class HowToSupply extends HowToItem
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
