<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\ActionContract;
use \Spatie\SchemaOrg\Contracts\AdministrativeAreaContract;
use \Spatie\SchemaOrg\Contracts\AggregateOfferContract;
use \Spatie\SchemaOrg\Contracts\BusinessEntityTypeContract;
use \Spatie\SchemaOrg\Contracts\BusinessFunctionContract;
use \Spatie\SchemaOrg\Contracts\CreativeWorkContract;
use \Spatie\SchemaOrg\Contracts\DeliveryMethodContract;
use \Spatie\SchemaOrg\Contracts\EventContract;
use \Spatie\SchemaOrg\Contracts\GeoShapeContract;
use \Spatie\SchemaOrg\Contracts\ImageObjectContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\ItemAvailabilityContract;
use \Spatie\SchemaOrg\Contracts\LoanOrCreditContract;
use \Spatie\SchemaOrg\Contracts\MenuItemContract;
use \Spatie\SchemaOrg\Contracts\OfferItemConditionContract;
use \Spatie\SchemaOrg\Contracts\OrganizationContract;
use \Spatie\SchemaOrg\Contracts\PaymentMethodContract;
use \Spatie\SchemaOrg\Contracts\PersonContract;
use \Spatie\SchemaOrg\Contracts\PlaceContract;
use \Spatie\SchemaOrg\Contracts\PriceSpecificationContract;
use \Spatie\SchemaOrg\Contracts\ProductContract;
use \Spatie\SchemaOrg\Contracts\PropertyValueContract;
use \Spatie\SchemaOrg\Contracts\QuantitativeValueContract;
use \Spatie\SchemaOrg\Contracts\ServiceContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;
use \Spatie\SchemaOrg\Contracts\TripContract;
use \Spatie\SchemaOrg\Contracts\TypeAndQuantityNodeContract;
use \Spatie\SchemaOrg\Contracts\WarrantyPromiseContract;

/**
 * A demand entity represents the public, not necessarily binding, not
 * necessarily exclusive, announcement by an organization or person to seek a
 * certain type of goods or services. For describing demand using this type, the
 * very same properties used for Offer apply.
 *
 * @see http://schema.org/Demand
 *
 */
