<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\ActionContract;
use \Spatie\SchemaOrg\Contracts\CreativeWorkContract;
use \Spatie\SchemaOrg\Contracts\EventContract;
use \Spatie\SchemaOrg\Contracts\ImageObjectContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\OrderItemContract;
use \Spatie\SchemaOrg\Contracts\OrderStatusContract;
use \Spatie\SchemaOrg\Contracts\ParcelDeliveryContract;
use \Spatie\SchemaOrg\Contracts\ProductContract;
use \Spatie\SchemaOrg\Contracts\PropertyValueContract;
use \Spatie\SchemaOrg\Contracts\ServiceContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * An order item is a line of an order. It includes the quantity and shipping
 * details of a bought offer.
 *
 * @see http://schema.org/OrderItem
 *
 */
class OrderItem extends BaseType implements IntangibleContract, ThingContract
{
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
     * @see http://schema.org/additionalType
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
     * @see http://schema.org/alternateName
     */
    public function alternateName($alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * A description of the item.
     *
     * @param string|string[] $description
     *
     * @return static
     *
     * @see http://schema.org/description
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
     * @see http://schema.org/disambiguatingDescription
     */
    public function disambiguatingDescription($disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of
     * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides
     * dedicated properties for representing many of these, either as textual
     * strings or as URL (URI) links. See [background
     * notes](/docs/datamodel.html#identifierBg) for more details.
     *
     * @param PropertyValueContract|PropertyValueContract[]|string|string[] $identifier
     *
     * @return static
     *
     * @see http://schema.org/identifier
     */
    public function identifier($identifier)
    {
        return $this->setProperty('identifier', $identifier);
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     *
     * @param ImageObjectContract|ImageObjectContract[]|string|string[] $image
     *
     * @return static
     *
     * @see http://schema.org/image
     */
    public function image($image)
    {
        return $this->setProperty('image', $image);
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main
     * entity being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     * @param CreativeWorkContract|CreativeWorkContract[]|string|string[] $mainEntityOfPage
     *
     * @return static
     *
     * @see http://schema.org/mainEntityOfPage
     */
    public function mainEntityOfPage($mainEntityOfPage)
    {
        return $this->setProperty('mainEntityOfPage', $mainEntityOfPage);
    }

    /**
     * The name of the item.
     *
     * @param string|string[] $name
     *
     * @return static
     *
     * @see http://schema.org/name
     */
    public function name($name)
    {
        return $this->setProperty('name', $name);
    }

    /**
     * The delivery of the parcel related to this order or order item.
     *
     * @param ParcelDeliveryContract|ParcelDeliveryContract[] $orderDelivery
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
     * The identifier of the order item.
     *
     * @param string|string[] $orderItemNumber
     *
     * @return static
     *
     * @see http://schema.org/orderItemNumber
     */
    public function orderItemNumber($orderItemNumber)
    {
        return $this->setProperty('orderItemNumber', $orderItemNumber);
    }

    /**
     * The current status of the order item.
     *
     * @param OrderStatusContract|OrderStatusContract[] $orderItemStatus
     *
     * @return static
     *
     * @see http://schema.org/orderItemStatus
     */
    public function orderItemStatus($orderItemStatus)
    {
        return $this->setProperty('orderItemStatus', $orderItemStatus);
    }

    /**
     * The number of the item ordered. If the property is not set, assume the
     * quantity is one.
     *
     * @param float|float[]|int|int[] $orderQuantity
     *
     * @return static
     *
     * @see http://schema.org/orderQuantity
     */
    public function orderQuantity($orderQuantity)
    {
        return $this->setProperty('orderQuantity', $orderQuantity);
    }

    /**
     * The item ordered.
     *
     * @param OrderItemContract|OrderItemContract[]|ProductContract|ProductContract[]|ServiceContract|ServiceContract[] $orderedItem
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
     * Indicates a potential Action, which describes an idealized action in
     * which this thing would play an 'object' role.
     *
     * @param ActionContract|ActionContract[] $potentialAction
     *
     * @return static
     *
     * @see http://schema.org/potentialAction
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
     * @see http://schema.org/sameAs
     */
    public function sameAs($sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * A CreativeWork or Event about this Thing.
     *
     * @param CreativeWorkContract|CreativeWorkContract[]|EventContract|EventContract[] $subjectOf
     *
     * @return static
     *
     * @see http://schema.org/subjectOf
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
     * @see http://schema.org/url
     */
    public function url($url)
    {
        return $this->setProperty('url', $url);
    }

}
