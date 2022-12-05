<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\ShippingDeliveryTimeContract;
use Spatie\SchemaOrg\Contracts\StructuredValueContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * ShippingDeliveryTime provides various pieces of information about delivery
 * times for shipping.
 *
 * @see https://schema.org/ShippingDeliveryTime
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2506
 *
 */
class ShippingDeliveryTime extends BaseType implements ShippingDeliveryTimeContract, IntangibleContract, StructuredValueContract, ThingContract
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
     * Days of the week when the merchant typically operates, indicated via
     * opening hours markup.
     *
     * @param \Spatie\SchemaOrg\Contracts\OpeningHoursSpecificationContract|\Spatie\SchemaOrg\Contracts\OpeningHoursSpecificationContract[] $businessDays
     *
     * @return static
     *
     * @see https://schema.org/businessDays
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function businessDays($businessDays)
    {
        return $this->setProperty('businessDays', $businessDays);
    }

    /**
     * Order cutoff time allows merchants to describe the time after which they
     * will no longer process orders received on that day. For orders processed
     * after cutoff time, one day gets added to the delivery time estimate. This
     * property is expected to be most typically used via the
     * [[ShippingRateSettings]] publication pattern. The time is indicated using
     * the ISO-8601 Time format, e.g. "23:30:00-05:00" would represent 6:30 pm
     * Eastern Standard Time (EST) which is 5 hours behind Coordinated Universal
     * Time (UTC).
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $cutoffTime
     *
     * @return static
     *
     * @see https://schema.org/cutoffTime
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function cutoffTime($cutoffTime)
    {
        return $this->setProperty('cutoffTime', $cutoffTime);
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
     * The typical delay between the receipt of the order and the goods either
     * leaving the warehouse or being prepared for pickup, in case the delivery
     * method is on site pickup. Typical properties: minValue, maxValue,
     * unitCode (d for DAY).  This is by common convention assumed to mean
     * business days (if a unitCode is used, coded as "d"), i.e. only counting
     * days when the business normally operates.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $handlingTime
     *
     * @return static
     *
     * @see https://schema.org/handlingTime
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function handlingTime($handlingTime)
    {
        return $this->setProperty('handlingTime', $handlingTime);
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
     * The typical delay the order has been sent for delivery and the goods
     * reach the final customer. Typical properties: minValue, maxValue,
     * unitCode (d for DAY).
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $transitTime
     *
     * @return static
     *
     * @see https://schema.org/transitTime
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function transitTime($transitTime)
    {
        return $this->setProperty('transitTime', $transitTime);
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
