<?php

namespace Spatie\SchemaOrg\Contracts;

interface ContactPointContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function areaServed($areaServed);

    public function availableLanguage($availableLanguage);

    public function contactOption($contactOption);

    public function contactType($contactType);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function email($email);

    public function faxNumber($faxNumber);

    public function hoursAvailable($hoursAvailable);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function productSupported($productSupported);

    public function sameAs($sameAs);

    public function serviceArea($serviceArea);

    public function subjectOf($subjectOf);

    public function telephone($telephone);

    public function url($url);
}
