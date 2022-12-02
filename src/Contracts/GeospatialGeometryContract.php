<?php

namespace Spatie\SchemaOrg\Contracts;

interface GeospatialGeometryContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function geoContains($geoContains);

    public function geoCoveredBy($geoCoveredBy);

    public function geoCovers($geoCovers);

    public function geoCrosses($geoCrosses);

    public function geoDisjoint($geoDisjoint);

    public function geoEquals($geoEquals);

    public function geoIntersects($geoIntersects);

    public function geoOverlaps($geoOverlaps);

    public function geoTouches($geoTouches);

    public function geoWithin($geoWithin);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
