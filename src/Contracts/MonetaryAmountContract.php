<?php

namespace Spatie\SchemaOrg\Contracts;

interface MonetaryAmountContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function currency($currency);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function maxValue($maxValue);

    public function minValue($minValue);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);

    public function validFrom($validFrom);

    public function validThrough($validThrough);

    public function value($value);
}
