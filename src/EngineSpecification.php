<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\EngineSpecificationContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\StructuredValueContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Information about the engine of the vehicle. A vehicle can have multiple
 * engines represented by multiple engine specification entities.
 *
 * @see https://schema.org/EngineSpecification
 *
 */
class EngineSpecification extends BaseType implements EngineSpecificationContract, IntangibleContract, StructuredValueContract, ThingContract
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
     * The volume swept by all of the pistons inside the cylinders of an
     * internal combustion engine in a single movement.
     *
     * Typical unit code(s): CMQ for cubic centimeter, LTR for liters, INQ for
     * cubic inches
     * * Note 1: You can link to information about how the given value has been
     * determined using the [[valueReference]] property.
     * * Note 2: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $engineDisplacement
     *
     * @return static
     *
     * @see https://schema.org/engineDisplacement
     * @see https://auto.schema.org
     */
    public function engineDisplacement($engineDisplacement)
    {
        return $this->setProperty('engineDisplacement', $engineDisplacement);
    }

    /**
     * The power of the vehicle's engine.
     *     Typical unit code(s): KWT for kilowatt, BHP for brake horsepower, N12
     * for metric horsepower (PS, with 1 PS = 735,49875 W)
     *
     * * Note 1: There are many different ways of measuring an engine's power.
     * For an overview, see
     * [http://en.wikipedia.org/wiki/Horsepower#Engine\_power\_test\_codes](http://en.wikipedia.org/wiki/Horsepower#Engine_power_test_codes).
     * * Note 2: You can link to information about how the given value has been
     * determined using the [[valueReference]] property.
     * * Note 3: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $enginePower
     *
     * @return static
     *
     * @see https://schema.org/enginePower
     * @see https://auto.schema.org
     */
    public function enginePower($enginePower)
    {
        return $this->setProperty('enginePower', $enginePower);
    }

    /**
     * The type of engine or engines powering the vehicle.
     *
     * @param \Spatie\SchemaOrg\Contracts\QualitativeValueContract|\Spatie\SchemaOrg\Contracts\QualitativeValueContract[]|string|string[] $engineType
     *
     * @return static
     *
     * @see https://schema.org/engineType
     * @see https://auto.schema.org
     */
    public function engineType($engineType)
    {
        return $this->setProperty('engineType', $engineType);
    }

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If
     * the vehicle has only one engine, this property can be attached directly
     * to the vehicle.
     *
     * @param \Spatie\SchemaOrg\Contracts\QualitativeValueContract|\Spatie\SchemaOrg\Contracts\QualitativeValueContract[]|string|string[] $fuelType
     *
     * @return static
     *
     * @see https://schema.org/fuelType
     */
    public function fuelType($fuelType)
    {
        return $this->setProperty('fuelType', $fuelType);
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
     * The torque (turning force) of the vehicle's engine.
     *
     * Typical unit code(s): NU for newton metre (N m), F17 for pound-force per
     * foot, or F48 for pound-force per inch
     *
     * * Note 1: You can link to information about how the given value has been
     * determined (e.g. reference RPM) using the [[valueReference]] property.
     * * Note 2: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $torque
     *
     * @return static
     *
     * @see https://schema.org/torque
     * @see https://auto.schema.org
     */
    public function torque($torque)
    {
        return $this->setProperty('torque', $torque);
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
