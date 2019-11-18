<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\QualitativeValueContract;
use \Spatie\SchemaOrg\Contracts\EnumerationContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A predefined value for a product characteristic, e.g. the power cord plug
 * type 'US' or the garment sizes 'S', 'M', 'L', and 'XL'.
 *
 * @see http://schema.org/QualitativeValue
 *
 */
class QualitativeValue extends BaseType implements QualitativeValueContract, EnumerationContract, IntangibleContract, ThingContract
{
    /**
     * A property-value pair representing an additional characteristics of the
     * entitity, e.g. a product feature or another characteristic for which
     * there is no matching property in schema.org.
     * 
     * Note: Publishers should be aware that applications designed to use
     * specific schema.org properties (e.g. http://schema.org/width,
     * http://schema.org/color, http://schema.org/gtin13, ...) will typically
     * expect such data to be provided using those properties, rather than using
     * the generic property/value mechanism.
     *
     * @param \Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[] $additionalProperty
     *
     * @return static
     *
     * @see http://schema.org/additionalProperty
     */
    public function additionalProperty($additionalProperty)
    {
        return $this->setProperty('additionalProperty', $additionalProperty);
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
     * This ordering relation for qualitative values indicates that the subject
     * is equal to the object.
     *
     * @param \Spatie\SchemaOrg\Contracts\QualitativeValueContract|\Spatie\SchemaOrg\Contracts\QualitativeValueContract[] $equal
     *
     * @return static
     *
     * @see http://schema.org/equal
     */
    public function equal($equal)
    {
        return $this->setProperty('equal', $equal);
    }

    /**
     * This ordering relation for qualitative values indicates that the subject
     * is greater than the object.
     *
     * @param \Spatie\SchemaOrg\Contracts\QualitativeValueContract|\Spatie\SchemaOrg\Contracts\QualitativeValueContract[] $greater
     *
     * @return static
     *
     * @see http://schema.org/greater
     */
    public function greater($greater)
    {
        return $this->setProperty('greater', $greater);
    }

    /**
     * This ordering relation for qualitative values indicates that the subject
     * is greater than or equal to the object.
     *
     * @param \Spatie\SchemaOrg\Contracts\QualitativeValueContract|\Spatie\SchemaOrg\Contracts\QualitativeValueContract[] $greaterOrEqual
     *
     * @return static
     *
     * @see http://schema.org/greaterOrEqual
     */
    public function greaterOrEqual($greaterOrEqual)
    {
        return $this->setProperty('greaterOrEqual', $greaterOrEqual);
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
     * @param \Spatie\SchemaOrg\Contracts\ImageObjectContract|\Spatie\SchemaOrg\Contracts\ImageObjectContract[]|string|string[] $image
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
     * This ordering relation for qualitative values indicates that the subject
     * is lesser than the object.
     *
     * @param \Spatie\SchemaOrg\Contracts\QualitativeValueContract|\Spatie\SchemaOrg\Contracts\QualitativeValueContract[] $lesser
     *
     * @return static
     *
     * @see http://schema.org/lesser
     */
    public function lesser($lesser)
    {
        return $this->setProperty('lesser', $lesser);
    }

    /**
     * This ordering relation for qualitative values indicates that the subject
     * is lesser than or equal to the object.
     *
     * @param \Spatie\SchemaOrg\Contracts\QualitativeValueContract|\Spatie\SchemaOrg\Contracts\QualitativeValueContract[] $lesserOrEqual
     *
     * @return static
     *
     * @see http://schema.org/lesserOrEqual
     */
    public function lesserOrEqual($lesserOrEqual)
    {
        return $this->setProperty('lesserOrEqual', $lesserOrEqual);
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
     * This ordering relation for qualitative values indicates that the subject
     * is not equal to the object.
     *
     * @param \Spatie\SchemaOrg\Contracts\QualitativeValueContract|\Spatie\SchemaOrg\Contracts\QualitativeValueContract[] $nonEqual
     *
     * @return static
     *
     * @see http://schema.org/nonEqual
     */
    public function nonEqual($nonEqual)
    {
        return $this->setProperty('nonEqual', $nonEqual);
    }

    /**
     * Indicates a potential Action, which describes an idealized action in
     * which this thing would play an 'object' role.
     *
     * @param \Spatie\SchemaOrg\Contracts\ActionContract|\Spatie\SchemaOrg\Contracts\ActionContract[] $potentialAction
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
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|\Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $subjectOf
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
     * A pointer to a secondary value that provides additional information on
     * the original value, e.g. a reference temperature.
     *
     * @param \Spatie\SchemaOrg\Contracts\EnumerationContract|\Spatie\SchemaOrg\Contracts\EnumerationContract[]|\Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[]|\Spatie\SchemaOrg\Contracts\QualitativeValueContract|\Spatie\SchemaOrg\Contracts\QualitativeValueContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[]|\Spatie\SchemaOrg\Contracts\StructuredValueContract|\Spatie\SchemaOrg\Contracts\StructuredValueContract[] $valueReference
     *
     * @return static
     *
     * @see http://schema.org/valueReference
     */
    public function valueReference($valueReference)
    {
        return $this->setProperty('valueReference', $valueReference);
    }

}
