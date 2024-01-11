<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\OccupationContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A profession, may involve prolonged training and/or a formal qualification.
 *
 * @see https://schema.org/Occupation
 * @link https://github.com/schemaorg/schemaorg/issues/1698
 *
 */
class Occupation extends BaseType implements OccupationContract, IntangibleContract, ThingContract
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
     * Educational background needed for the position or Occupation.
     *
     * @param \Spatie\SchemaOrg\Contracts\EducationalOccupationalCredentialContract|\Spatie\SchemaOrg\Contracts\EducationalOccupationalCredentialContract[]|string|string[] $educationRequirements
     *
     * @return static
     *
     * @see https://schema.org/educationRequirements
     * @see https://pending.schema.org
     */
    public function educationRequirements($educationRequirements)
    {
        return $this->setProperty('educationRequirements', $educationRequirements);
    }

    /**
     * An estimated salary for a job posting or occupation, based on a variety
     * of variables including, but not limited to industry, job title, and
     * location. Estimated salaries  are often computed by outside organizations
     * rather than the hiring organization, who may not have committed to the
     * estimated value.
     *
     * @param \Spatie\SchemaOrg\Contracts\MonetaryAmountContract|\Spatie\SchemaOrg\Contracts\MonetaryAmountDistributionContract|\Spatie\SchemaOrg\Contracts\MonetaryAmountDistributionContract[]|\Spatie\SchemaOrg\Contracts\MonetaryAmountContract[]|float|float[]|int|int[] $estimatedSalary
     *
     * @return static
     *
     * @see https://schema.org/estimatedSalary
     * @link https://github.com/schemaorg/schemaorg/issues/1698
     */
    public function estimatedSalary($estimatedSalary)
    {
        return $this->setProperty('estimatedSalary', $estimatedSalary);
    }

    /**
     * Description of skills and experience needed for the position or
     * Occupation.
     *
     * @param \Spatie\SchemaOrg\Contracts\OccupationalExperienceRequirementsContract|\Spatie\SchemaOrg\Contracts\OccupationalExperienceRequirementsContract[]|string|string[] $experienceRequirements
     *
     * @return static
     *
     * @see https://schema.org/experienceRequirements
     * @link https://github.com/schemaorg/schemaorg/issues/1698
     */
    public function experienceRequirements($experienceRequirements)
    {
        return $this->setProperty('experienceRequirements', $experienceRequirements);
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
     *  The region/country for which this occupational description is
     * appropriate. Note that educational requirements and qualifications can
     * vary between jurisdictions.
     *
     * @param \Spatie\SchemaOrg\Contracts\AdministrativeAreaContract|\Spatie\SchemaOrg\Contracts\AdministrativeAreaContract[] $occupationLocation
     *
     * @return static
     *
     * @see https://schema.org/occupationLocation
     * @link https://github.com/schemaorg/schemaorg/issues/1698
     */
    public function occupationLocation($occupationLocation)
    {
        return $this->setProperty('occupationLocation', $occupationLocation);
    }

    /**
     * A category describing the job, preferably using a term from a taxonomy
     * such as [BLS O*NET-SOC](http://www.onetcenter.org/taxonomy.html),
     * [ISCO-08](https://www.ilo.org/public/english/bureau/stat/isco/isco08/) or
     * similar, with the property repeated for each applicable value. Ideally
     * the taxonomy should be identified, and both the textual label and formal
     * code for the category should be provided.
     *
     * Note: for historical reasons, any textual label and formal code provided
     * as a literal may be assumed to be from O*NET-SOC.
     *
     * @param \Spatie\SchemaOrg\Contracts\CategoryCodeContract|\Spatie\SchemaOrg\Contracts\CategoryCodeContract[]|string|string[] $occupationalCategory
     *
     * @return static
     *
     * @see https://schema.org/occupationalCategory
     * @see https://pending.schema.org
     */
    public function occupationalCategory($occupationalCategory)
    {
        return $this->setProperty('occupationalCategory', $occupationalCategory);
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
     * Specific qualifications required for this role or Occupation.
     *
     * @param \Spatie\SchemaOrg\Contracts\EducationalOccupationalCredentialContract|\Spatie\SchemaOrg\Contracts\EducationalOccupationalCredentialContract[]|string|string[] $qualifications
     *
     * @return static
     *
     * @see https://schema.org/qualifications
     * @see https://pending.schema.org
     */
    public function qualifications($qualifications)
    {
        return $this->setProperty('qualifications', $qualifications);
    }

    /**
     * Responsibilities associated with this role or Occupation.
     *
     * @param string|string[] $responsibilities
     *
     * @return static
     *
     * @see https://schema.org/responsibilities
     * @link https://github.com/schemaorg/schemaorg/issues/1698
     */
    public function responsibilities($responsibilities)
    {
        return $this->setProperty('responsibilities', $responsibilities);
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
     * A statement of knowledge, skill, ability, task or any other assertion
     * expressing a competency that is desired or required to fulfill this role
     * or to work in this occupation.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $skills
     *
     * @return static
     *
     * @see https://schema.org/skills
     */
    public function skills($skills)
    {
        return $this->setProperty('skills', $skills);
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
