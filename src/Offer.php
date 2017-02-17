<?php

namespace Spatie\SchemaOrg;

/**
 * An offer to transfer some rights to an item or to provide a service — for
 * example, an offer to sell tickets to an event, to rent the DVD of a movie, to
 * stream a TV show over the internet, to repair a motorcycle, or to loan a
 * book.
 * 
 * For [GTIN](http://www.gs1.org/barcodes/technical/idkeys/gtin)-related fields,
 * see [Check Digit
 * calculator](http://www.gs1.org/barcodes/support/check_digit_calculator) and
 * [validation
 * guide](http://www.gs1us.org/resources/standards/gtin-validation-guide) from
 * [GS1](http://www.gs1.org/).
 *
 * @see http://schema.org/Offer
 */
class Offer extends Intangible
{
    /**
     * The payment method(s) accepted by seller for this offer.
     *
     * @param \Spatie\SchemaOrg\LoanOrCredit|\Spatie\SchemaOrg\PaymentMethod $acceptedPaymentMethod
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
     * An additional offer that can only be obtained in combination with the
     * first base offer (e.g. supplements and extensions that are available for
     * a surcharge).
     *
     * @param \Spatie\SchemaOrg\Offer $addOn
     *
     * @return static
     *
     * @see http://schema.org/addOn
     */
    public function addOn($addOn)
    {
        return $this->setProperty('addOn', $addOn);
    }

    /**
     * The amount of time that is required between accepting the offer and the
     * actual usage of the resource or service.
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue $advanceBookingRequirement
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
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @param \Spatie\SchemaOrg\AggregateRating $aggregateRating
     *
     * @return static
     *
     * @see http://schema.org/aggregateRating
     */
    public function aggregateRating($aggregateRating)
    {
        return $this->setProperty('aggregateRating', $aggregateRating);
    }

    /**
     * The geographic area where a service or offered item is provided.
     *
     * @param \Spatie\SchemaOrg\Place|\Spatie\SchemaOrg\AdministrativeArea|\Spatie\SchemaOrg\GeoShape|string $areaServed
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
     * @param \Spatie\SchemaOrg\ItemAvailability $availability
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
     * @param \DateTimeInterface $availabilityEnds
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
     * @param \DateTimeInterface $availabilityStarts
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
     * @param \Spatie\SchemaOrg\Place $availableAtOrFrom
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
     * @param \Spatie\SchemaOrg\DeliveryMethod $availableDeliveryMethod
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
     * @param \Spatie\SchemaOrg\BusinessFunction $businessFunction
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
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     *
     * @param string|\Spatie\SchemaOrg\Thing $category
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
     * The typical delay between the receipt of the order and the goods either
     * leaving the warehouse or being prepared for pickup, in case the delivery
     * method is on site pickup.
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue $deliveryLeadTime
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
     * The type(s) of customers for which the given offer is valid.
     *
     * @param \Spatie\SchemaOrg\BusinessEntityType $eligibleCustomerType
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
     * @param \Spatie\SchemaOrg\QuantitativeValue $eligibleDuration
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
     * @param \Spatie\SchemaOrg\QuantitativeValue $eligibleQuantity
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
     * @param \Spatie\SchemaOrg\GeoShape|\Spatie\SchemaOrg\Place|string $eligibleRegion
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
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery
     * charge specification is not valid, e.g. a region where the transaction is
     * not allowed.
     * 
     * See also [[eligibleRegion]].
     *
     * @param \Spatie\SchemaOrg\GeoShape|\Spatie\SchemaOrg\Place|string $ineligibleRegion
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
     * The transaction volume, in a monetary unit, for which the offer or price
     * specification is valid, e.g. for indicating a minimal purchasing volume,
     * to express free shipping above a certain order volume, or to limit the
     * acceptance of credit cards to purchases to a certain minimal amount.
     *
     * @param \Spatie\SchemaOrg\PriceSpecification $eligibleTransactionVolume
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
     * The [GTIN-12](http://apps.gs1.org/GDD/glossary/Pages/GTIN-12.aspx) code
     * of the product, or the product to which the offer refers. The GTIN-12 is
     * the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix,
     * Item Reference, and Check Digit used to identify trade items. See [GS1
     * GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string $gtin12
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
     * The [GTIN-13](http://apps.gs1.org/GDD/glossary/Pages/GTIN-13.aspx) code
     * of the product, or the product to which the offer refers. This is
     * equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC
     * codes can be converted into a GTIN-13 code by simply adding a preceeding
     * zero. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string $gtin13
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
     * The [GTIN-14](http://apps.gs1.org/GDD/glossary/Pages/GTIN-14.aspx) code
     * of the product, or the product to which the offer refers. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string $gtin14
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
     * @param string $gtin8
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
     * This links to a node or nodes indicating the exact quantity of the
     * products included in the offer.
     *
     * @param \Spatie\SchemaOrg\TypeAndQuantityNode $includesObject
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
     * The current approximate inventory level for the item or items.
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue $inventoryLevel
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
     * @param \Spatie\SchemaOrg\OfferItemCondition $itemCondition
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
     * The item being offered.
     *
     * @param \Spatie\SchemaOrg\Product|\Spatie\SchemaOrg\Service $itemOffered
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
     * The Manufacturer Part Number (MPN) of the product, or the product to
     * which the offer refers.
     *
     * @param string $mpn
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
     * The offer price of a product, or of a price component when attached to
     * PriceSpecification and its subtypes.
     * 
     * Usage guidelines:
     * 
     * * Use the [[priceCurrency]] property (with [ISO 4217
     * codes](http://en.wikipedia.org/wiki/ISO_4217#Active_codes) e.g. "USD")
     * instead of
     *       including [ambiguous
     * symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign)
     * such as '$' in the value.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
     * decimal point. Avoid using these symbols as a readability separator.
     * * Note that both
     * [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute)
     * and Microdata syntax allow the use of a "content=" attribute for
     * publishing simple machine-readable values alongside more human-friendly
     * formatting.
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similiar Unicode symbols.
     *
     * @param float|int|string $price
     *
     * @return static
     *
     * @see http://schema.org/price
     */
    public function price($price)
    {
        return $this->setProperty('price', $price);
    }

