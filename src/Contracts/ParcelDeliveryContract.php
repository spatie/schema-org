<?php

namespace Spatie\SchemaOrg\Contracts;

interface ParcelDeliveryContract
{
    public function carrier($carrier);

    public function deliveryAddress($deliveryAddress);

    public function deliveryStatus($deliveryStatus);

    public function expectedArrivalFrom($expectedArrivalFrom);

    public function expectedArrivalUntil($expectedArrivalUntil);

    public function hasDeliveryMethod($hasDeliveryMethod);

    public function itemShipped($itemShipped);

    public function originAddress($originAddress);

    public function partOfOrder($partOfOrder);

    public function provider($provider);

    public function trackingNumber($trackingNumber);

    public function trackingUrl($trackingUrl);

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
