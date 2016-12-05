<?php

namespace Spatie\SchemaOrg;

/**
 * A compound price specification is one that bundles multiple prices that all
 * apply in combination for different dimensions of consumption. Use the name
 * property of the attached unit price specification for indicating the
 * dimension of a price component (e.g. "electricity" or "final cleaning").
 *
 * @see http://schema.org/CompoundPriceSpecification
 */
class CompoundPriceSpecification extends PriceSpecification
{
    /**
     * This property links to all [[UnitPriceSpecification]] nodes that apply in
     * parallel for the [[CompoundPriceSpecification]] node.
     *
     * @param \Spatie\SchemaOrg\UnitPriceSpecification $priceComponent
     *
     * @return static
     *
     * @see http://schema.org/priceComponent
     */
    public function priceComponent($priceComponent)
    {
        return $this->setProperty('priceComponent', $priceComponent);
    }

}
