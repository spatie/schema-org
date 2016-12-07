<?php

namespace Spatie\SchemaOrg;

/**
 * The act of giving money to a seller in exchange for goods or services
 * rendered. An agent buys an object, product, or service from a seller for a
 * price. Reciprocal of SellAction.
 *
 * @see http://schema.org/BuyAction
 */
class BuyAction extends TradeAction
{
    /**
     * An entity which offers (sells / leases / lends / loans) the services /
     * goods.  A seller may also be a provider.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $seller
     *
     * @return static
     *
     * @see http://schema.org/seller
     */
    public function seller($seller)
    {
        return $this->setProperty('seller', $seller);
    }

    /**
     * 'vendor' is an earlier term for 'seller'.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $vendor
     *
     * @return static
     *
     * @see http://schema.org/vendor
     */
    public function vendor($vendor)
    {
        return $this->setProperty('vendor', $vendor);
    }

    /**
     * The warranty promise(s) included in the offer.
     *
     * @param \Spatie\SchemaOrg\WarrantyPromise $warrantyPromise
     *
     * @return static
     *
     * @see http://schema.org/warrantyPromise
     */
    public function warrantyPromise($warrantyPromise)
    {
        return $this->setProperty('warrantyPromise', $warrantyPromise);
    }

}
