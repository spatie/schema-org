<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\EnumerationContract;
use Spatie\SchemaOrg\Contracts\GovernmentBenefitsTypeContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * GovernmentBenefitsType enumerates several kinds of government benefits to
 * support the COVID-19 situation. Note that this structure may not capture all
 * benefits offered.
 *
 * @see https://schema.org/GovernmentBenefitsType
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2534
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class GovernmentBenefitsType extends BaseType implements GovernmentBenefitsTypeContract, EnumerationContract, IntangibleContract, ThingContract
{
    /**
     * BasicIncome: this is a benefit for basic income.
     *
     * @see https://schema.org/BasicIncome
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2534
     */
    public const BasicIncome = 'https://schema.org/BasicIncome';

    /**
     * BusinessSupport: this is a benefit for supporting businesses.
     *
     * @see https://schema.org/BusinessSupport
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2534
     */
    public const BusinessSupport = 'https://schema.org/BusinessSupport';

    /**
     * DisabilitySupport: this is a benefit for disability support.
     *
     * @see https://schema.org/DisabilitySupport
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2534
     */
    public const DisabilitySupport = 'https://schema.org/DisabilitySupport';

    /**
     * HealthCare: this is a benefit for health care.
     *
     * @see https://schema.org/HealthCare
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2534
     */
    public const HealthCare = 'https://schema.org/HealthCare';

    /**
     * OneTimePayments: this is a benefit for one-time payments for individuals.
     *
     * @see https://schema.org/OneTimePayments
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2534
     */
    public const OneTimePayments = 'https://schema.org/OneTimePayments';

    /**
     * PaidLeave: this is a benefit for paid leave.
     *
     * @see https://schema.org/PaidLeave
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2534
     */
    public const PaidLeave = 'https://schema.org/PaidLeave';

    /**
     * ParentalSupport: this is a benefit for parental support.
     *
     * @see https://schema.org/ParentalSupport
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2534
     */
    public const ParentalSupport = 'https://schema.org/ParentalSupport';

    /**
     * UnemploymentSupport: this is a benefit for unemployment support.
     *
     * @see https://schema.org/UnemploymentSupport
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2534
     */
    public const UnemploymentSupport = 'https://schema.org/UnemploymentSupport';

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
