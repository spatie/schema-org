<?php

namespace Spatie\SchemaOrg\Contracts;

interface DrugContract
{
    public function activeIngredient($activeIngredient);

    public function additionalType($additionalType);

    public function administrationRoute($administrationRoute);

    public function alcoholWarning($alcoholWarning);

    public function alternateName($alternateName);

    public function availableStrength($availableStrength);

    public function breastfeedingWarning($breastfeedingWarning);

    public function clincalPharmacology($clincalPharmacology);

    public function clinicalPharmacology($clinicalPharmacology);

    public function code($code);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function dosageForm($dosageForm);

    public function doseSchedule($doseSchedule);

    public function drugClass($drugClass);

    public function drugUnit($drugUnit);

    public function foodWarning($foodWarning);

    public function guideline($guideline);

    public function identifier($identifier);

    public function image($image);

    public function includedInHealthInsurancePlan($includedInHealthInsurancePlan);

    public function interactingDrug($interactingDrug);

    public function isAvailableGenerically($isAvailableGenerically);

    public function isProprietary($isProprietary);

    public function labelDetails($labelDetails);

    public function legalStatus($legalStatus);

    public function mainEntityOfPage($mainEntityOfPage);

    public function manufacturer($manufacturer);

    public function maximumIntake($maximumIntake);

    public function mechanismOfAction($mechanismOfAction);

    public function medicineSystem($medicineSystem);

    public function name($name);

    public function nonProprietaryName($nonProprietaryName);

    public function overdosage($overdosage);

    public function potentialAction($potentialAction);

    public function pregnancyCategory($pregnancyCategory);

    public function pregnancyWarning($pregnancyWarning);

    public function prescribingInfo($prescribingInfo);

    public function prescriptionStatus($prescriptionStatus);

    public function proprietaryName($proprietaryName);

    public function recognizingAuthority($recognizingAuthority);

    public function relatedDrug($relatedDrug);

    public function relevantSpecialty($relevantSpecialty);

    public function rxcui($rxcui);

    public function sameAs($sameAs);

    public function study($study);

    public function subjectOf($subjectOf);

    public function url($url);

    public function warning($warning);

}
