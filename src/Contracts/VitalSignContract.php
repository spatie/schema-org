<?php

namespace Spatie\SchemaOrg\Contracts;

interface VitalSignContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function associatedAnatomy($associatedAnatomy);

    public function code($code);

    public function description($description);

    public function differentialDiagnosis($differentialDiagnosis);

    public function disambiguatingDescription($disambiguatingDescription);

    public function drug($drug);

    public function epidemiology($epidemiology);

    public function expectedPrognosis($expectedPrognosis);

    public function funding($funding);

    public function guideline($guideline);

    public function identifier($identifier);

    public function identifyingExam($identifyingExam);

    public function identifyingTest($identifyingTest);

    public function image($image);

    public function legalStatus($legalStatus);

    public function mainEntityOfPage($mainEntityOfPage);

    public function medicineSystem($medicineSystem);

    public function name($name);

    public function naturalProgression($naturalProgression);

    public function pathophysiology($pathophysiology);

    public function possibleComplication($possibleComplication);

    public function possibleTreatment($possibleTreatment);

    public function potentialAction($potentialAction);

    public function primaryPrevention($primaryPrevention);

    public function recognizingAuthority($recognizingAuthority);

    public function relevantSpecialty($relevantSpecialty);

    public function riskFactor($riskFactor);

    public function sameAs($sameAs);

    public function secondaryPrevention($secondaryPrevention);

    public function signOrSymptom($signOrSymptom);

    public function stage($stage);

    public function status($status);

    public function study($study);

    public function subjectOf($subjectOf);

    public function typicalTest($typicalTest);

    public function url($url);
}
