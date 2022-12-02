<?php

namespace Spatie\SchemaOrg\Contracts;

interface DefinedRegionContract
{
    public function additionalType($additionalType);

    public function addressCountry($addressCountry);

    public function addressRegion($addressRegion);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function postalCode($postalCode);

    public function postalCodePrefix($postalCodePrefix);

    public function postalCodeRange($postalCodeRange);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
