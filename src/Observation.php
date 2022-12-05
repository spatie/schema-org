<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\ObservationContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Instances of the class [[Observation]] are used to specify observations about
 * an entity (which may or may not be an instance of a
 * [[StatisticalPopulation]]), at a particular time. The principal properties of
 * an [[Observation]] are [[observedNode]], [[measuredProperty]],
 * [[measuredValue]] (or [[median]], etc.) and [[observationDate]]
 * ([[measuredProperty]] properties can, but need not always, be W3C RDF Data
 * Cube "measure properties", as in the [lifeExpectancy
 * example](https://www.w3.org/TR/vocab-data-cube/#dsd-example)).
 * See also [[StatisticalPopulation]], and the [data and
 * datasets](/docs/data-and-datasets.html) overview for more details.
 *
 * @see https://schema.org/Observation
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2291
 *
 * @method static measuredValue($measuredValue) The value should be instance of pending types DataType|DataType[]
 */
class Observation extends BaseType implements ObservationContract, IntangibleContract, ThingContract
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
     * A marginOfError for an [[Observation]].
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $marginOfError
     *
     * @return static
     *
     * @see https://schema.org/marginOfError
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2291
     */
    public function marginOfError($marginOfError)
    {
        return $this->setProperty('marginOfError', $marginOfError);
    }

    /**
     * The measuredProperty of an [[Observation]], either a schema.org property,
     * a property from other RDF-compatible systems, e.g. W3C RDF Data Cube, or
     * schema.org extensions such as
     * [GS1's](https://www.gs1.org/voc/?show=properties).
     *
     * @param \Spatie\SchemaOrg\Contracts\PropertyContract|\Spatie\SchemaOrg\Contracts\PropertyContract[] $measuredProperty
     *
     * @return static
     *
     * @see https://schema.org/measuredProperty
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2291
     */
    public function measuredProperty($measuredProperty)
    {
        return $this->setProperty('measuredProperty', $measuredProperty);
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
     * The observationDate of an [[Observation]].
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $observationDate
     *
     * @return static
     *
     * @see https://schema.org/observationDate
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2291
     */
    public function observationDate($observationDate)
    {
        return $this->setProperty('observationDate', $observationDate);
    }

    /**
     * The observedNode of an [[Observation]], often a
     * [[StatisticalPopulation]].
     *
     * @param \Spatie\SchemaOrg\Contracts\StatisticalPopulationContract|\Spatie\SchemaOrg\Contracts\StatisticalPopulationContract[] $observedNode
     *
     * @return static
     *
     * @see https://schema.org/observedNode
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2291
     */
    public function observedNode($observedNode)
    {
        return $this->setProperty('observedNode', $observedNode);
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
