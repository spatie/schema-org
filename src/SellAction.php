<?php

namespace Spatie\SchemaOrg;

/**
 * The act of taking money from a buyer in exchange for goods or services
 * rendered. An agent sells an object, product, or service to a buyer for a
 * price. Reciprocal of BuyAction.
 *
 * @see http://schema.org/SellAction
 */
class SellAction extends TradeAction
{
    /**
     * A sub property of participant. The participant/person/organization that
     * bought the object.
     *
     * @param \Spatie\SchemaOrg\Person $buyer
     *
     * @return static
     *
     * @see http://schema.org/buyer
     */
    public function buyer($buyer)
    {
        return $this->setProperty('buyer', $buyer);
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
