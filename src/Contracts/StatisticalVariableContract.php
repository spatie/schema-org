<?php

namespace Spatie\SchemaOrg\Contracts;

interface StatisticalVariableContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function constraintProperty($constraintProperty);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function measuredProperty($measuredProperty);

    public function measurementDenominator($measurementDenominator);

    public function measurementMethod($measurementMethod);

    public function measurementQualifier($measurementQualifier);

    public function measurementTechnique($measurementTechnique);

    public function name($name);

    public function numConstraints($numConstraints);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function statType($statType);

    public function subjectOf($subjectOf);

    public function url($url);
}
