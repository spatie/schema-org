<?php

namespace Spatie\SchemaOrg\Contracts;

interface ProgressStatusContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function label($label);

    public function mainEntityOfPage($mainEntityOfPage);

    public function maxNumber($maxNumber);

    public function minNumber($minNumber);

    public function name($name);

    public function number($number);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
