<?php

namespace Spatie\SchemaOrg\Contracts;

interface WorkBasedProgramContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function applicationDeadline($applicationDeadline);

    public function applicationStartDate($applicationStartDate);

    public function dayOfWeek($dayOfWeek);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function educationalCredentialAwarded($educationalCredentialAwarded);

    public function educationalProgramMode($educationalProgramMode);

    public function endDate($endDate);

    public function financialAidEligible($financialAidEligible);

    public function hasCourse($hasCourse);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function maximumEnrollment($maximumEnrollment);

    public function name($name);

    public function numberOfCredits($numberOfCredits);

    public function occupationalCategory($occupationalCategory);

    public function occupationalCredentialAwarded($occupationalCredentialAwarded);

    public function offers($offers);

    public function potentialAction($potentialAction);

    public function programPrerequisites($programPrerequisites);

    public function programType($programType);

    public function provider($provider);

    public function salaryUponCompletion($salaryUponCompletion);

    public function sameAs($sameAs);

    public function startDate($startDate);

    public function subjectOf($subjectOf);

    public function termDuration($termDuration);

    public function termsPerYear($termsPerYear);

    public function timeOfDay($timeOfDay);

    public function timeToComplete($timeToComplete);

    public function trainingSalary($trainingSalary);

    public function typicalCreditsPerTerm($typicalCreditsPerTerm);

    public function url($url);
}
