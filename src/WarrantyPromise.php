<?php

namespace Spatie\SchemaOrg;

/**
 * A structured value representing the duration and scope of services that will
 * be provided to a customer free of charge in case of a defect or malfunction
 * of a product.
 *
 * @see 
 */
class WarrantyPromise extends StructuredValue
{
    /**
     * The duration of the warranty promise. Common unitCode values are ANN for
     * year, MON for months, or DAY for days.
     *
     * @param QuantitativeValue|QuantitativeValue[] $durationOfWarranty
     *
     * @return static
     *
     * @see 
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
     * @see 
     */
    public function warrantyScope($warrantyScope)
    {
        return $this->setProperty('warrantyScope', $warrantyScope);
    }

}
