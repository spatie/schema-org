<?php

namespace Spatie\SchemaOrg;

/**
 * An agent orders an object/product/service to be delivered/sent.
 *
 * @see http://schema.org/OrderAction
 */
class OrderAction extends TradeAction
{
    /**
     * A sub property of instrument. The method of delivery.
     *
     * @param \Spatie\SchemaOrg\DeliveryMethod $deliveryMethod
     *
     * @return static
     *
     * @see http://schema.org/deliveryMethod
     */
    public function deliveryMethod($deliveryMethod)
    {
        return $this->setProperty('deliveryMethod', $deliveryMethod);
    }

}
