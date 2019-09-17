<?php

namespace Spatie\SchemaOrg\Contracts;

interface LocationFeatureSpecificationContract
{
    public function hoursAvailable($hoursAvailable);

    public function validFrom($validFrom);

    public function validThrough($validThrough);

    public function maxValue($maxValue);

    public function minValue($minValue);

    public function propertyID($propertyID);

    public function unitCode($unitCode);

    public function unitText($unitText);

    public function value($value);

    public function valueReference($valueReference);

    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);

}
