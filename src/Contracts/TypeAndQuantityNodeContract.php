<?php

namespace Spatie\SchemaOrg\Contracts;

interface TypeAndQuantityNodeContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function amountOfThisGood($amountOfThisGood);

    public function businessFunction($businessFunction);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function typeOfGood($typeOfGood);

    public function unitCode($unitCode);

    public function unitText($unitText);

    public function url($url);
}
