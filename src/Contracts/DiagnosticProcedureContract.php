<?php

namespace Spatie\SchemaOrg\Contracts;

interface DiagnosticProcedureContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function bodyLocation($bodyLocation);

    public function code($code);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

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

    public function status($status);

    public function study($study);

    public function subjectOf($subjectOf);

    public function url($url);
}
