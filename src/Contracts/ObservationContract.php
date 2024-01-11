<?php

namespace Spatie\SchemaOrg\Contracts;

interface ObservationContract
{
    public function additionalProperty($additionalProperty);

    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function marginOfError($marginOfError);

    public function maxValue($maxValue);

    public function measuredProperty($measuredProperty);

    public function measurementDenominator($measurementDenominator);

    public function measurementMethod($measurementMethod);

    public function measurementQualifier($measurementQualifier);

    public function measurementTechnique($measurementTechnique);

    public function minValue($minValue);

    public function name($name);

    public function observationAbout($observationAbout);

    public function observationDate($observationDate);

    public function observationPeriod($observationPeriod);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function unitCode($unitCode);

    public function unitText($unitText);

    public function url($url);

    public function value($value);

    public function valueReference($valueReference);

    public function variableMeasured($variableMeasured);
}
