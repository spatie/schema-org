<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\EnumerationContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\MedicalEnumerationContract;
use Spatie\SchemaOrg\Contracts\MedicalSpecialtyContract;
use Spatie\SchemaOrg\Contracts\SpecialtyContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Any specific branch of medical science or practice. Medical specialities
 * include clinical specialties that pertain to particular organ systems and
 * their respective disease states, as well as allied health specialties.
 * Enumerated type.
 *
 * @see https://schema.org/MedicalSpecialty
 * @see https://health-lifesci.schema.org
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class MedicalSpecialty extends BaseType implements MedicalSpecialtyContract, EnumerationContract, IntangibleContract, MedicalEnumerationContract, SpecialtyContract, ThingContract
{
    /**
     * A specific branch of medical science that pertains to study of
     * anesthetics and their application.
     *
     * @see https://schema.org/Anesthesia
     * @see https://health-lifesci.schema.org
     */
    public const Anesthesia = 'https://schema.org/Anesthesia';

    /**
     * A specific branch of medical science that pertains to diagnosis and
     * treatment of disorders of heart and vasculature.
     *
     * @see https://schema.org/Cardiovascular
     * @see https://health-lifesci.schema.org
     */
    public const Cardiovascular = 'https://schema.org/Cardiovascular';

    /**
     * A field of public health focusing on improving health characteristics of
     * a defined population in relation with their geographical or environment
     * areas.
     *
     * @see https://schema.org/CommunityHealth
     * @see https://health-lifesci.schema.org
     */
    public const CommunityHealth = 'https://schema.org/CommunityHealth';

    /**
     * A branch of medicine that is involved in the dental care.
     *
     * @see https://schema.org/Dentistry
     * @see https://health-lifesci.schema.org
     */
    public const Dentistry = 'https://schema.org/Dentistry';

    /**
     * Something relating to or practicing dermatology.
     *
     * @see https://schema.org/Dermatologic
     * @see https://health-lifesci.schema.org
     */
    public const Dermatologic = 'https://schema.org/Dermatologic';

    /**
     * A specific branch of medical science that pertains to diagnosis and
     * treatment of disorders of skin.
     *
     * @see https://schema.org/Dermatology
     * @see https://health-lifesci.schema.org
     */
    public const Dermatology = 'https://schema.org/Dermatology';

    /**
     * Dietetics and nutrition as a medical specialty.
     *
     * @see https://schema.org/DietNutrition
     * @see https://health-lifesci.schema.org
     */
    public const DietNutrition = 'https://schema.org/DietNutrition';

    /**
     * A specific branch of medical science that deals with the evaluation and
     * initial treatment of medical conditions caused by trauma or sudden
     * illness.
     *
     * @see https://schema.org/Emergency
     * @see https://health-lifesci.schema.org
     */
    public const Emergency = 'https://schema.org/Emergency';

    /**
     * A specific branch of medical science that pertains to diagnosis and
     * treatment of disorders of endocrine glands and their secretions.
     *
     * @see https://schema.org/Endocrine
     * @see https://health-lifesci.schema.org
     */
    public const Endocrine = 'https://schema.org/Endocrine';

    /**
     * A specific branch of medical science that pertains to diagnosis and
     * treatment of disorders of digestive system.
     *
     * @see https://schema.org/Gastroenterologic
     * @see https://health-lifesci.schema.org
     */
    public const Gastroenterologic = 'https://schema.org/Gastroenterologic';

    /**
     * A specific branch of medical science that pertains to hereditary
     * transmission and the variation of inherited characteristics and
     * disorders.
     *
     * @see https://schema.org/Genetic
     * @see https://health-lifesci.schema.org
     */
    public const Genetic = 'https://schema.org/Genetic';

    /**
     * A specific branch of medical science that is concerned with the diagnosis
     * and treatment of diseases, debilities and provision of care to the aged.
     *
     * @see https://schema.org/Geriatric
     * @see https://health-lifesci.schema.org
     */
    public const Geriatric = 'https://schema.org/Geriatric';

    /**
     * A specific branch of medical science that pertains to the health care of
     * women, particularly in the diagnosis and treatment of disorders affecting
     * the female reproductive system.
     *
     * @see https://schema.org/Gynecologic
     * @see https://health-lifesci.schema.org
     */
    public const Gynecologic = 'https://schema.org/Gynecologic';

    /**
     * A specific branch of medical science that pertains to diagnosis and
     * treatment of disorders of blood and blood producing organs.
     *
     * @see https://schema.org/Hematologic
     * @see https://health-lifesci.schema.org
     */
    public const Hematologic = 'https://schema.org/Hematologic';

    /**
     * Something in medical science that pertains to infectious diseases, i.e.
     * caused by bacterial, viral, fungal or parasitic infections.
     *
     * @see https://schema.org/Infectious
     * @see https://health-lifesci.schema.org
     */
    public const Infectious = 'https://schema.org/Infectious';

    /**
     * A medical science pertaining to chemical, hematological, immunologic,
     * microscopic, or bacteriological diagnostic analyses or research.
     *
     * @see https://schema.org/LaboratoryScience
     * @see https://health-lifesci.schema.org
     */
    public const LaboratoryScience = 'https://schema.org/LaboratoryScience';

    /**
     * A nurse-like health profession that deals with pregnancy, childbirth, and
     * the postpartum period (including care of the newborn), besides sexual and
     * reproductive health of women throughout their lives.
     *
     * @see https://schema.org/Midwifery
     * @see https://health-lifesci.schema.org
     */
    public const Midwifery = 'https://schema.org/Midwifery';

    /**
     * A specific branch of medical science that pertains to diagnosis and
     * treatment of disorders of muscles, ligaments and skeletal system.
     *
     * @see https://schema.org/Musculoskeletal
     * @see https://health-lifesci.schema.org
     */
    public const Musculoskeletal = 'https://schema.org/Musculoskeletal';

    /**
     * A specific branch of medical science that studies the nerves and nervous
     * system and its respective disease states.
     *
     * @see https://schema.org/Neurologic
     * @see https://health-lifesci.schema.org
     */
    public const Neurologic = 'https://schema.org/Neurologic';

    /**
     * A health profession of a person formally educated and trained in the care
     * of the sick or infirm person.
     *
     * @see https://schema.org/Nursing
     * @see https://health-lifesci.schema.org
     */
    public const Nursing = 'https://schema.org/Nursing';

    /**
     * A specific branch of medical science that specializes in the care of
     * women during the prenatal and postnatal care and with the delivery of the
     * child.
     *
     * @see https://schema.org/Obstetric
     * @see https://health-lifesci.schema.org
     */
    public const Obstetric = 'https://schema.org/Obstetric';

    /**
     * A specific branch of medical science that deals with benign and malignant
     * tumors, including the study of their development, diagnosis, treatment
     * and prevention.
     *
     * @see https://schema.org/Oncologic
     * @see https://health-lifesci.schema.org
     */
    public const Oncologic = 'https://schema.org/Oncologic';

    /**
     * The science or practice of testing visual acuity and prescribing
     * corrective lenses.
     *
     * @see https://schema.org/Optometric
     * @see https://health-lifesci.schema.org
     */
    public const Optometric = 'https://schema.org/Optometric';

    /**
     * A specific branch of medical science that is concerned with the ear, nose
     * and throat and their respective disease states.
     *
     * @see https://schema.org/Otolaryngologic
     * @see https://health-lifesci.schema.org
     */
    public const Otolaryngologic = 'https://schema.org/Otolaryngologic';

    /**
     * A specific branch of medical science that is concerned with the study of
     * the cause, origin and nature of a disease state, including its
     * consequences as a result of manifestation of the disease. In clinical
     * care, the term is used to designate a branch of medicine using laboratory
     * tests to diagnose and determine the prognostic significance of illness.
     *
     * @see https://schema.org/Pathology
     * @see https://health-lifesci.schema.org
     */
    public const Pathology = 'https://schema.org/Pathology';

    /**
     * A specific branch of medical science that specializes in the care of
     * infants, children and adolescents.
     *
     * @see https://schema.org/Pediatric
     * @see https://health-lifesci.schema.org
     */
    public const Pediatric = 'https://schema.org/Pediatric';

    /**
     * The practice or art and science of preparing and dispensing drugs and
     * medicines.
     *
     * @see https://schema.org/PharmacySpecialty
     * @see https://health-lifesci.schema.org
     */
    public const PharmacySpecialty = 'https://schema.org/PharmacySpecialty';

    /**
     * The practice of treatment of disease, injury, or deformity by physical
     * methods such as massage, heat treatment, and exercise rather than by
     * drugs or surgery.
     *
     * @see https://schema.org/Physiotherapy
     * @see https://health-lifesci.schema.org
     */
    public const Physiotherapy = 'https://schema.org/Physiotherapy';

    /**
     * A specific branch of medical science that pertains to therapeutic or
     * cosmetic repair or re-formation of missing, injured or malformed tissues
     * or body parts by manual and instrumental means.
     *
     * @see https://schema.org/PlasticSurgery
     * @see https://health-lifesci.schema.org
     */
    public const PlasticSurgery = 'https://schema.org/PlasticSurgery';

    /**
     * Podiatry is the care of the human foot, especially the diagnosis and
     * treatment of foot disorders.
     *
     * @see https://schema.org/Podiatric
     * @see https://health-lifesci.schema.org
     */
    public const Podiatric = 'https://schema.org/Podiatric';

    /**
     * The medical care by a physician, or other health-care professional, who
     * is the patient's first contact with the health-care system and who may
     * recommend a specialist if necessary.
     *
     * @see https://schema.org/PrimaryCare
     * @see https://health-lifesci.schema.org
     */
    public const PrimaryCare = 'https://schema.org/PrimaryCare';

    /**
     * A specific branch of medical science that is concerned with the study,
     * treatment, and prevention of mental illness, using both medical and
     * psychological therapies.
     *
     * @see https://schema.org/Psychiatric
     * @see https://health-lifesci.schema.org
     */
    public const Psychiatric = 'https://schema.org/Psychiatric';

    /**
     * Branch of medicine that pertains to the health services to improve and
     * protect community health, especially epidemiology, sanitation,
     * immunization, and preventive medicine.
     *
     * @see https://schema.org/PublicHealth
     * @see https://health-lifesci.schema.org
     */
    public const PublicHealth = 'https://schema.org/PublicHealth';

    /**
     * A specific branch of medical science that pertains to the study of the
     * respiratory system and its respective disease states.
     *
     * @see https://schema.org/Pulmonary
     * @see https://health-lifesci.schema.org
     */
    public const Pulmonary = 'https://schema.org/Pulmonary';

    /**
     * A specific branch of medical science that pertains to the study of the
     * kidneys and its respective disease states.
     *
     * @see https://schema.org/Renal
     * @see https://health-lifesci.schema.org
     */
    public const Renal = 'https://schema.org/Renal';

    /**
     * The therapy that is concerned with the maintenance or improvement of
     * respiratory function (as in patients with pulmonary disease).
     *
     * @see https://schema.org/RespiratoryTherapy
     * @see https://health-lifesci.schema.org
     */
    public const RespiratoryTherapy = 'https://schema.org/RespiratoryTherapy';

    /**
     * A specific branch of medical science that deals with the study and
     * treatment of rheumatic, autoimmune or joint diseases.
     *
     * @see https://schema.org/Rheumatologic
     * @see https://health-lifesci.schema.org
     */
    public const Rheumatologic = 'https://schema.org/Rheumatologic';

    /**
     * The scientific study and treatment of defects, disorders, and
     * malfunctions of speech and voice, as stuttering, lisping, or lalling, and
     * of language disturbances, as aphasia or delayed language acquisition.
     *
     * @see https://schema.org/SpeechPathology
     * @see https://health-lifesci.schema.org
     */
    public const SpeechPathology = 'https://schema.org/SpeechPathology';

    /**
     * A specific branch of medical science that pertains to treating diseases,
     * injuries and deformities by manual and instrumental means.
     *
     * @see https://schema.org/Surgical
     * @see https://health-lifesci.schema.org
     */
    public const Surgical = 'https://schema.org/Surgical';

    /**
     * A specific branch of medical science that is concerned with poisons,
     * their nature, effects and detection and involved in the treatment of
     * poisoning.
     *
     * @see https://schema.org/Toxicologic
     * @see https://health-lifesci.schema.org
     */
    public const Toxicologic = 'https://schema.org/Toxicologic';

    /**
     * A specific branch of medical science that is concerned with the diagnosis
     * and treatment of diseases pertaining to the urinary tract and the
     * urogenital system.
     *
     * @see https://schema.org/Urologic
     * @see https://health-lifesci.schema.org
     */
    public const Urologic = 'https://schema.org/Urologic';

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
