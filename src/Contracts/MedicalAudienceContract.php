<?php

namespace Spatie\SchemaOrg\Contracts;

interface MedicalAudienceContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function audienceType($audienceType);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function geographicArea($geographicArea);

    public function healthCondition($healthCondition);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function requiredGender($requiredGender);

    public function requiredMaxAge($requiredMaxAge);

    public function requiredMinAge($requiredMinAge);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function suggestedAge($suggestedAge);

    public function suggestedGender($suggestedGender);

    public function suggestedMaxAge($suggestedMaxAge);

    public function suggestedMeasurement($suggestedMeasurement);

    public function suggestedMinAge($suggestedMinAge);

    public function url($url);
}
