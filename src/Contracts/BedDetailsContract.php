<?php

namespace Spatie\SchemaOrg\Contracts;

interface BedDetailsContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function numberOfBeds($numberOfBeds);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function typeOfBed($typeOfBed);

    public function url($url);
}
