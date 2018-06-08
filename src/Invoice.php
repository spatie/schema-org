<?php

namespace Spatie\SchemaOrg;

/**
 * A statement of the money due for goods or services; a bill.
 *
 * @see http://schema.org/Invoice
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class Invoice extends BaseType
{
    /**
     * The identifier for the account the payment will be applied to.
     *
     * @param string|string[] $accountId
     *
     * @return static
     *
     * @see http://schema.org/accountId
     */
    public function accountId($accountId)
    {
        return $this->setProperty('accountId', $accountId);
    }

    /**
     * The time interval used to compute the invoice.
     *
     * @param Duration|Duration[] $billingPeriod
     *
     * @return static
     *
     * @see http://schema.org/billingPeriod
     */
    public function billingPeriod($billingPeriod)
    {
        return $this->setProperty('billingPeriod', $billingPeriod);
    }

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In
     * most cases a broker never acquires or releases ownership of a product or
     * service involved in an exchange.  If it is not clear whether an entity is
     * a broker, seller, or buyer, the latter two terms are preferred.
     *
     * @param Organization|Organization[]|Person|Person[] $broker
     *
     * @return static
     *
     * @see http://schema.org/broker
     */
    public function broker($broker)
    {
        return $this->setProperty('broker', $broker);
    }

    /**
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     *
     * @param Thing|Thing[]|string|string[] $category
     *
     * @return static
     *
     * @see http://schema.org/category
     */
    public function category($category)
    {
        return $this->setProperty('category', $category);
    }

    /**
     * A number that confirms the given order or payment has been received.
     *
     * @param string|string[] $confirmationNumber
     *
     * @return static
     *
     * @see http://schema.org/confirmationNumber
     */
    public function confirmationNumber($confirmationNumber)
    {
        return $this->setProperty('confirmationNumber', $confirmationNumber);
    }

    /**
     * Party placing the order or paying the invoice.
     *
     * @param Organization|Organization[]|Person|Person[] $customer
     *
     * @return static
     *
     * @see http://schema.org/customer
     */
    public function customer($customer)
    {
        return $this->setProperty('customer', $customer);
    }

    /**
     * The minimum payment required at this time.
     *
     * @param MonetaryAmount|MonetaryAmount[]|PriceSpecification|PriceSpecification[] $minimumPaymentDue
     *
     * @return static
     *
     * @see http://schema.org/minimumPaymentDue
     */
    public function minimumPaymentDue($minimumPaymentDue)
    {
        return $this->setProperty('minimumPaymentDue', $minimumPaymentDue);
    }

    /**
     * The date that payment is due.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $paymentDue
     *
     * @return static
     *
     * @see http://schema.org/paymentDue
     */
    public function paymentDue($paymentDue)
    {
        return $this->setProperty('paymentDue', $paymentDue);
    }

    /**
     * The date that payment is due.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $paymentDueDate
     *
     * @return static
     *
     * @see http://schema.org/paymentDueDate
     */
    public function paymentDueDate($paymentDueDate)
    {
        return $this->setProperty('paymentDueDate', $paymentDueDate);
    }

    /**
     * The name of the credit card or other method of payment for the order.
     *
     * @param PaymentMethod|PaymentMethod[] $paymentMethod
     *
     * @return static
     *
     * @see http://schema.org/paymentMethod
     */
    public function paymentMethod($paymentMethod)
    {
        return $this->setProperty('paymentMethod', $paymentMethod);
    }

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of
     * the credit card).
     *
     * @param string|string[] $paymentMethodId
     *
     * @return static
     *
     * @see http://schema.org/paymentMethodId
     */
    public function paymentMethodId($paymentMethodId)
    {
        return $this->setProperty('paymentMethodId', $paymentMethodId);
    }

    /**
     * The status of payment; whether the invoice has been paid or not.
     *
     * @param PaymentStatusType|PaymentStatusType[]|string|string[] $paymentStatus
     *
     * @return static
     *
     * @see http://schema.org/paymentStatus
     */
    public function paymentStatus($paymentStatus)
    {
        return $this->setProperty('paymentStatus', $paymentStatus);
    }

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     *
     * @param Organization|Organization[]|Person|Person[] $provider
     *
     * @return static
     *
     * @see http://schema.org/provider
     */
    public function provider($provider)
    {
        return $this->setProperty('provider', $provider);
    }

    /**
     * The Order(s) related to this Invoice. One or more Orders may be combined
     * into a single Invoice.
     *
     * @param Order|Order[] $referencesOrder
     *
     * @return static
     *
     * @see http://schema.org/referencesOrder
     */
    public function referencesOrder($referencesOrder)
    {
        return $this->setProperty('referencesOrder', $referencesOrder);
    }

    /**
     * The date the invoice is scheduled to be paid.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $scheduledPaymentDate
     *
     * @return static
     *
     * @see http://schema.org/scheduledPaymentDate
     */
    public function scheduledPaymentDate($scheduledPaymentDate)
    {
        return $this->setProperty('scheduledPaymentDate', $scheduledPaymentDate);
    }

    /**
     * The total amount due.
     *
     * @param MonetaryAmount|MonetaryAmount[]|PriceSpecification|PriceSpecification[] $totalPaymentDue
     *
     * @return static
     *
     * @see http://schema.org/totalPaymentDue
     */
    public function totalPaymentDue($totalPaymentDue)
    {
        return $this->setProperty('totalPaymentDue', $totalPaymentDue);
    }

}
