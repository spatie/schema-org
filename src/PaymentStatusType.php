<?php

namespace Spatie\SchemaOrg;

/**
 * A specific payment status. For example, PaymentDue, PaymentComplete, etc.
 *
 * @see http://schema.org/PaymentStatusType
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class PaymentStatusType extends BaseType
{
    /**
     * An automatic payment system is in place and will be used.
     *
     * @see http://schema.org/PaymentAutomaticallyApplied
     */
     const PaymentAutomaticallyApplied = 'http://schema.org/PaymentAutomaticallyApplied';

    /**
     * The payment has been received and processed.
     *
     * @see http://schema.org/PaymentComplete
     */
     const PaymentComplete = 'http://schema.org/PaymentComplete';

    /**
     * The payee received the payment, but it was declined for some reason.
     *
     * @see http://schema.org/PaymentDeclined
     */
     const PaymentDeclined = 'http://schema.org/PaymentDeclined';

    /**
     * The payment is due, but still within an acceptable time to be received.
     *
     * @see http://schema.org/PaymentDue
     */
     const PaymentDue = 'http://schema.org/PaymentDue';

    /**
     * The payment is due and considered late.
     *
     * @see http://schema.org/PaymentPastDue
     */
     const PaymentPastDue = 'http://schema.org/PaymentPastDue';

}
