<?php

namespace Spatie\SchemaOrg\Contracts;

interface MerchantReturnPolicyContract
{
    public function additionalProperty($additionalProperty);

    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function applicableCountry($applicableCountry);

    public function customerRemorseReturnFees($customerRemorseReturnFees);

    public function customerRemorseReturnLabelSource($customerRemorseReturnLabelSource);

    public function customerRemorseReturnShippingFeesAmount($customerRemorseReturnShippingFeesAmount);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function inStoreReturnsOffered($inStoreReturnsOffered);

    public function itemCondition($itemCondition);

    public function itemDefectReturnFees($itemDefectReturnFees);

    public function itemDefectReturnLabelSource($itemDefectReturnLabelSource);

    public function itemDefectReturnShippingFeesAmount($itemDefectReturnShippingFeesAmount);

    public function mainEntityOfPage($mainEntityOfPage);

    public function merchantReturnDays($merchantReturnDays);

    public function merchantReturnLink($merchantReturnLink);

    public function name($name);

    public function potentialAction($potentialAction);

    public function refundType($refundType);

    public function restockingFee($restockingFee);

    public function returnFees($returnFees);

    public function returnLabelSource($returnLabelSource);

    public function returnMethod($returnMethod);

    public function returnPolicyCategory($returnPolicyCategory);

    public function returnPolicyCountry($returnPolicyCountry);

    public function returnPolicySeasonalOverride($returnPolicySeasonalOverride);

    public function returnShippingFeesAmount($returnShippingFeesAmount);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
