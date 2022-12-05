<?php

namespace Spatie\SchemaOrg\Contracts;

interface ShippingDeliveryTimeContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function businessDays($businessDays);

    public function cutoffTime($cutoffTime);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function handlingTime($handlingTime);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function transitTime($transitTime);

    public function url($url);
}
