<?php

namespace Spatie\SchemaOrg;

/**
 * A listing that describes a job opening in a certain organization.
 *
 * @see http://schema.org/JobPosting
 */
class JobPosting extends Intangible
{
    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     *
     * @param float|int|\Spatie\SchemaOrg\PriceSpecification|\Spatie\SchemaOrg\MonetaryAmount $baseSalary
     *
     * @return static
     *
     * @see http://schema.org/baseSalary
     */
    public function baseSalary($baseSalary)
    {
        return $this->setProperty('baseSalary', $baseSalary);
    }

    /**
     * Description of benefits associated with the job.
     *
     * @param string $benefits
     *
     * @return static
     *
     * @see http://schema.org/benefits
     */
    public function benefits($benefits)
    {
        return $this->setProperty('benefits', $benefits);
    }

    /**
     * Description of benefits associated with the job.
     *
     * @param string $jobBenefits
     *
     * @return static
     *
     * @see http://schema.org/jobBenefits
     */
    public function jobBenefits($jobBenefits)
    {
        return $this->setProperty('jobBenefits', $jobBenefits);
    }

    /**
     * Publication date for the job posting.
     *
     * @param \DateTimeInterface $datePosted
     *
     * @return static
     *
     * @see http://schema.org/datePosted
     */
    public function datePosted($datePosted)
    {
        return $this->setProperty('datePosted', $datePosted);
    }

    /**
     * Educational background needed for the position.
     *
     * @param string $educationRequirements
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
     * Type of employment (e.g. full-time, part-time, contract, temporary,
     * seasonal, internship).
     *
     * @param string $employmentType
     *
     * @return static
     *
     * @see http://schema.org/employmentType
     */
    public function employmentType($employmentType)
    {
        return $this->setProperty('employmentType', $employmentType);
    }

    /**
     * Description of skills and experience needed for the position.
     *
     * @param string $experienceRequirements
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
     * Organization offering the job position.
     *
     * @param \Spatie\SchemaOrg\Organization $hiringOrganization
     *
     * @return static
     *
     * @see http://schema.org/hiringOrganization
     */
    public function hiringOrganization($hiringOrganization)
    {
        return $this->setProperty('hiringOrganization', $hiringOrganization);
    }

    /**
     * Description of bonus and commission compensation aspects of the job.
     *
     * @param string $incentives
     *
     * @return static
     *
     * @see http://schema.org/incentives
     */
    public function incentives($incentives)
    {
        return $this->setProperty('incentives', $incentives);
    }

    /**
     * Description of bonus and commission compensation aspects of the job.
     *
     * @param string $incentiveCompensation
     *
     * @return static
     *
     * @see http://schema.org/incentiveCompensation
     */
    public function incentiveCompensation($incentiveCompensation)
    {
        return $this->setProperty('incentiveCompensation', $incentiveCompensation);
    }

    /**
     * The industry associated with the job position.
     *
     * @param string $industry
     *
     * @return static
     *
     * @see http://schema.org/industry
     */
    public function industry($industry)
    {
        return $this->setProperty('industry', $industry);
    }

    /**
     * A (typically single) geographic location associated with the job
     * position.
     *
     * @param \Spatie\SchemaOrg\Place $jobLocation
     *
     * @return static
     *
     * @see http://schema.org/jobLocation
     */
    public function jobLocation($jobLocation)
    {
        return $this->setProperty('jobLocation', $jobLocation);
    }

    /**
     * Category or categories describing the job. Use BLS O*NET-SOC taxonomy:
     * http://www.onetcenter.org/taxonomy.html. Ideally includes textual label
     * and formal code, with the property repeated for each applicable value.
     *
     * @param string $occupationalCategory
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
     * Specific qualifications required for this role.
     *
     * @param string $qualifications
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
     * Responsibilities associated with this role.
     *
     * @param string $responsibilities
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
     * The currency (coded using [ISO
     * 4217](http://en.wikipedia.org/wiki/ISO_4217) ) used for the main salary
     * information in this job posting or for this employee.
     *
     * @param string $salaryCurrency
     *
     * @return static
     *
     * @see http://schema.org/salaryCurrency
     */
    public function salaryCurrency($salaryCurrency)
    {
        return $this->setProperty('salaryCurrency', $salaryCurrency);
    }

    /**
     * Skills required to fulfill this role.
     *
     * @param string $skills
     *
     * @return static
     *
     * @see http://schema.org/skills
     */
    public function skills($skills)
    {
        return $this->setProperty('skills', $skills);
    }

    /**
     * Any special commitments associated with this job posting. Valid entries
     * include VeteranCommit, MilitarySpouseCommit, etc.
     *
     * @param string $specialCommitments
     *
     * @return static
     *
     * @see http://schema.org/specialCommitments
     */
    public function specialCommitments($specialCommitments)
    {
        return $this->setProperty('specialCommitments', $specialCommitments);
    }

    /**
     * The title of the job.
     *
     * @param string $title
     *
     * @return static
     *
     * @see http://schema.org/title
     */
    public function title($title)
    {
        return $this->setProperty('title', $title);
    }

    /**
     * The date after when the item is not valid. For example the end of an
     * offer, salary period, or a period of opening hours.
     *
     * @param \DateTimeInterface $validThrough
     *
     * @return static
     *
     * @see http://schema.org/validThrough
     */
    public function validThrough($validThrough)
    {
        return $this->setProperty('validThrough', $validThrough);
    }

    /**
     * The typical working hours for this job (e.g. 1st shift, night shift,
     * 8am-5pm).
     *
     * @param string $workHours
     *
     * @return static
     *
     * @see http://schema.org/workHours
     */
    public function workHours($workHours)
    {
        return $this->setProperty('workHours', $workHours);
    }

}
