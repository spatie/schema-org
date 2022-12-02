<?php

namespace Spatie\SchemaOrg\Contracts;

interface FlightReservationContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function boardingGroup($boardingGroup);

    public function bookingAgent($bookingAgent);

    public function bookingTime($bookingTime);

    public function broker($broker);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function modifiedTime($modifiedTime);

    public function name($name);

    public function passengerPriorityStatus($passengerPriorityStatus);

    public function passengerSequenceNumber($passengerSequenceNumber);

    public function potentialAction($potentialAction);

    public function priceCurrency($priceCurrency);

    public function programMembershipUsed($programMembershipUsed);

    public function provider($provider);

    public function reservationFor($reservationFor);

    public function reservationId($reservationId);

    public function reservationStatus($reservationStatus);

    public function reservedTicket($reservedTicket);

    public function sameAs($sameAs);

    public function securityScreening($securityScreening);

    public function subjectOf($subjectOf);

    public function totalPrice($totalPrice);

    public function underName($underName);

    public function url($url);
}
