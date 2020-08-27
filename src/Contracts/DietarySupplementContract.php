<?php

namespace Spatie\SchemaOrg\Contracts;

interface DietarySupplementContract
{
    public function activeIngredient($activeIngredient);

    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function code($code);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function guideline($guideline);

    public function identifier($identifier);

    public function image($image);

    public function isProprietary($isProprietary);

    public function legalStatus($legalStatus);

    public function mainEntityOfPage($mainEntityOfPage);

    public function manufacturer($manufacturer);

    public function maximumIntake($maximumIntake);

    public function mechanismOfAction($mechanismOfAction);

    public function medicineSystem($medicineSystem);

    public function name($name);

    public function nonProprietaryName($nonProprietaryName);

    public function potentialAction($potentialAction);

    public function proprietaryName($proprietaryName);

    public function recognizingAuthority($recognizingAuthority);

    public function recommendedIntake($recommendedIntake);

    public function relevantSpecialty($relevantSpecialty);

    public function safetyConsideration($safetyConsideration);

    public function sameAs($sameAs);

    public function study($study);

    public function subjectOf($subjectOf);

    public function targetPopulation($targetPopulation);

    public function url($url);

}
