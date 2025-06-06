<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\MerchantReturnPolicySeasonalOverrideContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A seasonal override of a return policy, for example used for holidays.
 *
 * @see https://schema.org/MerchantReturnPolicySeasonalOverride
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2880
 *
 */
class MerchantReturnPolicySeasonalOverride extends BaseType implements MerchantReturnPolicySeasonalOverrideContract, IntangibleContract, ThingContract
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
     * The end date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $endDate
     *
     * @return static
     *
     * @see https://schema.org/endDate
     * @link https://github.com/schemaorg/schemaorg/issues/2486
     */
    public function endDate($endDate)
    {
        return $this->setProperty('endDate', $endDate);
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
     * Specifies either a fixed return date or the number of days (from the
     * delivery date) that a product can be returned. Used when the
     * [[returnPolicyCategory]] property is specified as
     * [[MerchantReturnFiniteReturnWindow]].
     *
     * @param \DateTimeInterface|\DateTimeInterface[]|int|int[] $merchantReturnDays
     *
     * @return static
     *
     * @see https://schema.org/merchantReturnDays
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function merchantReturnDays($merchantReturnDays)
    {
        return $this->setProperty('merchantReturnDays', $merchantReturnDays);
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
     * A refund type, from an enumerated list.
     *
     * @param \Spatie\SchemaOrg\Contracts\RefundTypeEnumerationContract|\Spatie\SchemaOrg\Contracts\RefundTypeEnumerationContract[] $refundType
     *
     * @return static
     *
     * @see https://schema.org/refundType
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function refundType($refundType)
    {
        return $this->setProperty('refundType', $refundType);
    }

    /**
     * Use [[MonetaryAmount]] to specify a fixed restocking fee for product
     * returns, or use [[Number]] to specify a percentage of the product price
     * paid by the customer.
     *
     * @param \Spatie\SchemaOrg\Contracts\MonetaryAmountContract|\Spatie\SchemaOrg\Contracts\MonetaryAmountContract[]|float|float[]|int|int[] $restockingFee
     *
     * @return static
     *
     * @see https://schema.org/restockingFee
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2880
     */
    public function restockingFee($restockingFee)
    {
        return $this->setProperty('restockingFee', $restockingFee);
    }

    /**
     * The type of return fees for purchased products (for any return reason).
     *
     * @param \Spatie\SchemaOrg\Contracts\ReturnFeesEnumerationContract|\Spatie\SchemaOrg\Contracts\ReturnFeesEnumerationContract[] $returnFees
     *
     * @return static
     *
     * @see https://schema.org/returnFees
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function returnFees($returnFees)
    {
        return $this->setProperty('returnFees', $returnFees);
    }

    /**
     * The type of return method offered, specified from an enumeration.
     *
     * @param \Spatie\SchemaOrg\Contracts\ReturnMethodEnumerationContract|\Spatie\SchemaOrg\Contracts\ReturnMethodEnumerationContract[] $returnMethod
     *
     * @return static
     *
     * @see https://schema.org/returnMethod
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2880
     */
    public function returnMethod($returnMethod)
    {
        return $this->setProperty('returnMethod', $returnMethod);
    }

    /**
     * Specifies an applicable return policy (from an enumeration).
     *
     * @param \Spatie\SchemaOrg\Contracts\MerchantReturnEnumerationContract|\Spatie\SchemaOrg\Contracts\MerchantReturnEnumerationContract[] $returnPolicyCategory
     *
     * @return static
     *
     * @see https://schema.org/returnPolicyCategory
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function returnPolicyCategory($returnPolicyCategory)
    {
        return $this->setProperty('returnPolicyCategory', $returnPolicyCategory);
    }

    /**
     * Amount of shipping costs for product returns (for any reason). Applicable
     * when property [[returnFees]] equals [[ReturnShippingFees]].
     *
     * @param \Spatie\SchemaOrg\Contracts\MonetaryAmountContract|\Spatie\SchemaOrg\Contracts\MonetaryAmountContract[] $returnShippingFeesAmount
     *
     * @return static
     *
     * @see https://schema.org/returnShippingFeesAmount
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2880
     */
    public function returnShippingFeesAmount($returnShippingFeesAmount)
    {
        return $this->setProperty('returnShippingFeesAmount', $returnShippingFeesAmount);
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
     * The start date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $startDate
     *
     * @return static
     *
     * @see https://schema.org/startDate
     * @link https://github.com/schemaorg/schemaorg/issues/2486
     */
    public function startDate($startDate)
    {
        return $this->setProperty('startDate', $startDate);
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
