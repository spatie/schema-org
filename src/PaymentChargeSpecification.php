<?php

namespace Spatie\SchemaOrg;

/**
 * The costs of settling the payment using a particular payment method.
 *
 * @see http://schema.org/PaymentChargeSpecification
 */
class PaymentChargeSpecification extends PriceSpecification
{
    /**
     * The delivery method(s) to which the delivery charge or payment charge
     * specification applies.
     *
     * @param \Spatie\SchemaOrg\DeliveryMethod $appliesToDeliveryMethod
     *
     * @return static
     *
     * @see http://schema.org/appliesToDeliveryMethod
     */
    public function appliesToDeliveryMethod($appliesToDeliveryMethod)
    {
        return $this->setProperty('appliesToDeliveryMethod', $appliesToDeliveryMethod);
    }

    /**
     * The payment method(s) to which the payment charge specification applies.
     *
     * @param \Spatie\SchemaOrg\PaymentMethod $appliesToPaymentMethod
     *
     * @return static
     *
     * @see http://schema.org/appliesToPaymentMethod
     */
    public function appliesToPaymentMethod($appliesToPaymentMethod)
    {
        return $this->setProperty('appliesToPaymentMethod', $appliesToPaymentMethod);
    }

}
