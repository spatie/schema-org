<?php

namespace Spatie\SchemaOrg;

/**
 * A payment method using a credit, debit, store or other card to associate the
 * payment with an account.
 *
 * @see http://schema.org/PaymentCard
 *
 * @mixin \Spatie\SchemaOrg\FinancialProduct
 * @mixin \Spatie\SchemaOrg\PaymentMethod
 */
class PaymentCard extends BaseType
{
}
