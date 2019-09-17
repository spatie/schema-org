<?php

namespace Spatie\SchemaOrg\Contracts;

interface OfferContract
{
    public function acceptedPaymentMethod($acceptedPaymentMethod);

    public function addOn($addOn);

    public function advanceBookingRequirement($advanceBookingRequirement);

    public function aggregateRating($aggregateRating);

    public function areaServed($areaServed);

    public function availability($availability);

    public function availabilityEnds($availabilityEnds);

    public function availabilityStarts($availabilityStarts);

    public function availableAtOrFrom($availableAtOrFrom);

    public function availableDeliveryMethod($availableDeliveryMethod);

    public function businessFunction($businessFunction);

    public function category($category);

    public function deliveryLeadTime($deliveryLeadTime);

    public function eligibleCustomerType($eligibleCustomerType);

    public function eligibleDuration($eligibleDuration);

    public function eligibleQuantity($eligibleQuantity);

    public function eligibleRegion($eligibleRegion);

    public function eligibleTransactionVolume($eligibleTransactionVolume);

    public function gtin12($gtin12);

    public function gtin13($gtin13);

    public function gtin14($gtin14);

    public function gtin8($gtin8);

    public function includesObject($includesObject);

    public function ineligibleRegion($ineligibleRegion);

    public function inventoryLevel($inventoryLevel);

    public function itemCondition($itemCondition);

    public function itemOffered($itemOffered);

    public function mpn($mpn);

    public function price($price);

    public function priceCurrency($priceCurrency);

    public function priceSpecification($priceSpecification);

    public function priceValidUntil($priceValidUntil);

    public function review($review);

    public function reviews($reviews);

    public function seller($seller);

    public function serialNumber($serialNumber);

    public function sku($sku);

    public function validFrom($validFrom);

    public function validThrough($validThrough);

    public function warranty($warranty);

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
