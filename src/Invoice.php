<?php

namespace Spatie\SchemaOrg;

/**
 * A statement of the money due for goods or services; a bill.
 *
 * @see 
 */
class Invoice extends Intangible
{
    /**
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     *
     * @param string|string[]|Thing|Thing[] $category
     *
     * @return static
     *
     * @see 
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
     * @see 
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
     * @see 
     */
    public function customer($customer)
    {
        return $this->setProperty('customer', $customer);
    }

    /**
     * An identifier for the method of payment used (e.g. the last 4 digits of
     * the credit card).
     *
     * @param string|string[] $paymentMethodId
     *
     * @return static
     *
     * @see 
     */
    public function paymentMethodId($paymentMethodId)
    {
        return $this->setProperty('paymentMethodId', $paymentMethodId);
    }

    /**
     * The name of the credit card or other method of payment for the order.
     *
     * @param PaymentMethod|PaymentMethod[] $paymentMethod
     *
     * @return static
     *
     * @see 
     */
    public function paymentMethod($paymentMethod)
    {
        return $this->setProperty('paymentMethod', $paymentMethod);
    }

    /**
     * The date that payment is due.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $paymentDue
     *
     * @return static
     *
     * @see 
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
     * @see 
     */
    public function paymentDueDate($paymentDueDate)
    {
        return $this->setProperty('paymentDueDate', $paymentDueDate);
    }

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     *
     * @param Person|Person[]|Organization|Organization[] $provider
     *
     * @return static
     *
     * @see 
     */
    public function provider($provider)
    {
        return $this->setProperty('provider', $provider);
    }

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In
     * most cases a broker never acquires or releases ownership of a product or
     * service involved in an exchange.  If it is not clear whether an entity is
     * a broker, seller, or buyer, the latter two terms are preferred.
     *
     * @param Person|Person[]|Organization|Organization[] $broker
     *
     * @return static
     *
     * @see 
     */
    public function broker($broker)
    {
        return $this->setProperty('broker', $broker);
    }

    /**
     * The total amount due.
     *
     * @param PriceSpecification|PriceSpecification[]|MonetaryAmount|MonetaryAmount[] $totalPaymentDue
     *
     * @return static
     *
     * @see 
     */
    public function totalPaymentDue($totalPaymentDue)
    {
        return $this->setProperty('totalPaymentDue', $totalPaymentDue);
    }

    /**
     * The minimum payment required at this time.
     *
     * @param PriceSpecification|PriceSpecification[]|MonetaryAmount|MonetaryAmount[] $minimumPaymentDue
     *
     * @return static
     *
     * @see 
     */
    public function minimumPaymentDue($minimumPaymentDue)
    {
        return $this->setProperty('minimumPaymentDue', $minimumPaymentDue);
    }

    /**
     * The time interval used to compute the invoice.
     *
     * @param Duration|Duration[] $billingPeriod
     *
     * @return static
     *
     * @see 
     */
    public function billingPeriod($billingPeriod)
    {
        return $this->setProperty('billingPeriod', $billingPeriod);
    }

    /**
     * The status of payment; whether the invoice has been paid or not.
     *
     * @param PaymentStatusType|PaymentStatusType[]|string|string[] $paymentStatus
     *
     * @return static
     *
     * @see 
     */
    public function paymentStatus($paymentStatus)
    {
        return $this->setProperty('paymentStatus', $paymentStatus);
    }

    /**
     * The date the invoice is scheduled to be paid.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $scheduledPaymentDate
     *
     * @return static
     *
     * @see 
     */
    public function scheduledPaymentDate($scheduledPaymentDate)
    {
        return $this->setProperty('scheduledPaymentDate', $scheduledPaymentDate);
    }

    /**
     * The Order(s) related to this Invoice. One or more Orders may be combined
     * into a single Invoice.
     *
     * @param Order|Order[] $referencesOrder
     *
     * @return static
     *
     * @see 
     */
    public function referencesOrder($referencesOrder)
    {
        return $this->setProperty('referencesOrder', $referencesOrder);
    }

    /**
     * The identifier for the account the payment will be applied to.
     *
     * @param string|string[] $accountId
     *
     * @return static
     *
     * @see 
     */
    public function accountId($accountId)
    {
        return $this->setProperty('accountId', $accountId);
    }

}
