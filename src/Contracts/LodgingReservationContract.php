<?php

namespace Spatie\SchemaOrg\Contracts;

interface LodgingReservationContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function bookingAgent($bookingAgent);

    public function bookingTime($bookingTime);

    public function broker($broker);

    public function checkinTime($checkinTime);

    public function checkoutTime($checkoutTime);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function lodgingUnitDescription($lodgingUnitDescription);

    public function lodgingUnitType($lodgingUnitType);

    public function mainEntityOfPage($mainEntityOfPage);

    public function modifiedTime($modifiedTime);

    public function name($name);

    public function numAdults($numAdults);

    public function numChildren($numChildren);

    public function potentialAction($potentialAction);

    public function priceCurrency($priceCurrency);

    public function programMembershipUsed($programMembershipUsed);

    public function provider($provider);

    public function reservationFor($reservationFor);

    public function reservationId($reservationId);

    public function reservationStatus($reservationStatus);

    public function reservedTicket($reservedTicket);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function totalPrice($totalPrice);

    public function underName($underName);

    public function url($url);
}
