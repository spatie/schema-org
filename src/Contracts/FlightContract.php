<?php

namespace Spatie\SchemaOrg\Contracts;

interface FlightContract
{
    public function additionalType($additionalType);

    public function aircraft($aircraft);

    public function alternateName($alternateName);

    public function arrivalAirport($arrivalAirport);

    public function arrivalGate($arrivalGate);

    public function arrivalTerminal($arrivalTerminal);

    public function arrivalTime($arrivalTime);

    public function boardingPolicy($boardingPolicy);

    public function carrier($carrier);

    public function departureAirport($departureAirport);

    public function departureGate($departureGate);

    public function departureTerminal($departureTerminal);

    public function departureTime($departureTime);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function estimatedFlightDuration($estimatedFlightDuration);

    public function flightDistance($flightDistance);

    public function flightNumber($flightNumber);

    public function identifier($identifier);

    public function image($image);

    public function itinerary($itinerary);

    public function mainEntityOfPage($mainEntityOfPage);

    public function mealService($mealService);

    public function name($name);

    public function offers($offers);

    public function partOfTrip($partOfTrip);

    public function potentialAction($potentialAction);

    public function provider($provider);

    public function sameAs($sameAs);

    public function seller($seller);

    public function subTrip($subTrip);

    public function subjectOf($subjectOf);

    public function url($url);

    public function webCheckinTime($webCheckinTime);
}
