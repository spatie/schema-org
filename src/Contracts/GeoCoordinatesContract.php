<?php

namespace Spatie\SchemaOrg\Contracts;

interface GeoCoordinatesContract
{
    public function address($address);

    public function addressCountry($addressCountry);

    public function elevation($elevation);

    public function latitude($latitude);

    public function longitude($longitude);

    public function postalCode($postalCode);

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
