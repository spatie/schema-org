<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\JobPostingContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A listing that describes a job opening in a certain organization.
 *
 * @see https://schema.org/JobPosting
 *
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
     * The location(s) applicants can apply from. This is usually used for
     * telecommuting jobs where the applicant does not need to be in a physical
     * office. Note: This should not be used for citizenship or work visa
     * requirements.
     *
     * @param \Spatie\SchemaOrg\Contracts\AdministrativeAreaContract|\Spatie\SchemaOrg\Contracts\AdministrativeAreaContract[] $applicantLocationRequirements
     *
     * @return static
     *
     * @see https://schema.org/applicantLocationRequirements
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2083
     */
    public function applicantLocationRequirements($applicantLocationRequirements)
    {
        return $this->setProperty('applicantLocationRequirements', $applicantLocationRequirements);
    }

    /**
     * Contact details for further information relevant to this job posting.
     *
     * @param \Spatie\SchemaOrg\Contracts\ContactPointContract|\Spatie\SchemaOrg\Contracts\ContactPointContract[] $applicationContact
     *
     * @return static
     *
     * @see https://schema.org/applicationContact
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2396
     */
    public function applicationContact($applicationContact)
    {
        return $this->setProperty('applicationContact', $applicationContact);
    }

    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     *
     * @param \Spatie\SchemaOrg\Contracts\MonetaryAmountContract|\Spatie\SchemaOrg\Contracts\MonetaryAmountContract[]|\Spatie\SchemaOrg\Contracts\PriceSpecificationContract|\Spatie\SchemaOrg\Contracts\PriceSpecificationContract[]|float|float[]|int|int[] $baseSalary
     *
     * @return static
     *
     * @see https://schema.org/baseSalary
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
     * @see https://schema.org/benefits
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
     * @see https://schema.org/datePosted
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
     * @see https://schema.org/description
     */
    public function description($description)
    {
        return $this->setProperty('description', $description);
    }

    /**
     * Indicates whether an [[url]] that is associated with a [[JobPosting]]
     * enables direct application for the job, via the posting website. A job
     * posting is considered to have directApply of [[True]] if an application
     * process for the specified job can be directly initiated via the url(s)
     * given (noting that e.g. multiple internet domains might nevertheless be
     * involved at an implementation level). A value of [[False]] is appropriate
     * if there is no clear path to applying directly online for the specified
     * job, navigating directly from the JobPosting url(s) supplied.
     *
     * @param bool|bool[] $directApply
     *
     * @return static
     *
     * @see https://schema.org/directApply
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2907
     */
    public function directApply($directApply)
    {
        return $this->setProperty('directApply', $directApply);
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
     * The legal requirements such as citizenship, visa and other documentation
     * required for an applicant to this job.
     *
     * @param string|string[] $eligibilityToWorkRequirement
     *
     * @return static
     *
     * @see https://schema.org/eligibilityToWorkRequirement
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2384
     */
    public function eligibilityToWorkRequirement($eligibilityToWorkRequirement)
    {
        return $this->setProperty('eligibilityToWorkRequirement', $eligibilityToWorkRequirement);
    }

    /**
     * A description of the employer, career opportunities and work environment
     * for this position.
     *
     * @param string|string[] $employerOverview
     *
     * @return static
     *
     * @see https://schema.org/employerOverview
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2396
     */
    public function employerOverview($employerOverview)
    {
        return $this->setProperty('employerOverview', $employerOverview);
    }

    /**
     * Type of employment (e.g. full-time, part-time, contract, temporary,
     * seasonal, internship).
     *
     * @param string|string[] $employmentType
     *
     * @return static
     *
     * @see https://schema.org/employmentType
     */
    public function employmentType($employmentType)
    {
        return $this->setProperty('employmentType', $employmentType);
    }

    /**
     * Indicates the department, unit and/or facility where the employee reports
     * and/or in which the job is to be performed.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $employmentUnit
     *
     * @return static
     *
     * @see https://schema.org/employmentUnit
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2296
     */
    public function employmentUnit($employmentUnit)
    {
        return $this->setProperty('employmentUnit', $employmentUnit);
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
     * Indicates whether a [[JobPosting]] will accept experience (as indicated
     * by [[OccupationalExperienceRequirements]]) in place of its formal
     * educational qualifications (as indicated by [[educationRequirements]]).
     * If true, indicates that satisfying one of these requirements is
     * sufficient.
     *
     * @param bool|bool[] $experienceInPlaceOfEducation
     *
     * @return static
     *
     * @see https://schema.org/experienceInPlaceOfEducation
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2681
     */
    public function experienceInPlaceOfEducation($experienceInPlaceOfEducation)
    {
        return $this->setProperty('experienceInPlaceOfEducation', $experienceInPlaceOfEducation);
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
     * Organization or Person offering the job position.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $hiringOrganization
     *
     * @return static
     *
     * @see https://schema.org/hiringOrganization
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
     * Description of bonus and commission compensation aspects of the job.
     *
     * @param string|string[] $incentiveCompensation
     *
     * @return static
     *
     * @see https://schema.org/incentiveCompensation
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
     * @see https://schema.org/incentives
     */
    public function incentives($incentives)
    {
        return $this->setProperty('incentives', $incentives);
    }

    /**
     * The industry associated with the job position.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $industry
     *
     * @return static
     *
     * @see https://schema.org/industry
     */
    public function industry($industry)
    {
        return $this->setProperty('industry', $industry);
    }

    /**
     * Description of benefits associated with the job.
     *
     * @param string|string[] $jobBenefits
     *
     * @return static
     *
     * @see https://schema.org/jobBenefits
     */
    public function jobBenefits($jobBenefits)
    {
        return $this->setProperty('jobBenefits', $jobBenefits);
    }

    /**
     * An indicator as to whether a position is available for an immediate
     * start.
     *
     * @param bool|bool[] $jobImmediateStart
     *
     * @return static
     *
     * @see https://schema.org/jobImmediateStart
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2244
     */
    public function jobImmediateStart($jobImmediateStart)
    {
        return $this->setProperty('jobImmediateStart', $jobImmediateStart);
    }

    /**
     * A (typically single) geographic location associated with the job
     * position.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $jobLocation
     *
     * @return static
     *
     * @see https://schema.org/jobLocation
     */
    public function jobLocation($jobLocation)
    {
        return $this->setProperty('jobLocation', $jobLocation);
    }

    /**
     * A description of the job location (e.g. TELECOMMUTE for telecommute
     * jobs).
     *
     * @param string|string[] $jobLocationType
     *
     * @return static
     *
     * @see https://schema.org/jobLocationType
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1591
     */
    public function jobLocationType($jobLocationType)
    {
        return $this->setProperty('jobLocationType', $jobLocationType);
    }

    /**
     * The date on which a successful applicant for this job would be expected
     * to start work. Choose a specific date in the future or use the
     * jobImmediateStart property to indicate the position is to be filled as
     * soon as possible.
     *
     * @param \DateTimeInterface|\DateTimeInterface[]|string|string[] $jobStartDate
     *
     * @return static
     *
     * @see https://schema.org/jobStartDate
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2244
     */
    public function jobStartDate($jobStartDate)
    {
        return $this->setProperty('jobStartDate', $jobStartDate);
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
     * A description of the types of physical activity associated with the job.
     * Defined terms such as those in O*net may be used, but note that there is
     * no way to specify the level of ability as well as its nature when using a
     * defined term.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $physicalRequirement
     *
     * @return static
     *
     * @see https://schema.org/physicalRequirement
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2384
     */
    public function physicalRequirement($physicalRequirement)
    {
        return $this->setProperty('physicalRequirement', $physicalRequirement);
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
     * The Occupation for the JobPosting.
     *
     * @param \Spatie\SchemaOrg\Contracts\OccupationContract|\Spatie\SchemaOrg\Contracts\OccupationContract[] $relevantOccupation
     *
     * @return static
     *
     * @see https://schema.org/relevantOccupation
     * @link https://github.com/schemaorg/schemaorg/issues/1698
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
     * @see https://schema.org/responsibilities
     * @link https://github.com/schemaorg/schemaorg/issues/1698
     */
    public function responsibilities($responsibilities)
    {
        return $this->setProperty('responsibilities', $responsibilities);
    }

    /**
     * The currency (coded using [ISO
     * 4217](http://en.wikipedia.org/wiki/ISO_4217)) used for the main salary
     * information in this job posting or for this employee.
     *
     * @param string|string[] $salaryCurrency
     *
     * @return static
     *
     * @see https://schema.org/salaryCurrency
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
     * @see https://schema.org/sameAs
     */
    public function sameAs($sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * A description of any security clearance requirements of the job.
     *
     * @param string|string[] $securityClearanceRequirement
     *
     * @return static
     *
     * @see https://schema.org/securityClearanceRequirement
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2384
     */
    public function securityClearanceRequirement($securityClearanceRequirement)
    {
        return $this->setProperty('securityClearanceRequirement', $securityClearanceRequirement);
    }

    /**
     * A description of any sensory requirements and levels necessary to
     * function on the job, including hearing and vision. Defined terms such as
     * those in O*net may be used, but note that there is no way to specify the
     * level of ability as well as its nature when using a defined term.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $sensoryRequirement
     *
     * @return static
     *
     * @see https://schema.org/sensoryRequirement
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2384
     */
    public function sensoryRequirement($sensoryRequirement)
    {
        return $this->setProperty('sensoryRequirement', $sensoryRequirement);
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
     * Any special commitments associated with this job posting. Valid entries
     * include VeteranCommit, MilitarySpouseCommit, etc.
     *
     * @param string|string[] $specialCommitments
     *
     * @return static
     *
     * @see https://schema.org/specialCommitments
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
     * @see https://schema.org/subjectOf
     * @link https://github.com/schemaorg/schemaorg/issues/1670
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
     * @see https://schema.org/title
     */
    public function title($title)
    {
        return $this->setProperty('title', $title);
    }

    /**
     * The number of positions open for this job posting. Use a positive
     * integer. Do not use if the number of positions is unclear or not known.
     *
     * @param int|int[] $totalJobOpenings
     *
     * @return static
     *
     * @see https://schema.org/totalJobOpenings
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2329
     */
    public function totalJobOpenings($totalJobOpenings)
    {
        return $this->setProperty('totalJobOpenings', $totalJobOpenings);
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
     * The date after when the item is not valid. For example the end of an
     * offer, salary period, or a period of opening hours.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $validThrough
     *
     * @return static
     *
     * @see https://schema.org/validThrough
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
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
     * @see https://schema.org/workHours
     */
    public function workHours($workHours)
    {
        return $this->setProperty('workHours', $workHours);
    }
}
