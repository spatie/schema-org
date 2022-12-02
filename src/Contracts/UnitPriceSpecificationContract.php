<?php

namespace Spatie\SchemaOrg\Contracts;

interface UnitPriceSpecificationContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function billingDuration($billingDuration);

    public function billingIncrement($billingIncrement);

    public function billingStart($billingStart);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function eligibleQuantity($eligibleQuantity);

    public function eligibleTransactionVolume($eligibleTransactionVolume);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function maxPrice($maxPrice);

    public function minPrice($minPrice);

    public function name($name);

    public function potentialAction($potentialAction);

    public function price($price);

    public function priceComponentType($priceComponentType);

    public function priceCurrency($priceCurrency);

    public function priceType($priceType);

    public function referenceQuantity($referenceQuantity);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function unitCode($unitCode);

    public function unitText($unitText);

    public function url($url);

    public function validFrom($validFrom);

    public function validThrough($validThrough);

    public function valueAddedTaxIncluded($valueAddedTaxIncluded);
}
