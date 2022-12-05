<?php

namespace Spatie\SchemaOrg\Contracts;

interface GeoCircleContract
{
    public function additionalType($additionalType);

    public function address($address);

    public function addressCountry($addressCountry);

    public function alternateName($alternateName);

    public function box($box);

    public function circle($circle);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function elevation($elevation);

    public function geoMidpoint($geoMidpoint);

    public function geoRadius($geoRadius);

    public function identifier($identifier);

    public function image($image);

    public function line($line);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function polygon($polygon);

    public function postalCode($postalCode);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
