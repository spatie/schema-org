<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\AdultOrientedEnumerationContract;
use Spatie\SchemaOrg\Contracts\EnumerationContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Enumeration of considerations that make a product relevant or potentially
 * restricted for adults only.
 *
 * @see https://schema.org/AdultOrientedEnumeration
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2989
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class AdultOrientedEnumeration extends BaseType implements AdultOrientedEnumerationContract, EnumerationContract, IntangibleContract, ThingContract
{
    /**
     * Item contains alcohol or promotes alcohol consumption.
     *
     * @see https://schema.org/AlcoholConsideration
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2989
     */
    public const AlcoholConsideration = 'https://schema.org/AlcoholConsideration';

    /**
     * The item is dangerous and requires careful handling and/or special
     * training of the user. See also the [UN Model
     * Classification](https://unece.org/DAM/trans/danger/publi/unrec/rev17/English/02EREv17_Part2.pdf)
     * defining the 9 classes of dangerous goods such as explosives, gases,
     * flammables, and more.
     *
     * @see https://schema.org/DangerousGoodConsideration
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2989
     */
    public const DangerousGoodConsideration = 'https://schema.org/DangerousGoodConsideration';

    /**
     * Item is a pharmaceutical (e.g., a prescription or OTC drug) or a
     * restricted medical device.
     *
     * @see https://schema.org/HealthcareConsideration
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2989
     */
    public const HealthcareConsideration = 'https://schema.org/HealthcareConsideration';

    /**
     * Item is a narcotic as defined by the [1961 UN
     * convention](https://www.incb.org/incb/en/narcotic-drugs/Yellowlist/yellow-list.html),
     * for example marijuana or heroin.
     *
     * @see https://schema.org/NarcoticConsideration
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2989
     */
    public const NarcoticConsideration = 'https://schema.org/NarcoticConsideration';

    /**
     * A general code for cases where relevance to children is reduced, e.g.
     * adult education, mortgages, retirement-related products, etc.
     *
     * @see https://schema.org/ReducedRelevanceForChildrenConsideration
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2989
     */
    public const ReducedRelevanceForChildrenConsideration = 'https://schema.org/ReducedRelevanceForChildrenConsideration';

    /**
     * The item contains sexually oriented content such as nudity, suggestive or
     * explicit material, or related online services, or is intended to enhance
     * sexual activity. Examples: Erotic videos or magazine, sexual enhancement
     * devices, sex toys.
     *
     * @see https://schema.org/SexualContentConsideration
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2989
     */
    public const SexualContentConsideration = 'https://schema.org/SexualContentConsideration';

    /**
     * Item contains tobacco and/or nicotine, for example cigars, cigarettes,
     * chewing tobacco, e-cigarettes, or hookahs.
     *
     * @see https://schema.org/TobaccoNicotineConsideration
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2989
     */
    public const TobaccoNicotineConsideration = 'https://schema.org/TobaccoNicotineConsideration';

    /**
     * The item is suitable only for adults, without indicating why. Due to
     * widespread use of "adult" as a euphemism for "sexual", many such items
     * are likely suited also for the SexualContentConsideration code.
     *
     * @see https://schema.org/UnclassifiedAdultConsideration
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2989
     */
    public const UnclassifiedAdultConsideration = 'https://schema.org/UnclassifiedAdultConsideration';

    /**
     * Item shows or promotes violence.
     *
     * @see https://schema.org/ViolenceConsideration
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2989
     */
    public const ViolenceConsideration = 'https://schema.org/ViolenceConsideration';

    /**
     * The item is intended to induce bodily harm, for example guns, mace,
     * combat knives, brass knuckles, nail or other bombs, and spears.
     *
     * @see https://schema.org/WeaponConsideration
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2989
     */
    public const WeaponConsideration = 'https://schema.org/WeaponConsideration';

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
