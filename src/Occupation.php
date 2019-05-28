<?php

namespace Spatie\SchemaOrg;

/**
 * A profession, may involve prolonged training and/or a formal qualification.
 *
 * @see http://schema.org/Occupation
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class Occupation extends BaseType
{
    /**
     * Educational background needed for the position or Occupation.
     *
     * @param string|string[] $educationRequirements
     *
     * @return static
     *
     * @see http://schema.org/educationRequirements
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
     * @param MonetaryAmount|MonetaryAmountDistribution|MonetaryAmountDistribution[]|MonetaryAmount[]|float|float[]|int|int[] $estimatedSalary
     *
     * @return static
     *
     * @see http://schema.org/estimatedSalary
     */
    public function estimatedSalary($estimatedSalary)
    {
        return $this->setProperty('estimatedSalary', $estimatedSalary);
    }

    /**
     * Description of skills and experience needed for the position or
     * Occupation.
     *
     * @param string|string[] $experienceRequirements
     *
     * @return static
     *
     * @see http://schema.org/experienceRequirements
     */
    public function experienceRequirements($experienceRequirements)
    {
        return $this->setProperty('experienceRequirements', $experienceRequirements);
    }

    /**
     * The region/country for which this occupational description is
     * appropriate. Note that educational requirements and qualifications can
     * vary between jurisdictions.
     *
     * @param AdministrativeArea|AdministrativeArea[] $occupationLocation
     *
     * @return static
     *
     * @see http://schema.org/occupationLocation
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
     * @param string|string[] $occupationalCategory
     *
     * @return static
     *
     * @see http://schema.org/occupationalCategory
     */
    public function occupationalCategory($occupationalCategory)
    {
        return $this->setProperty('occupationalCategory', $occupationalCategory);
    }

    /**
     * Specific qualifications required for this role or Occupation.
     *
     * @param string|string[] $qualifications
     *
     * @return static
     *
     * @see http://schema.org/qualifications
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
     * @see http://schema.org/responsibilities
     */
    public function responsibilities($responsibilities)
    {
        return $this->setProperty('responsibilities', $responsibilities);
    }

    /**
     * Skills required to fulfill this role or in this Occupation.
     *
     * @param string|string[] $skills
     *
     * @return static
     *
     * @see http://schema.org/skills
     */
    public function skills($skills)
    {
        return $this->setProperty('skills', $skills);
    }

}
