<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\DrugPregnancyCategoryContract;
use Spatie\SchemaOrg\Contracts\EnumerationContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\MedicalEnumerationContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Categories that represent an assessment of the risk of fetal injury due to a
 * drug or pharmaceutical used as directed by the mother during pregnancy.
 *
 * @see https://schema.org/DrugPregnancyCategory
 * @see https://health-lifesci.schema.org
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class DrugPregnancyCategory extends BaseType implements DrugPregnancyCategoryContract, EnumerationContract, IntangibleContract, MedicalEnumerationContract, ThingContract
{
    /**
     * A designation by the US FDA signifying that adequate and well-controlled
     * studies have failed to demonstrate a risk to the fetus in the first
     * trimester of pregnancy (and there is no evidence of risk in later
     * trimesters).
     *
     * @see https://schema.org/FDAcategoryA
     * @see https://health-lifesci.schema.org
     */
    public const FDAcategoryA = 'https://schema.org/FDAcategoryA';

    /**
     * A designation by the US FDA signifying that animal reproduction studies
     * have failed to demonstrate a risk to the fetus and there are no adequate
     * and well-controlled studies in pregnant women.
     *
     * @see https://schema.org/FDAcategoryB
     * @see https://health-lifesci.schema.org
     */
    public const FDAcategoryB = 'https://schema.org/FDAcategoryB';

    /**
     * A designation by the US FDA signifying that animal reproduction studies
     * have shown an adverse effect on the fetus and there are no adequate and
     * well-controlled studies in humans, but potential benefits may warrant use
     * of the drug in pregnant women despite potential risks.
     *
     * @see https://schema.org/FDAcategoryC
     * @see https://health-lifesci.schema.org
     */
    public const FDAcategoryC = 'https://schema.org/FDAcategoryC';

    /**
     * A designation by the US FDA signifying that there is positive evidence of
     * human fetal risk based on adverse reaction data from investigational or
     * marketing experience or studies in humans, but potential benefits may
     * warrant use of the drug in pregnant women despite potential risks.
     *
     * @see https://schema.org/FDAcategoryD
     * @see https://health-lifesci.schema.org
     */
    public const FDAcategoryD = 'https://schema.org/FDAcategoryD';

    /**
     * A designation by the US FDA signifying that studies in animals or humans
     * have demonstrated fetal abnormalities and/or there is positive evidence
     * of human fetal risk based on adverse reaction data from investigational
     * or marketing experience, and the risks involved in use of the drug in
     * pregnant women clearly outweigh potential benefits.
     *
     * @see https://schema.org/FDAcategoryX
     * @see https://health-lifesci.schema.org
     */
    public const FDAcategoryX = 'https://schema.org/FDAcategoryX';

    /**
     * A designation that the drug in question has not been assigned a pregnancy
     * category designation by the US FDA.
     *
     * @see https://schema.org/FDAnotEvaluated
     * @see https://health-lifesci.schema.org
     */
    public const FDAnotEvaluated = 'https://schema.org/FDAnotEvaluated';

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