    /**
     * One or more detailed price specifications, indicating the unit price and
     * delivery or payment charges.
     *
     * @param \Spatie\SchemaOrg\PriceSpecification $priceSpecification
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
     * The date after which the price is no longer available.
     *
     * @param \DateTimeInterface $priceValidUntil
     *
     * @return static
     *
     * @see http://schema.org/priceValidUntil
     */
    public function priceValidUntil($priceValidUntil)
    {
        return $this->setProperty('priceValidUntil', $priceValidUntil);
    }

    /**
     * A review of the item.
     *
     * @param \Spatie\SchemaOrg\Review $review
     *
     * @return static
     *
     * @see http://schema.org/review
     */
    public function review($review)
    {
        return $this->setProperty('review', $review);
    }

    /**
     * Review of the item.
     *
     * @param \Spatie\SchemaOrg\Review $reviews
     *
     * @return static
     *
     * @see http://schema.org/reviews
     */
    public function reviews($reviews)
    {
        return $this->setProperty('reviews', $reviews);
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
     * The serial number or any alphanumeric identifier of a particular product.
     * When attached to an offer, it is a shortcut for the serial number of the
     * product included in the offer.
     *
     * @param string $serialNumber
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
     * @param string $sku
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
     * The date when the item becomes valid.
     *
     * @param \DateTimeInterface $validFrom
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
     * @param \DateTimeInterface $validThrough
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
     * @param \Spatie\SchemaOrg\WarrantyPromise $warranty
     *
     * @return static
     *
     * @see http://schema.org/warranty
     */
    public function warranty($warranty)
    {
        return $this->setProperty('warranty', $warranty);
    }

    /**
     * The currency (in 3-letter ISO 4217 format) of the price or a price
     * component, when attached to [[PriceSpecification]] and its subtypes.
     *
     * @param string $priceCurrency
     *
     * @return static
     *
     * @see http://schema.org/priceCurrency
     */
    public function priceCurrency($priceCurrency)
    {
        return $this->setProperty('priceCurrency', $priceCurrency);
    }

}
