<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\MedicalConditionContract;
use Spatie\SchemaOrg\Contracts\MedicalEntityContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Any condition of the human body that affects the normal functioning of a
 * person, whether physically or mentally. Includes diseases, injuries,
 * disabilities, disorders, syndromes, etc.
 *
 * @see https://schema.org/MedicalCondition
 * @see https://health-lifesci.schema.org
 *
 */
class MedicalCondition extends BaseType implements MedicalConditionContract, MedicalEntityContract, ThingContract
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
     * The anatomy of the underlying organ system or structures associated with
     * this entity.
     *
     * @param \Spatie\SchemaOrg\Contracts\AnatomicalStructureContract|\Spatie\SchemaOrg\Contracts\AnatomicalStructureContract[]|\Spatie\SchemaOrg\Contracts\AnatomicalSystemContract|\Spatie\SchemaOrg\Contracts\AnatomicalSystemContract[]|\Spatie\SchemaOrg\Contracts\SuperficialAnatomyContract|\Spatie\SchemaOrg\Contracts\SuperficialAnatomyContract[] $associatedAnatomy
     *
     * @return static
     *
     * @see https://schema.org/associatedAnatomy
     * @see https://health-lifesci.schema.org
     */
    public function associatedAnatomy($associatedAnatomy)
    {
        return $this->setProperty('associatedAnatomy', $associatedAnatomy);
    }

    /**
     * A medical code for the entity, taken from a controlled vocabulary or
     * ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalCodeContract|\Spatie\SchemaOrg\Contracts\MedicalCodeContract[] $code
     *
     * @return static
     *
     * @see https://schema.org/code
     * @see https://health-lifesci.schema.org
     */
    public function code($code)
    {
        return $this->setProperty('code', $code);
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
     * One of a set of differential diagnoses for the condition. Specifically, a
     * closely-related or competing diagnosis typically considered later in the
     * cognitive process whereby this medical condition is distinguished from
     * others most likely responsible for a similar collection of signs and
     * symptoms to reach the most parsimonious diagnosis or diagnoses in a
     * patient.
     *
     * @param \Spatie\SchemaOrg\Contracts\DDxElementContract|\Spatie\SchemaOrg\Contracts\DDxElementContract[] $differentialDiagnosis
     *
     * @return static
     *
     * @see https://schema.org/differentialDiagnosis
     * @see https://health-lifesci.schema.org
     */
    public function differentialDiagnosis($differentialDiagnosis)
    {
        return $this->setProperty('differentialDiagnosis', $differentialDiagnosis);
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
     * Specifying a drug or medicine used in a medication procedure.
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugContract|\Spatie\SchemaOrg\Contracts\DrugContract[] $drug
     *
     * @return static
     *
     * @see https://schema.org/drug
     * @see https://health-lifesci.schema.org
     */
    public function drug($drug)
    {
        return $this->setProperty('drug', $drug);
    }

    /**
     * The characteristics of associated patients, such as age, gender, race
     * etc.
     *
     * @param string|string[] $epidemiology
     *
     * @return static
     *
     * @see https://schema.org/epidemiology
     * @see https://health-lifesci.schema.org
     */
    public function epidemiology($epidemiology)
    {
        return $this->setProperty('epidemiology', $epidemiology);
    }

    /**
     * The likely outcome in either the short term or long term of the medical
     * condition.
     *
     * @param string|string[] $expectedPrognosis
     *
     * @return static
     *
     * @see https://schema.org/expectedPrognosis
     * @see https://health-lifesci.schema.org
     */
    public function expectedPrognosis($expectedPrognosis)
    {
        return $this->setProperty('expectedPrognosis', $expectedPrognosis);
    }

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship
     * for this item. See also [[ownershipFundingInfo]].
     *
     * @param \Spatie\SchemaOrg\Contracts\GrantContract|\Spatie\SchemaOrg\Contracts\GrantContract[] $funding
     *
     * @return static
     *
     * @see https://schema.org/funding
     * @see https://pending.schema.org
     */
    public function funding($funding)
    {
        return $this->setProperty('funding', $funding);
    }

    /**
     * A medical guideline related to this entity.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalGuidelineContract|\Spatie\SchemaOrg\Contracts\MedicalGuidelineContract[] $guideline
     *
     * @return static
     *
     * @see https://schema.org/guideline
     * @see https://health-lifesci.schema.org
     */
    public function guideline($guideline)
    {
        return $this->setProperty('guideline', $guideline);
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
     * The drug or supplement's legal status, including any controlled substance
     * schedules that apply.
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugLegalStatusContract|\Spatie\SchemaOrg\Contracts\DrugLegalStatusContract[]|\Spatie\SchemaOrg\Contracts\MedicalEnumerationContract|\Spatie\SchemaOrg\Contracts\MedicalEnumerationContract[]|string|string[] $legalStatus
     *
     * @return static
     *
     * @see https://schema.org/legalStatus
     * @see https://health-lifesci.schema.org
     */
    public function legalStatus($legalStatus)
    {
        return $this->setProperty('legalStatus', $legalStatus);
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
     * The system of medicine that includes this MedicalEntity, for example
     * 'evidence-based', 'homeopathic', 'chiropractic', etc.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicineSystemContract|\Spatie\SchemaOrg\Contracts\MedicineSystemContract[] $medicineSystem
     *
     * @return static
     *
     * @see https://schema.org/medicineSystem
     * @see https://health-lifesci.schema.org
     */
    public function medicineSystem($medicineSystem)
    {
        return $this->setProperty('medicineSystem', $medicineSystem);
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
     * The expected progression of the condition if it is not treated and
     * allowed to progress naturally.
     *
     * @param string|string[] $naturalProgression
     *
     * @return static
     *
     * @see https://schema.org/naturalProgression
     * @see https://health-lifesci.schema.org
     */
    public function naturalProgression($naturalProgression)
    {
        return $this->setProperty('naturalProgression', $naturalProgression);
    }

    /**
     * Changes in the normal mechanical, physical, and biochemical functions
     * that are associated with this activity or condition.
     *
     * @param string|string[] $pathophysiology
     *
     * @return static
     *
     * @see https://schema.org/pathophysiology
     * @see https://health-lifesci.schema.org
     */
    public function pathophysiology($pathophysiology)
    {
        return $this->setProperty('pathophysiology', $pathophysiology);
    }

    /**
     * A possible unexpected and unfavorable evolution of a medical condition.
     * Complications may include worsening of the signs or symptoms of the
     * disease, extension of the condition to other organ systems, etc.
     *
     * @param string|string[] $possibleComplication
     *
     * @return static
     *
     * @see https://schema.org/possibleComplication
     * @see https://health-lifesci.schema.org
     */
    public function possibleComplication($possibleComplication)
    {
        return $this->setProperty('possibleComplication', $possibleComplication);
    }

    /**
     * A possible treatment to address this condition, sign or symptom.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalTherapyContract|\Spatie\SchemaOrg\Contracts\MedicalTherapyContract[] $possibleTreatment
     *
     * @return static
     *
     * @see https://schema.org/possibleTreatment
     * @see https://health-lifesci.schema.org
     */
    public function possibleTreatment($possibleTreatment)
    {
        return $this->setProperty('possibleTreatment', $possibleTreatment);
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
     * A preventative therapy used to prevent an initial occurrence of the
     * medical condition, such as vaccination.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalTherapyContract|\Spatie\SchemaOrg\Contracts\MedicalTherapyContract[] $primaryPrevention
     *
     * @return static
     *
     * @see https://schema.org/primaryPrevention
     * @see https://health-lifesci.schema.org
     */
    public function primaryPrevention($primaryPrevention)
    {
        return $this->setProperty('primaryPrevention', $primaryPrevention);
    }

    /**
     * If applicable, the organization that officially recognizes this entity as
     * part of its endorsed system of medicine.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $recognizingAuthority
     *
     * @return static
     *
     * @see https://schema.org/recognizingAuthority
     * @see https://health-lifesci.schema.org
     */
    public function recognizingAuthority($recognizingAuthority)
    {
        return $this->setProperty('recognizingAuthority', $recognizingAuthority);
    }

    /**
     * If applicable, a medical specialty in which this entity is relevant.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalSpecialtyContract|\Spatie\SchemaOrg\Contracts\MedicalSpecialtyContract[] $relevantSpecialty
     *
     * @return static
     *
     * @see https://schema.org/relevantSpecialty
     * @see https://health-lifesci.schema.org
     */
    public function relevantSpecialty($relevantSpecialty)
    {
        return $this->setProperty('relevantSpecialty', $relevantSpecialty);
    }

    /**
     * A modifiable or non-modifiable factor that increases the risk of a
     * patient contracting this condition, e.g. age,  coexisting condition.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalRiskFactorContract|\Spatie\SchemaOrg\Contracts\MedicalRiskFactorContract[] $riskFactor
     *
     * @return static
     *
     * @see https://schema.org/riskFactor
     * @see https://health-lifesci.schema.org
     */
    public function riskFactor($riskFactor)
    {
        return $this->setProperty('riskFactor', $riskFactor);
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
     * A preventative therapy used to prevent reoccurrence of the medical
     * condition after an initial episode of the condition.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalTherapyContract|\Spatie\SchemaOrg\Contracts\MedicalTherapyContract[] $secondaryPrevention
     *
     * @return static
     *
     * @see https://schema.org/secondaryPrevention
     * @see https://health-lifesci.schema.org
     */
    public function secondaryPrevention($secondaryPrevention)
    {
        return $this->setProperty('secondaryPrevention', $secondaryPrevention);
    }

    /**
     * A sign or symptom of this condition. Signs are objective or physically
     * observable manifestations of the medical condition while symptoms are the
     * subjective experience of the medical condition.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalSignOrSymptomContract|\Spatie\SchemaOrg\Contracts\MedicalSignOrSymptomContract[] $signOrSymptom
     *
     * @return static
     *
     * @see https://schema.org/signOrSymptom
     * @see https://health-lifesci.schema.org
     */
    public function signOrSymptom($signOrSymptom)
    {
        return $this->setProperty('signOrSymptom', $signOrSymptom);
    }

    /**
     * The stage of the condition, if applicable.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalConditionStageContract|\Spatie\SchemaOrg\Contracts\MedicalConditionStageContract[] $stage
     *
     * @return static
     *
     * @see https://schema.org/stage
     * @see https://health-lifesci.schema.org
     */
    public function stage($stage)
    {
        return $this->setProperty('stage', $stage);
    }

    /**
     * The status of the study (enumerated).
     *
     * @param \Spatie\SchemaOrg\Contracts\EventStatusTypeContract|\Spatie\SchemaOrg\Contracts\EventStatusTypeContract[]|\Spatie\SchemaOrg\Contracts\MedicalStudyStatusContract|\Spatie\SchemaOrg\Contracts\MedicalStudyStatusContract[]|string|string[] $status
     *
     * @return static
     *
     * @see https://schema.org/status
     * @see https://health-lifesci.schema.org
     */
    public function status($status)
    {
        return $this->setProperty('status', $status);
    }

    /**
     * A medical study or trial related to this entity.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalStudyContract|\Spatie\SchemaOrg\Contracts\MedicalStudyContract[] $study
     *
     * @return static
     *
     * @see https://schema.org/study
     * @see https://health-lifesci.schema.org
     */
    public function study($study)
    {
        return $this->setProperty('study', $study);
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
     * A medical test typically performed given this condition.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalTestContract|\Spatie\SchemaOrg\Contracts\MedicalTestContract[] $typicalTest
     *
     * @return static
     *
     * @see https://schema.org/typicalTest
     * @see https://health-lifesci.schema.org
     */
    public function typicalTest($typicalTest)
    {
        return $this->setProperty('typicalTest', $typicalTest);
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
