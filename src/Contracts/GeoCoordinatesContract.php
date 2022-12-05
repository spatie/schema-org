<?php

namespace Spatie\SchemaOrg\Contracts;

interface GeoCoordinatesContract
{
    public function additionalType($additionalType);

    public function address($address);

    public function addressCountry($addressCountry);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function elevation($elevation);

    public function identifier($identifier);

    public function image($image);

    public function latitude($latitude);

    public function longitude($longitude);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function postalCode($postalCode);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
