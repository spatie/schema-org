<?php

namespace Spatie\SchemaOrg;

/**
 * An order is a confirmation of a transaction (a receipt), which can contain
 * multiple line items, each represented by an Offer that has been accepted by
 * the customer.
 *
 * @see http://schema.org/Order
 */
class Order extends Intangible
{
    /**
     * The delivery of the parcel related to this order or order item.
     *
     * @param \Spatie\SchemaOrg\ParcelDelivery $orderDelivery
     *
     * @return static
     *
     * @see http://schema.org/orderDelivery
     */
    public function orderDelivery($orderDelivery)
    {
        return $this->setProperty('orderDelivery', $orderDelivery);
    }

    /**
     * The offer(s) -- e.g., product, quantity and price combinations --
     * included in the order.
     *
     * @param \Spatie\SchemaOrg\Offer $acceptedOffer
     *
     * @return static
     *
     * @see http://schema.org/acceptedOffer
     */
    public function acceptedOffer($acceptedOffer)
    {
        return $this->setProperty('acceptedOffer', $acceptedOffer);
    }

    /**
     * The billing address for the order.
     *
     * @param \Spatie\SchemaOrg\PostalAddress $billingAddress
     *
     * @return static
     *
     * @see http://schema.org/billingAddress
     */
    public function billingAddress($billingAddress)
    {
        return $this->setProperty('billingAddress', $billingAddress);
    }

    /**
     * A number that confirms the given order or payment has been received.
     *
     * @param string $confirmationNumber
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
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $customer
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
     * Any discount applied (to an Order).
     *
     * @param float|int|string $discount
     *
     * @return static
     *
     * @see http://schema.org/discount
     */
    public function discount($discount)
    {
        return $this->setProperty('discount', $discount);
    }

    /**
     * Code used to redeem a discount.
     *
     * @param string $discountCode
     *
     * @return static
     *
     * @see http://schema.org/discountCode
     */
    public function discountCode($discountCode)
    {
        return $this->setProperty('discountCode', $discountCode);
    }

    /**
     * The currency (in 3-letter ISO 4217 format) of the discount.
     *
     * @param string $discountCurrency
     *
     * @return static
     *
     * @see http://schema.org/discountCurrency
     */
    public function discountCurrency($discountCurrency)
    {
        return $this->setProperty('discountCurrency', $discountCurrency);
    }

    /**
     * Was the offer accepted as a gift for someone other than the buyer.
     *
     * @param bool $isGift
     *
     * @return static
     *
     * @see http://schema.org/isGift
     */
    public function isGift($isGift)
    {
        return $this->setProperty('isGift', $isGift);
    }

    /**
     * 'merchant' is an out-dated term for 'seller'.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $merchant
     *
     * @return static
     *
     * @see http://schema.org/merchant
     */
    public function merchant($merchant)
    {
        return $this->setProperty('merchant', $merchant);
    }

    /**
     * Date order was placed.
     *
     * @param \DateTimeInterface $orderDate
     *
     * @return static
     *
     * @see http://schema.org/orderDate
     */
    public function orderDate($orderDate)
    {
        return $this->setProperty('orderDate', $orderDate);
    }

    /**
     * The item ordered.
     *
     * @param \Spatie\SchemaOrg\Product|\Spatie\SchemaOrg\OrderItem $orderedItem
     *
     * @return static
     *
     * @see http://schema.org/orderedItem
     */
    public function orderedItem($orderedItem)
    {
        return $this->setProperty('orderedItem', $orderedItem);
    }

    /**
     * The identifier of the transaction.
     *
     * @param string $orderNumber
     *
     * @return static
     *
     * @see http://schema.org/orderNumber
     */
    public function orderNumber($orderNumber)
    {
        return $this->setProperty('orderNumber', $orderNumber);
    }

    /**
     * The current status of the order.
     *
     * @param \Spatie\SchemaOrg\OrderStatus $orderStatus
     *
     * @return static
     *
     * @see http://schema.org/orderStatus
     */
    public function orderStatus($orderStatus)
    {
        return $this->setProperty('orderStatus', $orderStatus);
    }

    /**
     * The order is being paid as part of the referenced Invoice.
     *
     * @param \Spatie\SchemaOrg\Invoice $partOfInvoice
     *
     * @return static
     *
     * @see http://schema.org/partOfInvoice
     */
    public function partOfInvoice($partOfInvoice)
    {
        return $this->setProperty('partOfInvoice', $partOfInvoice);
    }

    /**
     * The date that payment is due.
     *
     * @param \DateTimeInterface $paymentDue
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
     * The name of the credit card or other method of payment for the order.
     *
     * @param \Spatie\SchemaOrg\PaymentMethod $paymentMethod
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
     * @param string $paymentMethodId
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
     * The URL for sending a payment.
     *
     * @param string $paymentUrl
     *
     * @return static
     *
     * @see http://schema.org/paymentUrl
     */
    public function paymentUrl($paymentUrl)
    {
        return $this->setProperty('paymentUrl', $paymentUrl);
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services /
     * goods.  A seller may also be a provider.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $seller
     *
     * @return static
     *
     * @see http://schema.org/seller
     */
    public function seller($seller)
    {
        return $this->setProperty('seller', $seller);
    }

    /**
     * The date that payment is due.
     *
     * @param \DateTimeInterface $paymentDueDate
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
     * An entity that arranges for an exchange between a buyer and a seller.  In
     * most cases a broker never acquires or releases ownership of a product or
     * service involved in an exchange.  If it is not clear whether an entity is
     * a broker, seller, or buyer, the latter two terms are preferred.
     *
     * @param \Spatie\SchemaOrg\Person|\Spatie\SchemaOrg\Organization $broker
     *
     * @return static
     *
     * @see http://schema.org/broker
     */
    public function broker($broker)
    {
        return $this->setProperty('broker', $broker);
    }

}
