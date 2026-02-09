<?php

namespace Spatie\SchemaOrg\Contracts;

interface ShippingConditionsContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function depth($depth);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function doesNotShip($doesNotShip);

    public function height($height);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function numItems($numItems);

    public function orderValue($orderValue);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function seasonalOverride($seasonalOverride);

    public function shippingDestination($shippingDestination);

    public function shippingOrigin($shippingOrigin);

    public function shippingRate($shippingRate);

    public function subjectOf($subjectOf);

    public function transitTime($transitTime);

    public function url($url);

    public function weight($weight);

    public function width($width);
}
