<?php

namespace Spatie\SchemaOrg\Contracts;

interface ServiceChannelContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function availableLanguage($availableLanguage);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function processingTime($processingTime);

    public function providesService($providesService);

    public function sameAs($sameAs);

    public function serviceLocation($serviceLocation);

    public function servicePhone($servicePhone);

    public function servicePostalAddress($servicePostalAddress);

    public function serviceSmsNumber($serviceSmsNumber);

    public function serviceUrl($serviceUrl);

    public function subjectOf($subjectOf);

    public function url($url);
}
