<?php

namespace Spatie\SchemaOrg;

/**
 * A structured value representing the duration and scope of services that will
 * be provided to a customer free of charge in case of a defect or malfunction
 * of a product.
 *
 * @see http://schema.org/WarrantyPromise
 *
 * @mixin \Spatie\SchemaOrg\StructuredValue
 */
class WarrantyPromise extends BaseType
{
    /**
     * The duration of the warranty promise. Common unitCode values are ANN for
     * year, MON for months, or DAY for days.
     *
     * @param QuantitativeValue|QuantitativeValue[] $durationOfWarranty
     *
     * @return static
     *
     * @see http://schema.org/durationOfWarranty
     */
    public function durationOfWarranty($durationOfWarranty)
    {
        return $this->setProperty('durationOfWarranty', $durationOfWarranty);
    }

    /**
     * The scope of the warranty promise.
     *
     * @param WarrantyScope|WarrantyScope[] $warrantyScope
     *
     * @return static
     *
     * @see http://schema.org/warrantyScope
     */
    public function warrantyScope($warrantyScope)
    {
        return $this->setProperty('warrantyScope', $warrantyScope);
    }

}
