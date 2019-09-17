<?php

namespace Spatie\SchemaOrg\Contracts;

interface JobPostingContract
{
    public function baseSalary($baseSalary);

    public function benefits($benefits);

    public function datePosted($datePosted);

    public function educationRequirements($educationRequirements);

    public function employmentType($employmentType);

    public function estimatedSalary($estimatedSalary);

    public function experienceRequirements($experienceRequirements);

    public function hiringOrganization($hiringOrganization);

    public function incentiveCompensation($incentiveCompensation);

    public function incentives($incentives);

    public function industry($industry);

    public function jobBenefits($jobBenefits);

    public function jobLocation($jobLocation);

    public function occupationalCategory($occupationalCategory);

    public function qualifications($qualifications);

    public function relevantOccupation($relevantOccupation);

    public function responsibilities($responsibilities);

    public function salaryCurrency($salaryCurrency);

    public function skills($skills);

    public function specialCommitments($specialCommitments);

    public function title($title);

    public function validThrough($validThrough);

    public function workHours($workHours);

    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);

}
