<?php

namespace Spatie\SchemaOrg\Contracts;

interface DemandContract
{
    public function acceptedPaymentMethod($acceptedPaymentMethod);

    public function additionalType($additionalType);

    public function advanceBookingRequirement($advanceBookingRequirement);

    public function alternateName($alternateName);

    public function areaServed($areaServed);

    public function asin($asin);

    public function availability($availability);

    public function availabilityEnds($availabilityEnds);

    public function availabilityStarts($availabilityStarts);

    public function availableAtOrFrom($availableAtOrFrom);

    public function availableDeliveryMethod($availableDeliveryMethod);

    public function businessFunction($businessFunction);

    public function deliveryLeadTime($deliveryLeadTime);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function eligibleCustomerType($eligibleCustomerType);

    public function eligibleDuration($eligibleDuration);

    public function eligibleQuantity($eligibleQuantity);

    public function eligibleRegion($eligibleRegion);

    public function eligibleTransactionVolume($eligibleTransactionVolume);

    public function gtin($gtin);

    public function gtin12($gtin12);

    public function gtin13($gtin13);

    public function gtin14($gtin14);

    public function gtin8($gtin8);

    public function identifier($identifier);

    public function image($image);

    public function includesObject($includesObject);

    public function ineligibleRegion($ineligibleRegion);

    public function inventoryLevel($inventoryLevel);

    public function itemCondition($itemCondition);

    public function itemOffered($itemOffered);

    public function mainEntityOfPage($mainEntityOfPage);

    public function mpn($mpn);

    public function name($name);

    public function potentialAction($potentialAction);

    public function priceSpecification($priceSpecification);

    public function sameAs($sameAs);

    public function seller($seller);

    public function serialNumber($serialNumber);

    public function sku($sku);

    public function subjectOf($subjectOf);

    public function url($url);

    public function validFrom($validFrom);

    public function validThrough($validThrough);

    public function warranty($warranty);
}
