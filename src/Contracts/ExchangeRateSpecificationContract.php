<?php

namespace Spatie\SchemaOrg\Contracts;

interface ExchangeRateSpecificationContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function currency($currency);

    public function currentExchangeRate($currentExchangeRate);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function exchangeRateSpread($exchangeRateSpread);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
