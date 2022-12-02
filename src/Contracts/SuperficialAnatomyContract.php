<?php

namespace Spatie\SchemaOrg\Contracts;

interface SuperficialAnatomyContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function associatedPathophysiology($associatedPathophysiology);

    public function code($code);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

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

    public function relatedAnatomy($relatedAnatomy);

    public function relatedCondition($relatedCondition);

    public function relatedTherapy($relatedTherapy);

    public function relevantSpecialty($relevantSpecialty);

    public function sameAs($sameAs);

    public function significance($significance);

    public function study($study);

    public function subjectOf($subjectOf);

    public function url($url);
}
