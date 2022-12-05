<?php

namespace Spatie\SchemaOrg\Contracts;

interface MedicalDeviceContract
{
    public function additionalType($additionalType);

    public function adverseOutcome($adverseOutcome);

    public function alternateName($alternateName);

    public function code($code);

    public function contraindication($contraindication);

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

    public function postOp($postOp);

    public function potentialAction($potentialAction);

    public function preOp($preOp);

    public function procedure($procedure);

    public function recognizingAuthority($recognizingAuthority);

    public function relevantSpecialty($relevantSpecialty);

    public function sameAs($sameAs);

    public function seriousAdverseOutcome($seriousAdverseOutcome);

    public function study($study);

    public function subjectOf($subjectOf);

    public function url($url);
}
