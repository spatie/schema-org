<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\DrugContract;
use \Spatie\SchemaOrg\Contracts\MedicalEntityContract;
use \Spatie\SchemaOrg\Contracts\SubstanceContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A chemical or biologic substance, used as a medical therapy, that has a
 * physiological effect on an organism. Here the term drug is used
 * interchangeably with the term medicine although clinical knowledge make a
 * clear difference between them.
 *
 * @see https://schema.org/Drug
 * @see http://health-lifesci.schema.org
 *
 */
class Drug extends BaseType implements DrugContract, MedicalEntityContract, SubstanceContract, ThingContract
{
    /**
     * An active ingredient, typically chemical compounds and/or biologic
     * substances.
     *
     * @param string|string[] $activeIngredient
     *
     * @return static
     *
     * @see https://schema.org/activeIngredient
     * @see http://health-lifesci.schema.org
     */
    public function activeIngredient($activeIngredient)
    {
        return $this->setProperty('activeIngredient', $activeIngredient);
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
     * @see https://schema.org/additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * A route by which this drug may be administered, e.g. 'oral'.
     *
     * @param string|string[] $administrationRoute
     *
     * @return static
     *
     * @see https://schema.org/administrationRoute
     * @see http://health-lifesci.schema.org
     */
    public function administrationRoute($administrationRoute)
    {
        return $this->setProperty('administrationRoute', $administrationRoute);
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption
     * of alcohol while taking this drug.
     *
     * @param string|string[] $alcoholWarning
     *
     * @return static
     *
     * @see https://schema.org/alcoholWarning
     * @see http://health-lifesci.schema.org
     */
    public function alcoholWarning($alcoholWarning)
    {
        return $this->setProperty('alcoholWarning', $alcoholWarning);
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
     * An available dosage strength for the drug.
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugStrengthContract|\Spatie\SchemaOrg\Contracts\DrugStrengthContract[] $availableStrength
     *
     * @return static
     *
     * @see https://schema.org/availableStrength
     * @see http://health-lifesci.schema.org
     */
    public function availableStrength($availableStrength)
    {
        return $this->setProperty('availableStrength', $availableStrength);
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's
     * use by breastfeeding mothers.
     *
     * @param string|string[] $breastfeedingWarning
     *
     * @return static
     *
     * @see https://schema.org/breastfeedingWarning
     * @see http://health-lifesci.schema.org
     */
    public function breastfeedingWarning($breastfeedingWarning)
    {
        return $this->setProperty('breastfeedingWarning', $breastfeedingWarning);
    }

    /**
     * Description of the absorption and elimination of drugs, including their
     * concentration (pharmacokinetics, pK) and biological effects
     * (pharmacodynamics, pD).
     *
     * @param string|string[] $clincalPharmacology
     *
     * @return static
     *
     * @see https://schema.org/clincalPharmacology
     * @see http://health-lifesci.schema.org
     */
    public function clincalPharmacology($clincalPharmacology)
    {
        return $this->setProperty('clincalPharmacology', $clincalPharmacology);
    }

    /**
     * Description of the absorption and elimination of drugs, including their
     * concentration (pharmacokinetics, pK) and biological effects
     * (pharmacodynamics, pD).
     *
     * @param string|string[] $clinicalPharmacology
     *
     * @return static
     *
     * @see https://schema.org/clinicalPharmacology
     * @see http://health-lifesci.schema.org
     */
    public function clinicalPharmacology($clinicalPharmacology)
    {
        return $this->setProperty('clinicalPharmacology', $clinicalPharmacology);
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
     * @see http://health-lifesci.schema.org
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
     * A dosage form in which this drug/supplement is available, e.g. 'tablet',
     * 'suspension', 'injection'.
     *
     * @param string|string[] $dosageForm
     *
     * @return static
     *
     * @see https://schema.org/dosageForm
     * @see http://health-lifesci.schema.org
     */
    public function dosageForm($dosageForm)
    {
        return $this->setProperty('dosageForm', $dosageForm);
    }

    /**
     * A dosing schedule for the drug for a given population, either observed,
     * recommended, or maximum dose based on the type used.
     *
     * @param \Spatie\SchemaOrg\Contracts\DoseScheduleContract|\Spatie\SchemaOrg\Contracts\DoseScheduleContract[] $doseSchedule
     *
     * @return static
     *
     * @see https://schema.org/doseSchedule
     * @see http://health-lifesci.schema.org
     */
    public function doseSchedule($doseSchedule)
    {
        return $this->setProperty('doseSchedule', $doseSchedule);
    }

    /**
     * The class of drug this belongs to (e.g., statins).
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugClassContract|\Spatie\SchemaOrg\Contracts\DrugClassContract[] $drugClass
     *
     * @return static
     *
     * @see https://schema.org/drugClass
     * @see http://health-lifesci.schema.org
     */
    public function drugClass($drugClass)
    {
        return $this->setProperty('drugClass', $drugClass);
    }

    /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     *
     * @param string|string[] $drugUnit
     *
     * @return static
     *
     * @see https://schema.org/drugUnit
     * @see http://health-lifesci.schema.org
     */
    public function drugUnit($drugUnit)
    {
        return $this->setProperty('drugUnit', $drugUnit);
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption
     * of specific foods while taking this drug.
     *
     * @param string|string[] $foodWarning
     *
     * @return static
     *
     * @see https://schema.org/foodWarning
     * @see http://health-lifesci.schema.org
     */
    public function foodWarning($foodWarning)
    {
        return $this->setProperty('foodWarning', $foodWarning);
    }

    /**
     * A medical guideline related to this entity.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalGuidelineContract|\Spatie\SchemaOrg\Contracts\MedicalGuidelineContract[] $guideline
     *
     * @return static
     *
     * @see https://schema.org/guideline
     * @see http://health-lifesci.schema.org
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
     * The insurance plans that cover this drug.
     *
     * @param \Spatie\SchemaOrg\Contracts\HealthInsurancePlanContract|\Spatie\SchemaOrg\Contracts\HealthInsurancePlanContract[] $includedInHealthInsurancePlan
     *
     * @return static
     *
     * @see https://schema.org/includedInHealthInsurancePlan
     * @see http://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1062
     */
    public function includedInHealthInsurancePlan($includedInHealthInsurancePlan)
    {
        return $this->setProperty('includedInHealthInsurancePlan', $includedInHealthInsurancePlan);
    }

    /**
     * Another drug that is known to interact with this drug in a way that
     * impacts the effect of this drug or causes a risk to the patient. Note:
     * disease interactions are typically captured as contraindications.
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugContract|\Spatie\SchemaOrg\Contracts\DrugContract[] $interactingDrug
     *
     * @return static
     *
     * @see https://schema.org/interactingDrug
     * @see http://health-lifesci.schema.org
     */
    public function interactingDrug($interactingDrug)
    {
        return $this->setProperty('interactingDrug', $interactingDrug);
    }

    /**
     * True if the drug is available in a generic form (regardless of name).
     *
     * @param bool|bool[] $isAvailableGenerically
     *
     * @return static
     *
     * @see https://schema.org/isAvailableGenerically
     * @see http://health-lifesci.schema.org
     */
    public function isAvailableGenerically($isAvailableGenerically)
    {
        return $this->setProperty('isAvailableGenerically', $isAvailableGenerically);
    }

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     *
     * @param bool|bool[] $isProprietary
     *
     * @return static
     *
     * @see https://schema.org/isProprietary
     * @see http://health-lifesci.schema.org
     */
    public function isProprietary($isProprietary)
    {
        return $this->setProperty('isProprietary', $isProprietary);
    }

    /**
     * Link to the drug's label details.
     *
     * @param string|string[] $labelDetails
     *
     * @return static
     *
     * @see https://schema.org/labelDetails
     * @see http://health-lifesci.schema.org
     */
    public function labelDetails($labelDetails)
    {
        return $this->setProperty('labelDetails', $labelDetails);
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
     * @see http://health-lifesci.schema.org
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
     * The manufacturer of the product.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $manufacturer
     *
     * @return static
     *
     * @see https://schema.org/manufacturer
     */
    public function manufacturer($manufacturer)
    {
        return $this->setProperty('manufacturer', $manufacturer);
    }

    /**
     * Recommended intake of this supplement for a given population as defined
     * by a specific recommending authority.
     *
     * @param \Spatie\SchemaOrg\Contracts\MaximumDoseScheduleContract|\Spatie\SchemaOrg\Contracts\MaximumDoseScheduleContract[] $maximumIntake
     *
     * @return static
     *
     * @see https://schema.org/maximumIntake
     * @see http://health-lifesci.schema.org
     */
    public function maximumIntake($maximumIntake)
    {
        return $this->setProperty('maximumIntake', $maximumIntake);
    }

    /**
     * The specific biochemical interaction through which this drug or
     * supplement produces its pharmacological effect.
     *
     * @param string|string[] $mechanismOfAction
     *
     * @return static
     *
     * @see https://schema.org/mechanismOfAction
     * @see http://health-lifesci.schema.org
     */
    public function mechanismOfAction($mechanismOfAction)
    {
        return $this->setProperty('mechanismOfAction', $mechanismOfAction);
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
     * @see http://health-lifesci.schema.org
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
     * The generic name of this drug or supplement.
     *
     * @param string|string[] $nonProprietaryName
     *
     * @return static
     *
     * @see https://schema.org/nonProprietaryName
     * @see http://health-lifesci.schema.org
     */
    public function nonProprietaryName($nonProprietaryName)
    {
        return $this->setProperty('nonProprietaryName', $nonProprietaryName);
    }

    /**
     * Any information related to overdose on a drug, including signs or
     * symptoms, treatments, contact information for emergency response.
     *
     * @param string|string[] $overdosage
     *
     * @return static
     *
     * @see https://schema.org/overdosage
     * @see http://health-lifesci.schema.org
     */
    public function overdosage($overdosage)
    {
        return $this->setProperty('overdosage', $overdosage);
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
     * Pregnancy category of this drug.
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugPregnancyCategoryContract|\Spatie\SchemaOrg\Contracts\DrugPregnancyCategoryContract[] $pregnancyCategory
     *
     * @return static
     *
     * @see https://schema.org/pregnancyCategory
     * @see http://health-lifesci.schema.org
     */
    public function pregnancyCategory($pregnancyCategory)
    {
        return $this->setProperty('pregnancyCategory', $pregnancyCategory);
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's
     * use during pregnancy.
     *
     * @param string|string[] $pregnancyWarning
     *
     * @return static
     *
     * @see https://schema.org/pregnancyWarning
     * @see http://health-lifesci.schema.org
     */
    public function pregnancyWarning($pregnancyWarning)
    {
        return $this->setProperty('pregnancyWarning', $pregnancyWarning);
    }

    /**
     * Link to prescribing information for the drug.
     *
     * @param string|string[] $prescribingInfo
     *
     * @return static
     *
     * @see https://schema.org/prescribingInfo
     * @see http://health-lifesci.schema.org
     */
    public function prescribingInfo($prescribingInfo)
    {
        return $this->setProperty('prescribingInfo', $prescribingInfo);
    }

    /**
     * Indicates the status of drug prescription eg. local catalogs
     * classifications or whether the drug is available by prescription or
     * over-the-counter, etc.
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugPrescriptionStatusContract|\Spatie\SchemaOrg\Contracts\DrugPrescriptionStatusContract[]|string|string[] $prescriptionStatus
     *
     * @return static
     *
     * @see https://schema.org/prescriptionStatus
     * @see http://health-lifesci.schema.org
     */
    public function prescriptionStatus($prescriptionStatus)
    {
        return $this->setProperty('prescriptionStatus', $prescriptionStatus);
    }

    /**
     * Proprietary name given to the diet plan, typically by its originator or
     * creator.
     *
     * @param string|string[] $proprietaryName
     *
     * @return static
     *
     * @see https://schema.org/proprietaryName
     * @see http://health-lifesci.schema.org
     */
    public function proprietaryName($proprietaryName)
    {
        return $this->setProperty('proprietaryName', $proprietaryName);
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
     * @see http://health-lifesci.schema.org
     */
    public function recognizingAuthority($recognizingAuthority)
    {
        return $this->setProperty('recognizingAuthority', $recognizingAuthority);
    }

    /**
     * Any other drug related to this one, for example commonly-prescribed
     * alternatives.
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugContract|\Spatie\SchemaOrg\Contracts\DrugContract[] $relatedDrug
     *
     * @return static
     *
     * @see https://schema.org/relatedDrug
     * @see http://health-lifesci.schema.org
     */
    public function relatedDrug($relatedDrug)
    {
        return $this->setProperty('relatedDrug', $relatedDrug);
    }

    /**
     * If applicable, a medical specialty in which this entity is relevant.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalSpecialtyContract|\Spatie\SchemaOrg\Contracts\MedicalSpecialtyContract[] $relevantSpecialty
     *
     * @return static
     *
     * @see https://schema.org/relevantSpecialty
     * @see http://health-lifesci.schema.org
     */
    public function relevantSpecialty($relevantSpecialty)
    {
        return $this->setProperty('relevantSpecialty', $relevantSpecialty);
    }

    /**
     * The RxCUI drug identifier from RXNORM.
     *
     * @param string|string[] $rxcui
     *
     * @return static
     *
     * @see https://schema.org/rxcui
     * @see http://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1062
     */
    public function rxcui($rxcui)
    {
        return $this->setProperty('rxcui', $rxcui);
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
     * A medical study or trial related to this entity.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalStudyContract|\Spatie\SchemaOrg\Contracts\MedicalStudyContract[] $study
     *
     * @return static
     *
     * @see https://schema.org/study
     * @see http://health-lifesci.schema.org
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
     * Any FDA or other warnings about the drug (text or URL).
     *
     * @param string|string[] $warning
     *
     * @return static
     *
     * @see https://schema.org/warning
     * @see http://health-lifesci.schema.org
     */
    public function warning($warning)
    {
        return $this->setProperty('warning', $warning);
    }

}
