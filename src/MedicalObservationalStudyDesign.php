<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\EnumerationContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\MedicalEnumerationContract;
use Spatie\SchemaOrg\Contracts\MedicalObservationalStudyDesignContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Design models for observational medical studies. Enumerated type.
 *
 * @see https://schema.org/MedicalObservationalStudyDesign
 * @see https://health-lifesci.schema.org
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class MedicalObservationalStudyDesign extends BaseType implements MedicalObservationalStudyDesignContract, EnumerationContract, IntangibleContract, MedicalEnumerationContract, ThingContract
{
    /**
     * A case series (also known as a clinical series) is a medical research
     * study that tracks patients with a known exposure given similar treatment
     * or examines their medical records for exposure and outcome. A case series
     * can be retrospective or prospective and usually involves a smaller number
     * of patients than the more powerful case-control studies or randomized
     * controlled trials. Case series may be consecutive or non-consecutive,
     * depending on whether all cases presenting to the reporting authors over a
     * period of time were included, or only a selection.
     *
     * @see https://schema.org/CaseSeries
     * @see https://health-lifesci.schema.org
     */
    public const CaseSeries = 'https://schema.org/CaseSeries';

    /**
     * Also known as a panel study. A cohort study is a form of longitudinal
     * study used in medicine and social science. It is one type of study design
     * and should be compared with a cross-sectional study.  A cohort is a group
     * of people who share a common characteristic or experience within a
     * defined period (e.g., are born, leave school, lose their job, are exposed
     * to a drug or a vaccine, etc.). The comparison group may be the general
     * population from which the cohort is drawn, or it may be another cohort of
     * persons thought to have had little or no exposure to the substance under
     * investigation, but otherwise similar. Alternatively, subgroups within the
     * cohort may be compared with each other.
     *
     * @see https://schema.org/CohortStudy
     * @see https://health-lifesci.schema.org
     */
    public const CohortStudy = 'https://schema.org/CohortStudy';

    /**
     * Studies carried out on pre-existing data (usually from 'snapshot'
     * surveys), such as that collected by the Census Bureau. Sometimes called
     * Prevalence Studies.
     *
     * @see https://schema.org/CrossSectional
     * @see https://health-lifesci.schema.org
     */
    public const CrossSectional = 'https://schema.org/CrossSectional';

    /**
     * Unlike cross-sectional studies, longitudinal studies track the same
     * people, and therefore the differences observed in those people are less
     * likely to be the result of cultural differences across generations.
     * Longitudinal studies are also used in medicine to uncover predictors of
     * certain diseases.
     *
     * @see https://schema.org/Longitudinal
     * @see https://health-lifesci.schema.org
     */
    public const Longitudinal = 'https://schema.org/Longitudinal';

    /**
     * An observational study design.
     *
     * @see https://schema.org/Observational
     * @see https://health-lifesci.schema.org
     */
    public const Observational = 'https://schema.org/Observational';

    /**
     * A registry-based study design.
     *
     * @see https://schema.org/Registry
     * @see https://health-lifesci.schema.org
     */
    public const Registry = 'https://schema.org/Registry';

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
