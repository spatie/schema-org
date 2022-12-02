<?php

namespace Spatie\SchemaOrg\Contracts;

interface MedicalTrialContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function code($code);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function funding($funding);

    public function guideline($guideline);

    public function healthCondition($healthCondition);

    public function identifier($identifier);

    public function image($image);

    public function legalStatus($legalStatus);

    public function mainEntityOfPage($mainEntityOfPage);

    public function medicineSystem($medicineSystem);

    public function name($name);

    public function potentialAction($potentialAction);

    public function recognizingAuthority($recognizingAuthority);

    public function relevantSpecialty($relevantSpecialty);

    public function sameAs($sameAs);

    public function sponsor($sponsor);

    public function status($status);

    public function study($study);

    public function studyLocation($studyLocation);

    public function studySubject($studySubject);

    public function subjectOf($subjectOf);

    public function trialDesign($trialDesign);

    public function url($url);
}
