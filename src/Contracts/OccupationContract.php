<?php

namespace Spatie\SchemaOrg\Contracts;

interface OccupationContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function educationRequirements($educationRequirements);

    public function estimatedSalary($estimatedSalary);

    public function experienceRequirements($experienceRequirements);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function occupationLocation($occupationLocation);

    public function occupationalCategory($occupationalCategory);

    public function potentialAction($potentialAction);

    public function qualifications($qualifications);

    public function responsibilities($responsibilities);

    public function sameAs($sameAs);

    public function skills($skills);

    public function subjectOf($subjectOf);

    public function url($url);
}