class Demand extends BaseType implements IntangibleContract, ThingContract
{
    /**
     * The payment method(s) accepted by seller for this offer.
     *
     * @param LoanOrCreditContract|LoanOrCreditContract[]|PaymentMethodContract|PaymentMethodContract[] $acceptedPaymentMethod
     *
     * @return static
     *
     * @see http://schema.org/acceptedPaymentMethod
     */
    public function acceptedPaymentMethod($acceptedPaymentMethod)
    {
        return $this->setProperty('acceptedPaymentMethod', $acceptedPaymentMethod);
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
     * @see http://schema.org/additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * The amount of time that is required between accepting the offer and the
     * actual usage of the resource or service.
     *
     * @param QuantitativeValueContract|QuantitativeValueContract[] $advanceBookingRequirement
     *
     * @return static
     *
     * @see http://schema.org/advanceBookingRequirement
     */
    public function advanceBookingRequirement($advanceBookingRequirement)
    {
        return $this->setProperty('advanceBookingRequirement', $advanceBookingRequirement);
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
     * The geographic area where a service or offered item is provided.
     *
     * @param AdministrativeAreaContract|AdministrativeAreaContract[]|GeoShapeContract|GeoShapeContract[]|PlaceContract|PlaceContract[]|string|string[] $areaServed
     *
     * @return static
     *
     * @see http://schema.org/areaServed
     */
    public function areaServed($areaServed)
    {
        return $this->setProperty('areaServed', $areaServed);
    }

    /**
     * The availability of this item&#x2014;for example In stock, Out of stock,
     * Pre-order, etc.
     *
     * @param ItemAvailabilityContract|ItemAvailabilityContract[] $availability
     *
     * @return static
     *
     * @see http://schema.org/availability
     */
    public function availability($availability)
    {
        return $this->setProperty('availability', $availability);
    }

    /**
     * The end of the availability of the product or service included in the
     * offer.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $availabilityEnds
     *
     * @return static
     *
     * @see http://schema.org/availabilityEnds
     */
    public function availabilityEnds($availabilityEnds)
    {
        return $this->setProperty('availabilityEnds', $availabilityEnds);
    }

    /**
     * The beginning of the availability of the product or service included in
     * the offer.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $availabilityStarts
     *
     * @return static
     *
     * @see http://schema.org/availabilityStarts
     */
    public function availabilityStarts($availabilityStarts)
    {
        return $this->setProperty('availabilityStarts', $availabilityStarts);
    }

    /**
     * The place(s) from which the offer can be obtained (e.g. store locations).
     *
     * @param PlaceContract|PlaceContract[] $availableAtOrFrom
     *
     * @return static
     *
     * @see http://schema.org/availableAtOrFrom
     */
    public function availableAtOrFrom($availableAtOrFrom)
    {
        return $this->setProperty('availableAtOrFrom', $availableAtOrFrom);
    }

    /**
     * The delivery method(s) available for this offer.
     *
     * @param DeliveryMethodContract|DeliveryMethodContract[] $availableDeliveryMethod
     *
     * @return static
     *
     * @see http://schema.org/availableDeliveryMethod
     */
    public function availableDeliveryMethod($availableDeliveryMethod)
    {
        return $this->setProperty('availableDeliveryMethod', $availableDeliveryMethod);
    }

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or
     * component of a bundle (TypeAndQuantityNode). The default is
     * http://purl.org/goodrelations/v1#Sell.
     *
     * @param BusinessFunctionContract|BusinessFunctionContract[] $businessFunction
     *
     * @return static
     *
     * @see http://schema.org/businessFunction
     */
    public function businessFunction($businessFunction)
    {
        return $this->setProperty('businessFunction', $businessFunction);
    }

    /**
     * The typical delay between the receipt of the order and the goods either
     * leaving the warehouse or being prepared for pickup, in case the delivery
     * method is on site pickup.
     *
     * @param QuantitativeValueContract|QuantitativeValueContract[] $deliveryLeadTime
     *
     * @return static
     *
     * @see http://schema.org/deliveryLeadTime
     */
    public function deliveryLeadTime($deliveryLeadTime)
    {
        return $this->setProperty('deliveryLeadTime', $deliveryLeadTime);
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
     * The type(s) of customers for which the given offer is valid.
     *
     * @param BusinessEntityTypeContract|BusinessEntityTypeContract[] $eligibleCustomerType
     *
     * @return static
     *
     * @see http://schema.org/eligibleCustomerType
     */
    public function eligibleCustomerType($eligibleCustomerType)
    {
        return $this->setProperty('eligibleCustomerType', $eligibleCustomerType);
    }

    /**
     * The duration for which the given offer is valid.
     *
     * @param QuantitativeValueContract|QuantitativeValueContract[] $eligibleDuration
     *
     * @return static
     *
     * @see http://schema.org/eligibleDuration
     */
    public function eligibleDuration($eligibleDuration)
    {
        return $this->setProperty('eligibleDuration', $eligibleDuration);
    }

    /**
     * The interval and unit of measurement of ordering quantities for which the
     * offer or price specification is valid. This allows e.g. specifying that a
     * certain freight charge is valid only for a certain quantity.
     *
     * @param QuantitativeValueContract|QuantitativeValueContract[] $eligibleQuantity
     *
     * @return static
     *
     * @see http://schema.org/eligibleQuantity
     */
    public function eligibleQuantity($eligibleQuantity)
    {
        return $this->setProperty('eligibleQuantity', $eligibleQuantity);
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery
     * charge specification is valid.
     * 
     * See also [[ineligibleRegion]].
     *
     * @param GeoShapeContract|GeoShapeContract[]|PlaceContract|PlaceContract[]|string|string[] $eligibleRegion
     *
     * @return static
     *
     * @see http://schema.org/eligibleRegion
     */
    public function eligibleRegion($eligibleRegion)
    {
        return $this->setProperty('eligibleRegion', $eligibleRegion);
    }

    /**
     * The transaction volume, in a monetary unit, for which the offer or price
     * specification is valid, e.g. for indicating a minimal purchasing volume,
     * to express free shipping above a certain order volume, or to limit the
     * acceptance of credit cards to purchases to a certain minimal amount.
     *
     * @param PriceSpecificationContract|PriceSpecificationContract[] $eligibleTransactionVolume
     *
     * @return static
     *
     * @see http://schema.org/eligibleTransactionVolume
     */
    public function eligibleTransactionVolume($eligibleTransactionVolume)
    {
        return $this->setProperty('eligibleTransactionVolume', $eligibleTransactionVolume);
    }

    /**
     * The GTIN-12 code of the product, or the product to which the offer
     * refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a
     * U.P.C. Company Prefix, Item Reference, and Check Digit used to identify
     * trade items. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin12
     *
     * @return static
     *
     * @see http://schema.org/gtin12
     */
    public function gtin12($gtin12)
    {
        return $this->setProperty('gtin12', $gtin12);
    }

    /**
     * The GTIN-13 code of the product, or the product to which the offer
     * refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former
     * 12-digit UPC codes can be converted into a GTIN-13 code by simply adding
     * a preceeding zero. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin13
     *
     * @return static
     *
     * @see http://schema.org/gtin13
     */
    public function gtin13($gtin13)
    {
        return $this->setProperty('gtin13', $gtin13);
    }

    /**
     * The GTIN-14 code of the product, or the product to which the offer
     * refers. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin14
     *
     * @return static
     *
     * @see http://schema.org/gtin14
     */
    public function gtin14($gtin14)
    {
        return $this->setProperty('gtin14', $gtin14);
    }

    /**
     * The [GTIN-8](http://apps.gs1.org/GDD/glossary/Pages/GTIN-8.aspx) code of
     * the product, or the product to which the offer refers. This code is also
     * known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin8
     *
     * @return static
     *
     * @see http://schema.org/gtin8
     */
    public function gtin8($gtin8)
    {
        return $this->setProperty('gtin8', $gtin8);
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
     * This links to a node or nodes indicating the exact quantity of the
     * products included in the offer.
     *
     * @param TypeAndQuantityNodeContract|TypeAndQuantityNodeContract[] $includesObject
     *
     * @return static
     *
     * @see http://schema.org/includesObject
     */
    public function includesObject($includesObject)
    {
        return $this->setProperty('includesObject', $includesObject);
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery
     * charge specification is not valid, e.g. a region where the transaction is
     * not allowed.
     * 
     * See also [[eligibleRegion]].
     *
     * @param GeoShapeContract|GeoShapeContract[]|PlaceContract|PlaceContract[]|string|string[] $ineligibleRegion
     *
     * @return static
     *
     * @see http://schema.org/ineligibleRegion
     */
    public function ineligibleRegion($ineligibleRegion)
    {
        return $this->setProperty('ineligibleRegion', $ineligibleRegion);
    }

    /**
     * The current approximate inventory level for the item or items.
     *
     * @param QuantitativeValueContract|QuantitativeValueContract[] $inventoryLevel
     *
     * @return static
     *
     * @see http://schema.org/inventoryLevel
     */
    public function inventoryLevel($inventoryLevel)
    {
        return $this->setProperty('inventoryLevel', $inventoryLevel);
    }

    /**
     * A predefined value from OfferItemCondition or a textual description of
     * the condition of the product or service, or the products or services
     * included in the offer.
     *
     * @param OfferItemConditionContract|OfferItemConditionContract[] $itemCondition
     *
     * @return static
     *
     * @see http://schema.org/itemCondition
     */
    public function itemCondition($itemCondition)
    {
        return $this->setProperty('itemCondition', $itemCondition);
    }

    /**
     * An item being offered (or demanded). The transactional nature of the
     * offer or demand is documented using [[businessFunction]], e.g. sell,
     * lease etc. While several common expected types are listed explicitly in
     * this definition, others can be used. Using a second type, such as Product
     * or a subtype of Product, can clarify the nature of the offer.
     *
     * @param AggregateOfferContract|AggregateOfferContract[]|CreativeWorkContract|CreativeWorkContract[]|EventContract|EventContract[]|MenuItemContract|MenuItemContract[]|ProductContract|ProductContract[]|ServiceContract|ServiceContract[]|TripContract|TripContract[] $itemOffered
     *
     * @return static
     *
     * @see http://schema.org/itemOffered
     */
    public function itemOffered($itemOffered)
    {
        return $this->setProperty('itemOffered', $itemOffered);
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
     * The Manufacturer Part Number (MPN) of the product, or the product to
     * which the offer refers.
     *
     * @param string|string[] $mpn
     *
     * @return static
     *
     * @see http://schema.org/mpn
     */
    public function mpn($mpn)
    {
        return $this->setProperty('mpn', $mpn);
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
     * One or more detailed price specifications, indicating the unit price and
     * delivery or payment charges.
     *
     * @param PriceSpecificationContract|PriceSpecificationContract[] $priceSpecification
     *
     * @return static
     *
     * @see http://schema.org/priceSpecification
     */
    public function priceSpecification($priceSpecification)
    {
        return $this->setProperty('priceSpecification', $priceSpecification);
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
     * An entity which offers (sells / leases / lends / loans) the services /
     * goods.  A seller may also be a provider.
     *
     * @param OrganizationContract|OrganizationContract[]|PersonContract|PersonContract[] $seller
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
     * The serial number or any alphanumeric identifier of a particular product.
     * When attached to an offer, it is a shortcut for the serial number of the
     * product included in the offer.
     *
     * @param string|string[] $serialNumber
     *
     * @return static
     *
     * @see http://schema.org/serialNumber
     */
    public function serialNumber($serialNumber)
    {
        return $this->setProperty('serialNumber', $serialNumber);
    }

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a
     * product or service, or the product to which the offer refers.
     *
     * @param string|string[] $sku
     *
     * @return static
     *
     * @see http://schema.org/sku
     */
    public function sku($sku)
    {
        return $this->setProperty('sku', $sku);
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

    /**
     * The date when the item becomes valid.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $validFrom
     *
     * @return static
     *
     * @see http://schema.org/validFrom
     */
    public function validFrom($validFrom)
    {
        return $this->setProperty('validFrom', $validFrom);
    }

    /**
     * The date after when the item is not valid. For example the end of an
     * offer, salary period, or a period of opening hours.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $validThrough
     *
     * @return static
     *
     * @see http://schema.org/validThrough
     */
    public function validThrough($validThrough)
    {
        return $this->setProperty('validThrough', $validThrough);
    }

    /**
     * The warranty promise(s) included in the offer.
     *
     * @param WarrantyPromiseContract|WarrantyPromiseContract[] $warranty
     *
     * @return static
     *
     * @see http://schema.org/warranty
     */
    public function warranty($warranty)
    {
        return $this->setProperty('warranty', $warranty);
    }

}
