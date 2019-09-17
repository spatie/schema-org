<?php

namespace Spatie\SchemaOrg\Contracts;

interface BusinessAudienceContract
{
    public function numberOfEmployees($numberOfEmployees);

    public function yearlyRevenue($yearlyRevenue);

    public function yearsInOperation($yearsInOperation);

    public function audienceType($audienceType);

    public function geographicArea($geographicArea);

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
