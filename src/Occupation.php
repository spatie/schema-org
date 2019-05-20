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
     * @param MonetaryAmountDistribution|MonetaryAmountDistribution[] $estimatedSalary
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
     * Category or categories describing the job. Use BLS O*NET-SOC taxonomy:
     * http://www.onetcenter.org/taxonomy.html. Ideally includes textual label
     * and formal code, with the property repeated for each applicable value.
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
