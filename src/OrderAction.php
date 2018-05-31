<?php

namespace Spatie\SchemaOrg;

/**
 * An agent orders an object/product/service to be delivered/sent.
 *
 * @see http://schema.org/OrderAction
 *
 * @mixin TradeAction
 */
class OrderAction
{
    /**
     * A sub property of instrument. The method of delivery.
     *
     * @param DeliveryMethod|DeliveryMethod[] $deliveryMethod
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
