<?php

namespace Spatie\SchemaOrg\Contracts;

interface MerchantReturnPolicySeasonalOverrideContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function endDate($endDate);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function merchantReturnDays($merchantReturnDays);

    public function name($name);

    public function potentialAction($potentialAction);

    public function returnPolicyCategory($returnPolicyCategory);

    public function sameAs($sameAs);

    public function startDate($startDate);

    public function subjectOf($subjectOf);

    public function url($url);
}
