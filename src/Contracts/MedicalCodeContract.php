<?php

namespace Spatie\SchemaOrg\Contracts;

interface MedicalCodeContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function code($code);

    public function codeValue($codeValue);

    public function codingSystem($codingSystem);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function funding($funding);

    public function guideline($guideline);

    public function identifier($identifier);

    public function image($image);

    public function inCodeSet($inCodeSet);

    public function inDefinedTermSet($inDefinedTermSet);

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

    public function termCode($termCode);

    public function url($url);
}
