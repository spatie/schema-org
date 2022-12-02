<?php

namespace Spatie\SchemaOrg\Contracts;

interface OccupationalTherapyContract
{
    public function additionalType($additionalType);

    public function adverseOutcome($adverseOutcome);

    public function alternateName($alternateName);

    public function bodyLocation($bodyLocation);

    public function code($code);

    public function contraindication($contraindication);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function doseSchedule($doseSchedule);

    public function drug($drug);

    public function duplicateTherapy($duplicateTherapy);

    public function followup($followup);

    public function funding($funding);

    public function guideline($guideline);

    public function howPerformed($howPerformed);

    public function identifier($identifier);

    public function image($image);

    public function legalStatus($legalStatus);

    public function mainEntityOfPage($mainEntityOfPage);

    public function medicineSystem($medicineSystem);

    public function name($name);

    public function potentialAction($potentialAction);

    public function preparation($preparation);

    public function procedureType($procedureType);

    public function recognizingAuthority($recognizingAuthority);

    public function relevantSpecialty($relevantSpecialty);

    public function sameAs($sameAs);

    public function seriousAdverseOutcome($seriousAdverseOutcome);

    public function status($status);

    public function study($study);

    public function subjectOf($subjectOf);

    public function url($url);
}
