<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\EnumerationContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\QualitativeValueContract;
use Spatie\SchemaOrg\Contracts\SizeSpecificationContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Size related properties of a product, typically a size code ([[name]]) and
 * optionally a [[sizeSystem]], [[sizeGroup]], and product measurements
 * ([[hasMeasurement]]). In addition, the intended audience can be defined
 * through [[suggestedAge]], [[suggestedGender]], and suggested body
 * measurements ([[suggestedMeasurement]]).
 *
 * @see https://schema.org/SizeSpecification
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2811
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class SizeSpecification extends BaseType implements SizeSpecificationContract, EnumerationContract, IntangibleContract, QualitativeValueContract, ThingContract
{
    /**
     * A property-value pair representing an additional characteristic of the
     * entity, e.g. a product feature or another characteristic for which there
     * is no matching property in schema.org.
     *
     * Note: Publishers should be aware that applications designed to use
     * specific schema.org properties (e.g. https://schema.org/width,
     * https://schema.org/color, https://schema.org/gtin13, ...) will typically
     * expect such data to be provided using those properties, rather than using
     * the generic property/value mechanism.
     *
     * @param \Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[] $additionalProperty
     *
     * @return static
     *
     * @see https://schema.org/additionalProperty
     */
    public function additionalProperty($additionalProperty)
    {
        return $this->setProperty('additionalProperty', $additionalProperty);
    }

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
     * This ordering relation for qualitative values indicates that the subject
     * is equal to the object.
     *
     * @param \Spatie\SchemaOrg\Contracts\QualitativeValueContract|\Spatie\SchemaOrg\Contracts\QualitativeValueContract[] $equal
     *
     * @return static
     *
     * @see https://schema.org/equal
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
     * @see https://schema.org/greater
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
     * @see https://schema.org/greaterOrEqual
     */
    public function greaterOrEqual($greaterOrEqual)
    {
        return $this->setProperty('greaterOrEqual', $greaterOrEqual);
    }

    /**
     * A product measurement, for example the inseam of pants, the wheel size of
     * a bicycle, or the gauge of a screw. Usually an exact measurement, but can
     * also be a range of measurements for adjustable products, for example
     * belts and ski bindings.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $hasMeasurement
     *
     * @return static
     *
     * @see https://schema.org/hasMeasurement
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public function hasMeasurement($hasMeasurement)
    {
        return $this->setProperty('hasMeasurement', $hasMeasurement);
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
     * This ordering relation for qualitative values indicates that the subject
     * is lesser than the object.
     *
     * @param \Spatie\SchemaOrg\Contracts\QualitativeValueContract|\Spatie\SchemaOrg\Contracts\QualitativeValueContract[] $lesser
     *
     * @return static
     *
     * @see https://schema.org/lesser
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
     * @see https://schema.org/lesserOrEqual
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
     * This ordering relation for qualitative values indicates that the subject
     * is not equal to the object.
     *
     * @param \Spatie\SchemaOrg\Contracts\QualitativeValueContract|\Spatie\SchemaOrg\Contracts\QualitativeValueContract[] $nonEqual
     *
     * @return static
     *
     * @see https://schema.org/nonEqual
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
     * The size group (also known as "size type") for a product's size. Size
     * groups are common in the fashion industry to define size segments and
     * suggested audiences for wearable products. Multiple values can be
     * combined, for example "men's big and tall", "petite maternity" or
     * "regular".
     *
     * @param \Spatie\SchemaOrg\Contracts\SizeGroupEnumerationContract|\Spatie\SchemaOrg\Contracts\SizeGroupEnumerationContract[]|string|string[] $sizeGroup
     *
     * @return static
     *
     * @see https://schema.org/sizeGroup
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public function sizeGroup($sizeGroup)
    {
        return $this->setProperty('sizeGroup', $sizeGroup);
    }

    /**
     * The size system used to identify a product's size. Typically either a
     * standard (for example, "GS1" or "ISO-EN13402"), country code (for example
     * "US" or "JP"), or a measuring system (for example "Metric" or
     * "Imperial").
     *
     * @param \Spatie\SchemaOrg\Contracts\SizeSystemEnumerationContract|\Spatie\SchemaOrg\Contracts\SizeSystemEnumerationContract[]|string|string[] $sizeSystem
     *
     * @return static
     *
     * @see https://schema.org/sizeSystem
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public function sizeSystem($sizeSystem)
    {
        return $this->setProperty('sizeSystem', $sizeSystem);
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
     * The age or age range for the intended audience or person, for example
     * 3-12 months for infants, 1-5 years for toddlers.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $suggestedAge
     *
     * @return static
     *
     * @see https://schema.org/suggestedAge
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public function suggestedAge($suggestedAge)
    {
        return $this->setProperty('suggestedAge', $suggestedAge);
    }

    /**
     * The suggested gender of the intended person or audience, for example
     * "male", "female", or "unisex".
     *
     * @param \Spatie\SchemaOrg\Contracts\GenderTypeContract|\Spatie\SchemaOrg\Contracts\GenderTypeContract[]|string|string[] $suggestedGender
     *
     * @return static
     *
     * @see https://schema.org/suggestedGender
     */
    public function suggestedGender($suggestedGender)
    {
        return $this->setProperty('suggestedGender', $suggestedGender);
    }

    /**
     * A suggested range of body measurements for the intended audience or
     * person, for example inseam between 32 and 34 inches or height between 170
     * and 190 cm. Typically found on a size chart for wearable products.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $suggestedMeasurement
     *
     * @return static
     *
     * @see https://schema.org/suggestedMeasurement
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public function suggestedMeasurement($suggestedMeasurement)
    {
        return $this->setProperty('suggestedMeasurement', $suggestedMeasurement);
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
     * A secondary value that provides additional information on the original
     * value, e.g. a reference temperature or a type of measurement.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|\Spatie\SchemaOrg\Contracts\EnumerationContract|\Spatie\SchemaOrg\Contracts\EnumerationContract[]|\Spatie\SchemaOrg\Contracts\MeasurementTypeEnumerationContract|\Spatie\SchemaOrg\Contracts\MeasurementTypeEnumerationContract[]|\Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[]|\Spatie\SchemaOrg\Contracts\QualitativeValueContract|\Spatie\SchemaOrg\Contracts\QualitativeValueContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[]|\Spatie\SchemaOrg\Contracts\StructuredValueContract|\Spatie\SchemaOrg\Contracts\StructuredValueContract[]|string|string[] $valueReference
     *
     * @return static
     *
     * @see https://schema.org/valueReference
     */
    public function valueReference($valueReference)
    {
        return $this->setProperty('valueReference', $valueReference);
    }
}
