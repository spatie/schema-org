<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\EnumerationContract;
use Spatie\SchemaOrg\Contracts\HealthAspectEnumerationContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * HealthAspectEnumeration enumerates several aspects of health content online,
 * each of which might be described using [[hasHealthAspect]] and
 * [[HealthTopicContent]].
 *
 * @see https://schema.org/HealthAspectEnumeration
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2374
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class HealthAspectEnumeration extends BaseType implements HealthAspectEnumerationContract, EnumerationContract, IntangibleContract, ThingContract
{
    /**
     * Content about the allergy-related aspects of a health topic.
     *
     * @see https://schema.org/AllergiesHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2799
     */
    public const AllergiesHealthAspect = 'https://schema.org/AllergiesHealthAspect';

    /**
     * Content about the benefits and advantages of usage or utilization of
     * topic.
     *
     * @see https://schema.org/BenefitsHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const BenefitsHealthAspect = 'https://schema.org/BenefitsHealthAspect';

    /**
     * Information about the causes and main actions that gave rise to the
     * topic.
     *
     * @see https://schema.org/CausesHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const CausesHealthAspect = 'https://schema.org/CausesHealthAspect';

    /**
     * Content about contagion mechanisms and contagiousness information over
     * the topic.
     *
     * @see https://schema.org/ContagiousnessHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const ContagiousnessHealthAspect = 'https://schema.org/ContagiousnessHealthAspect';

    /**
     * Content about the effectiveness-related aspects of a health topic.
     *
     * @see https://schema.org/EffectivenessHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2799
     */
    public const EffectivenessHealthAspect = 'https://schema.org/EffectivenessHealthAspect';

    /**
     * Content that discusses practical and policy aspects for getting access to
     * specific kinds of healthcare (e.g. distribution mechanisms for vaccines).
     *
     * @see https://schema.org/GettingAccessHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2799
     */
    public const GettingAccessHealthAspect = 'https://schema.org/GettingAccessHealthAspect';

    /**
     * Content that discusses and explains how a particular health-related topic
     * works, e.g. in terms of mechanisms and underlying science.
     *
     * @see https://schema.org/HowItWorksHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2799
     */
    public const HowItWorksHealthAspect = 'https://schema.org/HowItWorksHealthAspect';

    /**
     * Information about how or where to find a topic. Also may contain location
     * data that can be used for where to look for help if the topic is
     * observed.
     *
     * @see https://schema.org/HowOrWhereHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const HowOrWhereHealthAspect = 'https://schema.org/HowOrWhereHealthAspect';

    /**
     * Content discussing ingredients-related aspects of a health topic.
     *
     * @see https://schema.org/IngredientsHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2799
     */
    public const IngredientsHealthAspect = 'https://schema.org/IngredientsHealthAspect';

    /**
     * Information about coping or life related to the topic.
     *
     * @see https://schema.org/LivingWithHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const LivingWithHealthAspect = 'https://schema.org/LivingWithHealthAspect';

    /**
     * Related topics may be treated by a Topic.
     *
     * @see https://schema.org/MayTreatHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const MayTreatHealthAspect = 'https://schema.org/MayTreatHealthAspect';

    /**
     * Content about common misconceptions and myths that are related to a
     * topic.
     *
     * @see https://schema.org/MisconceptionsHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const MisconceptionsHealthAspect = 'https://schema.org/MisconceptionsHealthAspect';

    /**
     * Overview of the content. Contains a summarized view of the topic with the
     * most relevant information for an introduction.
     *
     * @see https://schema.org/OverviewHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const OverviewHealthAspect = 'https://schema.org/OverviewHealthAspect';

    /**
     * Content about the real life experience of patients or people that have
     * lived a similar experience about the topic. May be forums, topics,
     * Q-and-A and related material.
     *
     * @see https://schema.org/PatientExperienceHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const PatientExperienceHealthAspect = 'https://schema.org/PatientExperienceHealthAspect';

    /**
     * Content discussing pregnancy-related aspects of a health topic.
     *
     * @see https://schema.org/PregnancyHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2799
     */
    public const PregnancyHealthAspect = 'https://schema.org/PregnancyHealthAspect';

    /**
     * Information about actions or measures that can be taken to avoid getting
     * the topic or reaching a critical situation related to the topic.
     *
     * @see https://schema.org/PreventionHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const PreventionHealthAspect = 'https://schema.org/PreventionHealthAspect';

    /**
     * Typical progression and happenings of life course of the topic.
     *
     * @see https://schema.org/PrognosisHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const PrognosisHealthAspect = 'https://schema.org/PrognosisHealthAspect';

    /**
     * Other prominent or relevant topics tied to the main topic.
     *
     * @see https://schema.org/RelatedTopicsHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const RelatedTopicsHealthAspect = 'https://schema.org/RelatedTopicsHealthAspect';

    /**
     * Information about the risk factors and possible complications that may
     * follow a topic.
     *
     * @see https://schema.org/RisksOrComplicationsHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const RisksOrComplicationsHealthAspect = 'https://schema.org/RisksOrComplicationsHealthAspect';

    /**
     * Content about the safety-related aspects of a health topic.
     *
     * @see https://schema.org/SafetyHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2799
     */
    public const SafetyHealthAspect = 'https://schema.org/SafetyHealthAspect';

    /**
     * Content about how to screen or further filter a topic.
     *
     * @see https://schema.org/ScreeningHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const ScreeningHealthAspect = 'https://schema.org/ScreeningHealthAspect';

    /**
     * Information about questions that may be asked, when to see a
     * professional, measures before seeing a doctor or content about the first
     * consultation.
     *
     * @see https://schema.org/SeeDoctorHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const SeeDoctorHealthAspect = 'https://schema.org/SeeDoctorHealthAspect';

    /**
     * Self care actions or measures that can be taken to sooth, health or avoid
     * a topic. This may be carried at home and can be carried/managed by the
     * person itself.
     *
     * @see https://schema.org/SelfCareHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const SelfCareHealthAspect = 'https://schema.org/SelfCareHealthAspect';

    /**
     * Side effects that can be observed from the usage of the topic.
     *
     * @see https://schema.org/SideEffectsHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const SideEffectsHealthAspect = 'https://schema.org/SideEffectsHealthAspect';

    /**
     * Stages that can be observed from a topic.
     *
     * @see https://schema.org/StagesHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const StagesHealthAspect = 'https://schema.org/StagesHealthAspect';

    /**
     * Symptoms or related symptoms of a Topic.
     *
     * @see https://schema.org/SymptomsHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const SymptomsHealthAspect = 'https://schema.org/SymptomsHealthAspect';

    /**
     * Treatments or related therapies for a Topic.
     *
     * @see https://schema.org/TreatmentsHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const TreatmentsHealthAspect = 'https://schema.org/TreatmentsHealthAspect';

    /**
     * Categorization and other types related to a topic.
     *
     * @see https://schema.org/TypesHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const TypesHealthAspect = 'https://schema.org/TypesHealthAspect';

    /**
     * Content about how, when, frequency and dosage of a topic.
     *
     * @see https://schema.org/UsageOrScheduleHealthAspect
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2374
     */
    public const UsageOrScheduleHealthAspect = 'https://schema.org/UsageOrScheduleHealthAspect';

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
