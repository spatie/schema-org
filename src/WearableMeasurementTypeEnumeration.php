<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\EnumerationContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\MeasurementTypeEnumerationContract;
use Spatie\SchemaOrg\Contracts\ThingContract;
use Spatie\SchemaOrg\Contracts\WearableMeasurementTypeEnumerationContract;

/**
 * Enumerates common types of measurement for wearables products.
 *
 * @see https://schema.org/WearableMeasurementTypeEnumeration
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2811
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class WearableMeasurementTypeEnumeration extends BaseType implements WearableMeasurementTypeEnumerationContract, EnumerationContract, IntangibleContract, MeasurementTypeEnumerationContract, ThingContract
{
    /**
     * Measurement of the back section, for example of a jacket
     *
     * @see https://schema.org/WearableMeasurementBack
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public const WearableMeasurementBack = 'https://schema.org/WearableMeasurementBack';

    /**
     * Measurement of the chest/bust section, for example of a suit
     *
     * @see https://schema.org/WearableMeasurementChestOrBust
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public const WearableMeasurementChestOrBust = 'https://schema.org/WearableMeasurementChestOrBust';

    /**
     * Measurement of the collar, for example of a shirt
     *
     * @see https://schema.org/WearableMeasurementCollar
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public const WearableMeasurementCollar = 'https://schema.org/WearableMeasurementCollar';

    /**
     * Measurement of the cup, for example of a bra
     *
     * @see https://schema.org/WearableMeasurementCup
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public const WearableMeasurementCup = 'https://schema.org/WearableMeasurementCup';

    /**
     * Measurement of the height, for example the heel height of a shoe
     *
     * @see https://schema.org/WearableMeasurementHeight
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public const WearableMeasurementHeight = 'https://schema.org/WearableMeasurementHeight';

    /**
     * Measurement of the hip section, for example of a skirt
     *
     * @see https://schema.org/WearableMeasurementHips
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public const WearableMeasurementHips = 'https://schema.org/WearableMeasurementHips';

    /**
     * Measurement of the inseam, for example of pants
     *
     * @see https://schema.org/WearableMeasurementInseam
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public const WearableMeasurementInseam = 'https://schema.org/WearableMeasurementInseam';

    /**
     * Represents the length, for example of a dress
     *
     * @see https://schema.org/WearableMeasurementLength
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public const WearableMeasurementLength = 'https://schema.org/WearableMeasurementLength';

    /**
     * Measurement of the outside leg, for example of pants
     *
     * @see https://schema.org/WearableMeasurementOutsideLeg
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public const WearableMeasurementOutsideLeg = 'https://schema.org/WearableMeasurementOutsideLeg';

    /**
     * Measurement of the sleeve length, for example of a shirt
     *
     * @see https://schema.org/WearableMeasurementSleeve
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public const WearableMeasurementSleeve = 'https://schema.org/WearableMeasurementSleeve';

    /**
     * Measurement of the waist section, for example of pants
     *
     * @see https://schema.org/WearableMeasurementWaist
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public const WearableMeasurementWaist = 'https://schema.org/WearableMeasurementWaist';

    /**
     * Measurement of the width, for example of shoes
     *
     * @see https://schema.org/WearableMeasurementWidth
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public const WearableMeasurementWidth = 'https://schema.org/WearableMeasurementWidth';

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
