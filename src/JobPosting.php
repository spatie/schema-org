<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\JobPostingContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A listing that describes a job opening in a certain organization.
 *
 * @see http://schema.org/JobPosting
 *
 * @method static industry($industry) The value should be instance of pending types DefinedTerm|DefinedTerm[]|string|string[]
 * @method static skills($skills) The value should be instance of pending types DefinedTerm|DefinedTerm[]|string|string[]
 */
class JobPosting extends BaseType implements JobPostingContract, IntangibleContract, ThingContract
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
     * @see http://schema.org/additionalType
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
     * @see http://schema.org/alternateName
     */
    public function alternateName($alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     *
     * @param \Spatie\SchemaOrg\Contracts\MonetaryAmountContract|\Spatie\SchemaOrg\Contracts\MonetaryAmountContract[]|\Spatie\SchemaOrg\Contracts\PriceSpecificationContract|\Spatie\SchemaOrg\Contracts\PriceSpecificationContract[]|float|float[]|int|int[] $baseSalary
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
     * @param string|string[] $benefits
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
     * Publication date of an online listing.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $datePosted
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
     * A description of the item.
     *
     * @param string|string[] $description
     *
     * @return static
     *
     * @see http://schema.org/description
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
     * @see http://schema.org/disambiguatingDescription
     */
    public function disambiguatingDescription($disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * Type of employment (e.g. full-time, part-time, contract, temporary,
     * seasonal, internship).
     *
     * @param string|string[] $employmentType
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
     * Organization offering the job position.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $hiringOrganization
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
     * @see http://schema.org/identifier
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
     * @see http://schema.org/image
     */
    public function image($image)
    {
        return $this->setProperty('image', $image);
    }

    /**
     * Description of bonus and commission compensation aspects of the job.
     *
     * @param string|string[] $incentiveCompensation
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
     * Description of bonus and commission compensation aspects of the job.
     *
     * @param string|string[] $incentives
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
     * Description of benefits associated with the job.
     *
     * @param string|string[] $jobBenefits
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
     * A (typically single) geographic location associated with the job
     * position.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $jobLocation
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
     * Indicates a page (or other CreativeWork) for which this thing is the main
     * entity being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $mainEntityOfPage
     *
     * @return static
     *
     * @see http://schema.org/mainEntityOfPage
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
     * @see http://schema.org/name
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
     * @see http://schema.org/potentialAction
     */
    public function potentialAction($potentialAction)
    {
        return $this->setProperty('potentialAction', $potentialAction);
    }

    /**
     * The Occupation for the JobPosting.
     *
     * @param \Spatie\SchemaOrg\Contracts\OccupationContract|\Spatie\SchemaOrg\Contracts\OccupationContract[] $relevantOccupation
     *
     * @return static
     *
     * @see http://schema.org/relevantOccupation
     */
    public function relevantOccupation($relevantOccupation)
    {
        return $this->setProperty('relevantOccupation', $relevantOccupation);
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
     * The currency (coded using [ISO
     * 4217](http://en.wikipedia.org/wiki/ISO_4217) ) used for the main salary
     * information in this job posting or for this employee.
     *
     * @param string|string[] $salaryCurrency
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
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or
     * official website.
     *
     * @param string|string[] $sameAs
     *
     * @return static
     *
     * @see http://schema.org/sameAs
     */
    public function sameAs($sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * Any special commitments associated with this job posting. Valid entries
     * include VeteranCommit, MilitarySpouseCommit, etc.
     *
     * @param string|string[] $specialCommitments
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
     * A CreativeWork or Event about this Thing.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|\Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $subjectOf
     *
     * @return static
     *
     * @see http://schema.org/subjectOf
     */
    public function subjectOf($subjectOf)
    {
        return $this->setProperty('subjectOf', $subjectOf);
    }

    /**
     * The title of the job.
     *
     * @param string|string[] $title
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
     * URL of the item.
     *
     * @param string|string[] $url
     *
     * @return static
     *
     * @see http://schema.org/url
     */
    public function url($url)
    {
        return $this->setProperty('url', $url);
    }

    /**
     * The date after when the item is not valid. For example the end of an
     * offer, salary period, or a period of opening hours.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $validThrough
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
     * @param string|string[] $workHours
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
