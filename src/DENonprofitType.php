<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\DENonprofitTypeContract;
use Spatie\SchemaOrg\Contracts\EnumerationContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\NonprofitTypeContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * DENonprofitType: Non-profit organization type originating from Germany in
 * accordance with article 52 of the German fiscal code (Abgabenverordnung or
 * AO).
 *
 * @see https://schema.org/DENonprofitType
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/3629
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class DENonprofitType extends BaseType implements DENonprofitTypeContract, EnumerationContract, IntangibleContract, NonprofitTypeContract, ThingContract
{
    /**
     * DECooperativeCharity: Non-profit type referring to a charitable
     * Cooperative (German Genossenschaft) that has been recognized by the tax
     * authorities as a charitable non-profit.
     *
     * @see https://schema.org/DECooperativeCharity
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3629
     */
    public const DECooperativeCharity = 'https://schema.org/DECooperativeCharity';

    /**
     * DEFoundationCharity: Non-profit type referring to a charitable Foundation
     * (German Stiftung) that has been recognized by the tax authorities as a
     * charitable non-profit.
     *
     * @see https://schema.org/DEFoundationCharity
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3629
     */
    public const DEFoundationCharity = 'https://schema.org/DEFoundationCharity';

    /**
     * DEJointStockCompanyCharity: Non-profit type referring to a charitable
     * Joint Stock Company (German gAG gemeinnützige Aktiengesellschaft) that
     * has been recognized by the tax authorities as a charitable non-profit.
     *
     * @see https://schema.org/DEJointStockCompanyCharity
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3629
     */
    public const DEJointStockCompanyCharity = 'https://schema.org/DEJointStockCompanyCharity';

    /**
     * DELimitedLiabilityCharity: Non-profit type referring to a charitable
     * Common Stock Company (German gGmbH or gemeinnützige Gesellschaft mit
     * beschränkter Haftung) that has been recognized by the tax authorities as
     * a charitable non-profit.
     *
     * @see https://schema.org/DELimitedLiabilityCharity
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3629
     */
    public const DELimitedLiabilityCharity = 'https://schema.org/DELimitedLiabilityCharity';

    /**
     * DENotRegisteredAssociationCharity: Non-profit type referring to a
     * charitable association that is not registered with the German association
     * register (gemeinnütziger Verein) and has been recognized by the tax
     * authorities as a charitable non-profit.
     *
     * @see https://schema.org/DENotRegisteredAssociationCharity
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3629
     */
    public const DENotRegisteredAssociationCharity = 'https://schema.org/DENotRegisteredAssociationCharity';

    /**
     * DEPublicCharity: Non-profit type referring to a charitable government
     * owned juridical person (German Körperschaft öffentlichen Rechts) that
     * has been recognized by the tax authorities as a charitable non-profit.
     *
     * @see https://schema.org/DEPublicCharity
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3629
     */
    public const DEPublicCharity = 'https://schema.org/DEPublicCharity';

    /**
     * DERegisteredAssociationCharity: Non-profit type referring to a charitable
     * association that is registered with the German association register
     * (german gemeinnütziger e.v. or gemeinnütziger eingetragener Verein) and
     * has been recognized by the tax authorities as a charitable non-profit.
     *
     * @see https://schema.org/DERegisteredAssociationCharity
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3629
     */
    public const DERegisteredAssociationCharity = 'https://schema.org/DERegisteredAssociationCharity';

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
     * A person or organization who owns this Thing.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $owner
     *
     * @return static
     *
     * @see https://schema.org/owner
     * @link https://github.com/schemaorg/schemaorg/issues/4603
     */
    public function owner($owner)
    {
        return $this->setProperty('owner', $owner);
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
