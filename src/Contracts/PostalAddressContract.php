<?php

namespace Spatie\SchemaOrg\Contracts;

interface PostalAddressContract
{
    public function addressCountry($addressCountry);

    public function addressLocality($addressLocality);

    public function addressRegion($addressRegion);

    public function postOfficeBoxNumber($postOfficeBoxNumber);

    public function postalCode($postalCode);

    public function streetAddress($streetAddress);

    public function areaServed($areaServed);

    public function availableLanguage($availableLanguage);

    public function contactOption($contactOption);

    public function contactType($contactType);

    public function email($email);

    public function faxNumber($faxNumber);

    public function hoursAvailable($hoursAvailable);

    public function productSupported($productSupported);

    public function serviceArea($serviceArea);

    public function telephone($telephone);

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
