<?php

namespace Spatie\SchemaOrg\Contracts;

interface ShippingServiceContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function fulfillmentType($fulfillmentType);

    public function handlingTime($handlingTime);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function shippingConditions($shippingConditions);

    public function subjectOf($subjectOf);

    public function url($url);

    public function validForMemberTier($validForMemberTier);
}
