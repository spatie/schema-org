<?php

namespace Spatie\SchemaOrg\Contracts;

interface MerchantReturnPolicyContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function inStoreReturnsOffered($inStoreReturnsOffered);

    public function mainEntityOfPage($mainEntityOfPage);

    public function merchantReturnDays($merchantReturnDays);

    public function merchantReturnLink($merchantReturnLink);

    public function name($name);

    public function potentialAction($potentialAction);

    public function refundType($refundType);

    public function returnFees($returnFees);

    public function returnPolicyCategory($returnPolicyCategory);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);

}
