<?php

namespace Spatie\SchemaOrg;

/**
 * An order is a confirmation of a transaction (a receipt), which can contain
 * multiple line items, each represented by an Offer that has been accepted by
 * the customer.
 *
 * @see 
 */
class Order extends Intangible
{
    /**
     * The offer(s) -- e.g., product, quantity and price combinations --
     * included in the order.
     *
     * @param Offer|Offer[] $acceptedOffer
     *
     * @return static
     *
     * @see 
     */
    public function acceptedOffer($acceptedOffer)
    {
        return $this->setProperty('acceptedOffer', $acceptedOffer);
    }

    /**
     * The delivery of the parcel related to this order or order item.
     *
     * @param ParcelDelivery|ParcelDelivery[] $orderDelivery
     *
     * @return static
     *
     * @see 
     */
    public function orderDelivery($orderDelivery)
    {
        return $this->setProperty('orderDelivery', $orderDelivery);
    }

    /**
     * The billing address for the order.
     *
     * @param PostalAddress|PostalAddress[] $billingAddress
     *
     * @return static
     *
     * @see 
     */
    public function billingAddress($billingAddress)
    {
        return $this->setProperty('billingAddress', $billingAddress);
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
     * Code used to redeem a discount.
     *
     * @param string|string[] $discountCode
     *
     * @return static
     *
     * @see 
     */
    public function discountCode($discountCode)
    {
        return $this->setProperty('discountCode', $discountCode);
    }

    /**
     * Any discount applied (to an Order).
     *
     * @param float|float[]|int|int[]|string|string[] $discount
     *
     * @return static
     *
     * @see 
     */
    public function discount($discount)
    {
        return $this->setProperty('discount', $discount);
    }

    /**
     * The currency (in 3-letter ISO 4217 format) of the discount.
     *
     * @param string|string[] $discountCurrency
     *
     * @return static
     *
     * @see 
     */
    public function discountCurrency($discountCurrency)
    {
        return $this->setProperty('discountCurrency', $discountCurrency);
    }

    /**
     * Was the offer accepted as a gift for someone other than the buyer.
     *
     * @param bool|bool[] $isGift
     *
     * @return static
     *
     * @see 
     */
    public function isGift($isGift)
    {
        return $this->setProperty('isGift', $isGift);
    }

    /**
     * 'merchant' is an out-dated term for 'seller'.
     *
     * @param Organization|Organization[]|Person|Person[] $merchant
     *
     * @return static
     *
     * @see 
     */
    public function merchant($merchant)
    {
        return $this->setProperty('merchant', $merchant);
    }

    /**
     * Date order was placed.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $orderDate
     *
     * @return static
     *
     * @see 
     */
    public function orderDate($orderDate)
    {
        return $this->setProperty('orderDate', $orderDate);
    }

    /**
     * The item ordered.
     *
     * @param Product|Product[]|OrderItem|OrderItem[] $orderedItem
     *
     * @return static
     *
     * @see 
     */
    public function orderedItem($orderedItem)
    {
        return $this->setProperty('orderedItem', $orderedItem);
    }

    /**
     * The current status of the order.
     *
     * @param OrderStatus|OrderStatus[] $orderStatus
     *
     * @return static
     *
     * @see 
     */
    public function orderStatus($orderStatus)
    {
        return $this->setProperty('orderStatus', $orderStatus);
    }

    /**
     * The identifier of the transaction.
     *
     * @param string|string[] $orderNumber
     *
     * @return static
     *
     * @see 
     */
    public function orderNumber($orderNumber)
    {
        return $this->setProperty('orderNumber', $orderNumber);
    }

    /**
     * The order is being paid as part of the referenced Invoice.
     *
     * @param Invoice|Invoice[] $partOfInvoice
     *
     * @return static
     *
     * @see 
     */
    public function partOfInvoice($partOfInvoice)
    {
        return $this->setProperty('partOfInvoice', $partOfInvoice);
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
     * The URL for sending a payment.
     *
     * @param string|string[] $paymentUrl
     *
     * @return static
     *
     * @see 
     */
    public function paymentUrl($paymentUrl)
    {
        return $this->setProperty('paymentUrl', $paymentUrl);
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
     * An entity which offers (sells / leases / lends / loans) the services /
     * goods.  A seller may also be a provider.
     *
     * @param Organization|Organization[]|Person|Person[] $seller
     *
     * @return static
     *
     * @see 
     */
    public function seller($seller)
    {
        return $this->setProperty('seller', $seller);
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

}
