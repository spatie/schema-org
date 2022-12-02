<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\OrderContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * An order is a confirmation of a transaction (a receipt), which can contain
 * multiple line items, each represented by an Offer that has been accepted by
 * the customer.
 *
 * @see https://schema.org/Order
 *
 */
class Order extends BaseType implements OrderContract, IntangibleContract, ThingContract
{
    /**
     * The offer(s) -- e.g., product, quantity and price combinations --
     * included in the order.
     *
     * @param \Spatie\SchemaOrg\Contracts\OfferContract|\Spatie\SchemaOrg\Contracts\OfferContract[] $acceptedOffer
     *
     * @return static
     *
     * @see https://schema.org/acceptedOffer
     */
    public function acceptedOffer($acceptedOffer)
    {
        return $this->setProperty('acceptedOffer', $acceptedOffer);
    }

    /**
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a
     * relationship between something and a class that the thing is in. In RDFa
     * syntax, it is better to use the native RDFa syntax - the 'typeof'
     * attribute - for multiple types. Schema.org tools may have only weaker
     * understanding of extra types, in particular those defined externally.
     *
     * @param string|string[] $additionalType
     *
     * @return static
     *
     * @see https://schema.org/additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * An alias for the item.
     *
     * @param string|string[] $alternateName
     *
     * @return static
     *
     * @see https://schema.org/alternateName
     */
    public function alternateName($alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * The billing address for the order.
     *
     * @param \Spatie\SchemaOrg\Contracts\PostalAddressContract|\Spatie\SchemaOrg\Contracts\PostalAddressContract[] $billingAddress
     *
     * @return static
     *
     * @see https://schema.org/billingAddress
     */
    public function billingAddress($billingAddress)
    {
        return $this->setProperty('billingAddress', $billingAddress);
    }

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In
     * most cases a broker never acquires or releases ownership of a product or
     * service involved in an exchange.  If it is not clear whether an entity is
     * a broker, seller, or buyer, the latter two terms are preferred.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $broker
     *
     * @return static
     *
     * @see https://schema.org/broker
     */
    public function broker($broker)
    {
        return $this->setProperty('broker', $broker);
    }

    /**
     * A number that confirms the given order or payment has been received.
     *
     * @param string|string[] $confirmationNumber
     *
     * @return static
     *
     * @see https://schema.org/confirmationNumber
     */
    public function confirmationNumber($confirmationNumber)
    {
        return $this->setProperty('confirmationNumber', $confirmationNumber);
    }

    /**
     * Party placing the order or paying the invoice.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $customer
     *
     * @return static
     *
     * @see https://schema.org/customer
     */
    public function customer($customer)
    {
        return $this->setProperty('customer', $customer);
    }

    /**
     * A description of the item.
     *
     * @param string|string[] $description
     *
     * @return static
     *
     * @see https://schema.org/description
     */
    public function description($description)
    {
        return $this->setProperty('description', $description);
    }

    /**
     * A sub property of description. A short description of the item used to
     * disambiguate from other, similar items. Information from other properties
     * (in particular, name) may be necessary for the description to be useful
     * for disambiguation.
     *
     * @param string|string[] $disambiguatingDescription
     *
     * @return static
     *
     * @see https://schema.org/disambiguatingDescription
     */
    public function disambiguatingDescription($disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * Any discount applied (to an Order).
     *
     * @param float|float[]|int|int[]|string|string[] $discount
     *
     * @return static
     *
     * @see https://schema.org/discount
     */
    public function discount($discount)
    {
        return $this->setProperty('discount', $discount);
    }

    /**
     * Code used to redeem a discount.
     *
     * @param string|string[] $discountCode
     *
     * @return static
     *
     * @see https://schema.org/discountCode
     */
    public function discountCode($discountCode)
    {
        return $this->setProperty('discountCode', $discountCode);
    }

    /**
     * The currency of the discount.
     *
     * Use standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange
     * Trading
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system)
     * (LETS) and other currency types, e.g. "Ithaca HOUR".
     *
     * @param string|string[] $discountCurrency
     *
     * @return static
     *
     * @see https://schema.org/discountCurrency
     */
    public function discountCurrency($discountCurrency)
    {
        return $this->setProperty('discountCurrency', $discountCurrency);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of
     * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides
     * dedicated properties for representing many of these, either as textual
     * strings or as URL (URI) links. See [background
     * notes](/docs/datamodel.html#identifierBg) for more details.
     *
     * @param \Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[]|string|string[] $identifier
     *
     * @return static
     *
     * @see https://schema.org/identifier
     */
    public function identifier($identifier)
    {
        return $this->setProperty('identifier', $identifier);
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     *
     * @param \Spatie\SchemaOrg\Contracts\ImageObjectContract|\Spatie\SchemaOrg\Contracts\ImageObjectContract[]|string|string[] $image
     *
     * @return static
     *
     * @see https://schema.org/image
     */
    public function image($image)
    {
        return $this->setProperty('image', $image);
    }

    /**
     * Indicates whether the offer was accepted as a gift for someone other than
     * the buyer.
     *
     * @param bool|bool[] $isGift
     *
     * @return static
     *
     * @see https://schema.org/isGift
     */
    public function isGift($isGift)
    {
        return $this->setProperty('isGift', $isGift);
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main
     * entity being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $mainEntityOfPage
     *
     * @return static
     *
     * @see https://schema.org/mainEntityOfPage
     */
    public function mainEntityOfPage($mainEntityOfPage)
    {
        return $this->setProperty('mainEntityOfPage', $mainEntityOfPage);
    }

    /**
     * 'merchant' is an out-dated term for 'seller'.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $merchant
     *
     * @return static
     *
     * @see https://schema.org/merchant
     */
    public function merchant($merchant)
    {
        return $this->setProperty('merchant', $merchant);
    }

    /**
     * The name of the item.
     *
     * @param string|string[] $name
     *
     * @return static
     *
     * @see https://schema.org/name
     */
    public function name($name)
    {
        return $this->setProperty('name', $name);
    }

    /**
     * Date order was placed.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $orderDate
     *
     * @return static
     *
     * @see https://schema.org/orderDate
     */
    public function orderDate($orderDate)
    {
        return $this->setProperty('orderDate', $orderDate);
    }

    /**
     * The delivery of the parcel related to this order or order item.
     *
     * @param \Spatie\SchemaOrg\Contracts\ParcelDeliveryContract|\Spatie\SchemaOrg\Contracts\ParcelDeliveryContract[] $orderDelivery
     *
     * @return static
     *
     * @see https://schema.org/orderDelivery
     */
    public function orderDelivery($orderDelivery)
    {
        return $this->setProperty('orderDelivery', $orderDelivery);
    }

    /**
     * The identifier of the transaction.
     *
     * @param string|string[] $orderNumber
     *
     * @return static
     *
     * @see https://schema.org/orderNumber
     */
    public function orderNumber($orderNumber)
    {
        return $this->setProperty('orderNumber', $orderNumber);
    }

    /**
     * The current status of the order.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrderStatusContract|\Spatie\SchemaOrg\Contracts\OrderStatusContract[] $orderStatus
     *
     * @return static
     *
     * @see https://schema.org/orderStatus
     */
    public function orderStatus($orderStatus)
    {
        return $this->setProperty('orderStatus', $orderStatus);
    }

    /**
     * The item ordered.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrderItemContract|\Spatie\SchemaOrg\Contracts\OrderItemContract[]|\Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[]|\Spatie\SchemaOrg\Contracts\ServiceContract|\Spatie\SchemaOrg\Contracts\ServiceContract[] $orderedItem
     *
     * @return static
     *
     * @see https://schema.org/orderedItem
     */
    public function orderedItem($orderedItem)
    {
        return $this->setProperty('orderedItem', $orderedItem);
    }

    /**
     * The order is being paid as part of the referenced Invoice.
     *
     * @param \Spatie\SchemaOrg\Contracts\InvoiceContract|\Spatie\SchemaOrg\Contracts\InvoiceContract[] $partOfInvoice
     *
     * @return static
     *
     * @see https://schema.org/partOfInvoice
     */
    public function partOfInvoice($partOfInvoice)
    {
        return $this->setProperty('partOfInvoice', $partOfInvoice);
    }

    /**
     * The date that payment is due.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $paymentDue
     *
     * @return static
     *
     * @see https://schema.org/paymentDue
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
     * @see https://schema.org/paymentDueDate
     */
    public function paymentDueDate($paymentDueDate)
    {
        return $this->setProperty('paymentDueDate', $paymentDueDate);
    }

    /**
     * The name of the credit card or other method of payment for the order.
     *
     * @param \Spatie\SchemaOrg\Contracts\PaymentMethodContract|\Spatie\SchemaOrg\Contracts\PaymentMethodContract[] $paymentMethod
     *
     * @return static
     *
     * @see https://schema.org/paymentMethod
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
     * @see https://schema.org/paymentMethodId
     */
    public function paymentMethodId($paymentMethodId)
    {
        return $this->setProperty('paymentMethodId', $paymentMethodId);
    }

    /**
     * The URL for sending a payment.
     *
     * @param string|string[] $paymentUrl
     *
     * @return static
     *
     * @see https://schema.org/paymentUrl
     */
    public function paymentUrl($paymentUrl)
    {
        return $this->setProperty('paymentUrl', $paymentUrl);
    }

    /**
     * Indicates a potential Action, which describes an idealized action in
     * which this thing would play an 'object' role.
     *
     * @param \Spatie\SchemaOrg\Contracts\ActionContract|\Spatie\SchemaOrg\Contracts\ActionContract[] $potentialAction
     *
     * @return static
     *
     * @see https://schema.org/potentialAction
     */
    public function potentialAction($potentialAction)
    {
        return $this->setProperty('potentialAction', $potentialAction);
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or
     * official website.
     *
     * @param string|string[] $sameAs
     *
     * @return static
     *
     * @see https://schema.org/sameAs
     */
    public function sameAs($sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services /
     * goods.  A seller may also be a provider.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $seller
     *
     * @return static
     *
     * @see https://schema.org/seller
     */
    public function seller($seller)
    {
        return $this->setProperty('seller', $seller);
    }

    /**
     * A CreativeWork or Event about this Thing.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|\Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $subjectOf
     *
     * @return static
     *
     * @see https://schema.org/subjectOf
     * @link https://github.com/schemaorg/schemaorg/issues/1670
     */
    public function subjectOf($subjectOf)
    {
        return $this->setProperty('subjectOf', $subjectOf);
    }

    /**
     * URL of the item.
     *
     * @param string|string[] $url
     *
     * @return static
     *
     * @see https://schema.org/url
     */
    public function url($url)
    {
        return $this->setProperty('url', $url);
    }
}
