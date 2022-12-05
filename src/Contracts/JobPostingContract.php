<?php

namespace Spatie\SchemaOrg\Contracts;

interface JobPostingContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function applicantLocationRequirements($applicantLocationRequirements);

    public function applicationContact($applicationContact);

    public function baseSalary($baseSalary);

    public function benefits($benefits);

    public function datePosted($datePosted);

    public function description($description);

    public function directApply($directApply);

    public function disambiguatingDescription($disambiguatingDescription);

    public function educationRequirements($educationRequirements);

    public function eligibilityToWorkRequirement($eligibilityToWorkRequirement);

    public function employerOverview($employerOverview);

    public function employmentType($employmentType);

    public function employmentUnit($employmentUnit);

    public function estimatedSalary($estimatedSalary);

    public function experienceInPlaceOfEducation($experienceInPlaceOfEducation);

    public function experienceRequirements($experienceRequirements);

    public function hiringOrganization($hiringOrganization);

    public function identifier($identifier);

    public function image($image);

    public function incentiveCompensation($incentiveCompensation);

    public function incentives($incentives);

    public function industry($industry);

    public function jobBenefits($jobBenefits);

    public function jobImmediateStart($jobImmediateStart);

    public function jobLocation($jobLocation);

    public function jobLocationType($jobLocationType);

    public function jobStartDate($jobStartDate);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function occupationalCategory($occupationalCategory);

    public function physicalRequirement($physicalRequirement);

    public function potentialAction($potentialAction);

    public function qualifications($qualifications);

    public function relevantOccupation($relevantOccupation);

    public function responsibilities($responsibilities);

    public function salaryCurrency($salaryCurrency);

    public function sameAs($sameAs);

    public function securityClearanceRequirement($securityClearanceRequirement);

    public function sensoryRequirement($sensoryRequirement);

    public function skills($skills);

    public function specialCommitments($specialCommitments);

    public function subjectOf($subjectOf);

    public function title($title);

    public function totalJobOpenings($totalJobOpenings);

    public function url($url);

    public function validThrough($validThrough);

    public function workHours($workHours);
}
