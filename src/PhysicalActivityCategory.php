<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\EnumerationContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\PhysicalActivityCategoryContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Categories of physical activity, organized by physiologic classification.
 *
 * @see https://schema.org/PhysicalActivityCategory
 * @see https://health-lifesci.schema.org
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class PhysicalActivityCategory extends BaseType implements PhysicalActivityCategoryContract, EnumerationContract, IntangibleContract, ThingContract
{
    /**
     * Physical activity of relatively low intensity that depends primarily on
     * the aerobic energy-generating process; during activity, the aerobic
     * metabolism uses oxygen to adequately meet energy demands during exercise.
     *
     * @see https://schema.org/AerobicActivity
     * @see https://health-lifesci.schema.org
     */
    public const AerobicActivity = 'https://schema.org/AerobicActivity';

    /**
     * Physical activity that is of high-intensity which utilizes the anaerobic
     * metabolism of the body.
     *
     * @see https://schema.org/AnaerobicActivity
     * @see https://health-lifesci.schema.org
     */
    public const AnaerobicActivity = 'https://schema.org/AnaerobicActivity';

    /**
     * Physical activity that is engaged to help maintain posture and balance.
     *
     * @see https://schema.org/Balance
     * @see https://health-lifesci.schema.org
     */
    public const Balance = 'https://schema.org/Balance';

    /**
     * Physical activity that is engaged in to improve joint and muscle
     * flexibility.
     *
     * @see https://schema.org/Flexibility
     * @see https://health-lifesci.schema.org
     */
    public const Flexibility = 'https://schema.org/Flexibility';

    /**
     * Any physical activity engaged in for recreational purposes. Examples may
     * include ballroom dancing, roller skating, canoeing, fishing, etc.
     *
     * @see https://schema.org/LeisureTimeActivity
     * @see https://health-lifesci.schema.org
     */
    public const LeisureTimeActivity = 'https://schema.org/LeisureTimeActivity';

    /**
     * Any physical activity engaged in for job-related purposes. Examples may
     * include waiting tables, maid service, carrying a mailbag, picking fruits
     * or vegetables, construction work, etc.
     *
     * @see https://schema.org/OccupationalActivity
     * @see https://health-lifesci.schema.org
     */
    public const OccupationalActivity = 'https://schema.org/OccupationalActivity';

    /**
     * Physical activity that is engaged in to improve muscle and bone strength.
     * Also referred to as resistance training.
     *
     * @see https://schema.org/StrengthTraining
     * @see https://health-lifesci.schema.org
     */
    public const StrengthTraining = 'https://schema.org/StrengthTraining';

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
