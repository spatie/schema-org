<?php

namespace Spatie\SchemaOrg\Contracts;

interface BusinessAudienceContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function audienceType($audienceType);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function geographicArea($geographicArea);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function numberOfEmployees($numberOfEmployees);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);

    public function yearlyRevenue($yearlyRevenue);

    public function yearsInOperation($yearsInOperation);
}
