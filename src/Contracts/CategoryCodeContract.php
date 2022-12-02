<?php

namespace Spatie\SchemaOrg\Contracts;

interface CategoryCodeContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function codeValue($codeValue);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function inCodeSet($inCodeSet);

    public function inDefinedTermSet($inDefinedTermSet);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function termCode($termCode);

    public function url($url);
}
