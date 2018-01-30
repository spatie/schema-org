<?php

namespace Spatie\SchemaOrg;

/**
 * The costs of settling the payment using a particular payment method.
 *
 * @see 
 */
class PaymentChargeSpecification extends PriceSpecification
{
    /**
     * The payment method(s) to which the payment charge specification applies.
     *
     * @param PaymentMethod|PaymentMethod[] $appliesToPaymentMethod
     *
     * @return static
     *
     * @see 
     */
    public function appliesToPaymentMethod($appliesToPaymentMethod)
    {
        return $this->setProperty('appliesToPaymentMethod', $appliesToPaymentMethod);
    }

    /**
     * The delivery method(s) to which the delivery charge or payment charge
     * specification applies.
     *
     * @param DeliveryMethod|DeliveryMethod[] $appliesToDeliveryMethod
     *
     * @return static
     *
     * @see 
     */
    public function appliesToDeliveryMethod($appliesToDeliveryMethod)
    {
        return $this->setProperty('appliesToDeliveryMethod', $appliesToDeliveryMethod);
    }

}
