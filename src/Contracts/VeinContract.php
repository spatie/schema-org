<?php

namespace Spatie\SchemaOrg\Contracts;

interface VeinContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function associatedPathophysiology($associatedPathophysiology);

    public function bodyLocation($bodyLocation);

    public function code($code);

    public function connectedTo($connectedTo);

    public function description($description);

    public function diagram($diagram);

    public function disambiguatingDescription($disambiguatingDescription);

    public function drainsTo($drainsTo);

    public function funding($funding);

    public function guideline($guideline);

    public function identifier($identifier);

    public function image($image);

    public function legalStatus($legalStatus);

    public function mainEntityOfPage($mainEntityOfPage);

    public function medicineSystem($medicineSystem);

    public function name($name);

    public function partOfSystem($partOfSystem);

    public function potentialAction($potentialAction);

    public function recognizingAuthority($recognizingAuthority);

    public function regionDrained($regionDrained);

    public function relatedCondition($relatedCondition);

    public function relatedTherapy($relatedTherapy);

    public function relevantSpecialty($relevantSpecialty);

    public function sameAs($sameAs);

    public function study($study);

    public function subStructure($subStructure);

    public function subjectOf($subjectOf);

    public function tributary($tributary);

    public function url($url);
}
