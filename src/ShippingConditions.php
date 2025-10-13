<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\ShippingConditionsContract;
use Spatie\SchemaOrg\Contracts\StructuredValueContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * ShippingConditions represent a set of constraints and information about the
 * conditions of shipping a product. Such conditions may apply to only a subset
 * of the products being shipped, depending on aspects of the product like
 * weight, size, price, destination, and others. All the specified conditions
 * must be met for this ShippingConditions to apply.
 *
 * @see https://schema.org/ShippingConditions
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/3617
 *
 */
class ShippingConditions extends BaseType implements ShippingConditionsContract, IntangibleContract, StructuredValueContract, ThingContract
{
    /**
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a
     * relationship between something and a class that the thing is in.
     * Typically the value is a URI-identified RDF class, and in this case
     * corresponds to the
     *     use of rdf:type in RDF. Text values can be used sparingly, for cases
     * where useful information can be added without their being an appropriate
     * schema to reference. In the case of text values, the class label should
     * follow the schema.org [style
     * guide](https://schema.org/docs/styleguide.html).
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
     * The depth of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\DistanceContract|\Spatie\SchemaOrg\Contracts\DistanceContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $depth
     *
     * @return static
     *
     * @see https://schema.org/depth
     * @link https://github.com/schemaorg/schemaorg/issues/3617
     */
    public function depth($depth)
    {
        return $this->setProperty('depth', $depth);
    }

    /**
     * A description of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\TextObjectContract|\Spatie\SchemaOrg\Contracts\TextObjectContract[]|string|string[] $description
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
     * Indicates when shipping to a particular [[shippingDestination]] is not
     * available.
     *
     * @param bool|bool[] $doesNotShip
     *
     * @return static
     *
     * @see https://schema.org/doesNotShip
     */
    public function doesNotShip($doesNotShip)
    {
        return $this->setProperty('doesNotShip', $doesNotShip);
    }

    /**
     * The height of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\DistanceContract|\Spatie\SchemaOrg\Contracts\DistanceContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $height
     *
     * @return static
     *
     * @see https://schema.org/height
     * @link https://github.com/schemaorg/schemaorg/issues/3617
     */
    public function height($height)
    {
        return $this->setProperty('height', $height);
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
     * Limits the number of items being shipped for which these conditions
     * apply.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $numItems
     *
     * @return static
     *
     * @see https://schema.org/numItems
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3617
     */
    public function numItems($numItems)
    {
        return $this->setProperty('numItems', $numItems);
    }

    /**
     * Minimum and maximum order value for which these shipping conditions are
     * valid.
     *
     * @param \Spatie\SchemaOrg\Contracts\MonetaryAmountContract|\Spatie\SchemaOrg\Contracts\MonetaryAmountContract[] $orderValue
     *
     * @return static
     *
     * @see https://schema.org/orderValue
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3617
     */
    public function orderValue($orderValue)
    {
        return $this->setProperty('orderValue', $orderValue);
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
     * Limited period during which these shipping conditions apply.
     *
     * @param \Spatie\SchemaOrg\Contracts\OpeningHoursSpecificationContract|\Spatie\SchemaOrg\Contracts\OpeningHoursSpecificationContract[] $seasonalOverride
     *
     * @return static
     *
     * @see https://schema.org/seasonalOverride
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3617
     */
    public function seasonalOverride($seasonalOverride)
    {
        return $this->setProperty('seasonalOverride', $seasonalOverride);
    }

    /**
     * indicates (possibly multiple) shipping destinations. These can be defined
     * in several ways, e.g. postalCode ranges.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedRegionContract|\Spatie\SchemaOrg\Contracts\DefinedRegionContract[] $shippingDestination
     *
     * @return static
     *
     * @see https://schema.org/shippingDestination
     */
    public function shippingDestination($shippingDestination)
    {
        return $this->setProperty('shippingDestination', $shippingDestination);
    }

    /**
     * Indicates the origin of a shipment, i.e. where it should be coming from.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedRegionContract|\Spatie\SchemaOrg\Contracts\DefinedRegionContract[] $shippingOrigin
     *
     * @return static
     *
     * @see https://schema.org/shippingOrigin
     */
    public function shippingOrigin($shippingOrigin)
    {
        return $this->setProperty('shippingOrigin', $shippingOrigin);
    }

    /**
     * The shipping rate is the cost of shipping to the specified destination.
     * Typically, the maxValue and currency values (of the [[MonetaryAmount]])
     * are most appropriate.
     *
     * @param \Spatie\SchemaOrg\Contracts\MonetaryAmountContract|\Spatie\SchemaOrg\Contracts\MonetaryAmountContract[]|\Spatie\SchemaOrg\Contracts\ShippingRateSettingsContract|\Spatie\SchemaOrg\Contracts\ShippingRateSettingsContract[] $shippingRate
     *
     * @return static
     *
     * @see https://schema.org/shippingRate
     */
    public function shippingRate($shippingRate)
    {
        return $this->setProperty('shippingRate', $shippingRate);
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
     * reach the final customer.
     *
     *   In the context of [[ShippingDeliveryTime]], use the
     * [[QuantitativeValue]]. Typical properties: minValue, maxValue, unitCode
     * (d for DAY).
     *
     *   In the context of [[ShippingConditions]], use the [[ServicePeriod]]. It
     * has a duration (as a [[QuantitativeValue]]) and also business days and a
     * cut-off time.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[]|\Spatie\SchemaOrg\Contracts\ServicePeriodContract|\Spatie\SchemaOrg\Contracts\ServicePeriodContract[] $transitTime
     *
     * @return static
     *
     * @see https://schema.org/transitTime
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

    /**
     * The weight of the product or person.
     *
     * @param \Spatie\SchemaOrg\Contracts\MassContract|\Spatie\SchemaOrg\Contracts\MassContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $weight
     *
     * @return static
     *
     * @see https://schema.org/weight
     * @link https://github.com/schemaorg/schemaorg/issues/3617
     */
    public function weight($weight)
    {
        return $this->setProperty('weight', $weight);
    }

    /**
     * The width of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\DistanceContract|\Spatie\SchemaOrg\Contracts\DistanceContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $width
     *
     * @return static
     *
     * @see https://schema.org/width
     * @link https://github.com/schemaorg/schemaorg/issues/3617
     */
    public function width($width)
    {
        return $this->setProperty('width', $width);
    }
}
