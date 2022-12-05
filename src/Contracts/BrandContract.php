<?php

namespace Spatie\SchemaOrg\Contracts;

interface BrandContract
{
    public function additionalType($additionalType);

    public function aggregateRating($aggregateRating);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function logo($logo);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function review($review);

    public function sameAs($sameAs);

    public function slogan($slogan);

    public function subjectOf($subjectOf);

    public function url($url);
}
