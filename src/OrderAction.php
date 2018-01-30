<?php

namespace Spatie\SchemaOrg;

/**
 * An agent orders an object/product/service to be delivered/sent.
 *
 * @see 
 */
class OrderAction extends TradeAction
{
    /**
     * A sub property of instrument. The method of delivery.
     *
     * @param DeliveryMethod|DeliveryMethod[] $deliveryMethod
     *
     * @return static
     *
     * @see 
     */
    public function deliveryMethod($deliveryMethod)
    {
        return $this->setProperty('deliveryMethod', $deliveryMethod);
    }

}
