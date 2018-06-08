<?php

namespace Spatie\SchemaOrg;

/**
 * A single, identifiable product instance (e.g. a laptop with a particular
 * serial number).
 *
 * @see http://schema.org/IndividualProduct
 *
 * @mixin \Spatie\SchemaOrg\Product
 */
class IndividualProduct extends BaseType
{
    /**
     * The serial number or any alphanumeric identifier of a particular product.
     * When attached to an offer, it is a shortcut for the serial number of the
     * product included in the offer.
     *
     * @param string|string[] $serialNumber
     *
     * @return static
     *
     * @see http://schema.org/serialNumber
     */
    public function serialNumber($serialNumber)
    {
        return $this->setProperty('serialNumber', $serialNumber);
    }

}
