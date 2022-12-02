<?php

namespace Spatie\SchemaOrg\Contracts;

interface EngineSpecificationContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function engineDisplacement($engineDisplacement);

    public function enginePower($enginePower);

    public function engineType($engineType);

    public function fuelType($fuelType);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function torque($torque);

    public function url($url);
}
