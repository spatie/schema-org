<?php

namespace Spatie\SchemaOrg\Contracts;

interface OfferShippingDetailsContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function deliveryTime($deliveryTime);

    public function depth($depth);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function doesNotShip($doesNotShip);

    public function height($height);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function shippingDestination($shippingDestination);

    public function shippingLabel($shippingLabel);

    public function shippingOrigin($shippingOrigin);

    public function shippingRate($shippingRate);

    public function shippingSettingsLink($shippingSettingsLink);

    public function subjectOf($subjectOf);

    public function transitTimeLabel($transitTimeLabel);

    public function url($url);

    public function weight($weight);

    public function width($width);
}
