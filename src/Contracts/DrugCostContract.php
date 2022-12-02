<?php

namespace Spatie\SchemaOrg\Contracts;

interface DrugCostContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function applicableLocation($applicableLocation);

    public function code($code);

    public function costCategory($costCategory);

    public function costCurrency($costCurrency);

    public function costOrigin($costOrigin);

    public function costPerUnit($costPerUnit);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function drugUnit($drugUnit);

    public function funding($funding);

    public function guideline($guideline);

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

    public function study($study);

    public function subjectOf($subjectOf);

    public function url($url);
}
