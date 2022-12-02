<?php

namespace Spatie\SchemaOrg\Contracts;

interface PropertyValueSpecificationContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function defaultValue($defaultValue);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function maxValue($maxValue);

    public function minValue($minValue);

    public function multipleValues($multipleValues);

    public function name($name);

    public function potentialAction($potentialAction);

    public function readonlyValue($readonlyValue);

    public function sameAs($sameAs);

    public function stepValue($stepValue);

    public function subjectOf($subjectOf);

    public function url($url);

    public function valueMaxLength($valueMaxLength);

    public function valueMinLength($valueMinLength);

    public function valueName($valueName);

    public function valuePattern($valuePattern);

    public function valueRequired($valueRequired);
}
