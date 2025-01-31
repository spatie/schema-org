<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\MemberProgramTierContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A MemberProgramTier specifies a tier under a loyalty (member) program, for
 * example "gold".
 *
 * @see https://schema.org/MemberProgramTier
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/3563
 *
 */
class MemberProgramTier extends BaseType implements MemberProgramTierContract, IntangibleContract, ThingContract
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
     * A member benefit for a particular tier of a loyalty program.
     *
     * @param \Spatie\SchemaOrg\Contracts\TierBenefitEnumerationContract|\Spatie\SchemaOrg\Contracts\TierBenefitEnumerationContract[] $hasTierBenefit
     *
     * @return static
     *
     * @see https://schema.org/hasTierBenefit
     * @link https://github.com/schemaorg/schemaorg/issues/3563
     */
    public function hasTierBenefit($hasTierBenefit)
    {
        return $this->setProperty('hasTierBenefit', $hasTierBenefit);
    }

    /**
     * A requirement for a user to join a membership tier, for example: a
     * CreditCard if the tier requires sign up for a credit card, A
     * UnitPriceSpecification if the user is required to pay a (periodic) fee,
     * or a MonetaryAmount if the user needs to spend a minimum amount to join
     * the tier. If a tier is free to join then this property does not need to
     * be specified.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreditCardContract|\Spatie\SchemaOrg\Contracts\CreditCardContract[]|\Spatie\SchemaOrg\Contracts\MonetaryAmountContract|\Spatie\SchemaOrg\Contracts\MonetaryAmountContract[]|\Spatie\SchemaOrg\Contracts\UnitPriceSpecificationContract|\Spatie\SchemaOrg\Contracts\UnitPriceSpecificationContract[]|string|string[] $hasTierRequirement
     *
     * @return static
     *
     * @see https://schema.org/hasTierRequirement
     * @link https://github.com/schemaorg/schemaorg/issues/3563
     */
    public function hasTierRequirement($hasTierRequirement)
    {
        return $this->setProperty('hasTierRequirement', $hasTierRequirement);
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
     * The member program this tier is a part of.
     *
     * @param \Spatie\SchemaOrg\Contracts\MemberProgramContract|\Spatie\SchemaOrg\Contracts\MemberProgramContract[] $isTierOf
     *
     * @return static
     *
     * @see https://schema.org/isTierOf
     * @link https://github.com/schemaorg/schemaorg/issues/3563
     */
    public function isTierOf($isTierOf)
    {
        return $this->setProperty('isTierOf', $isTierOf);
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
     * The number of membership points earned by the member. If necessary, the
     * unitText can be used to express the units the points are issued in. (E.g.
     * stars, miles, etc.)
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[]|float|float[]|int|int[] $membershipPointsEarned
     *
     * @return static
     *
     * @see https://schema.org/membershipPointsEarned
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2085
     */
    public function membershipPointsEarned($membershipPointsEarned)
    {
        return $this->setProperty('membershipPointsEarned', $membershipPointsEarned);
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
