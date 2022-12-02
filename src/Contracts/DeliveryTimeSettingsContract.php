<?php

namespace Spatie\SchemaOrg\Contracts;

interface DeliveryTimeSettingsContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function deliveryTime($deliveryTime);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function isUnlabelledFallback($isUnlabelledFallback);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function shippingDestination($shippingDestination);

    public function subjectOf($subjectOf);

    public function transitTimeLabel($transitTimeLabel);

    public function url($url);
}
