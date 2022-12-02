<?php

namespace Spatie\SchemaOrg\Contracts;

interface BusTripContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function arrivalBusStop($arrivalBusStop);

    public function arrivalTime($arrivalTime);

    public function busName($busName);

    public function busNumber($busNumber);

    public function departureBusStop($departureBusStop);

    public function departureTime($departureTime);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function itinerary($itinerary);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function offers($offers);

    public function partOfTrip($partOfTrip);

    public function potentialAction($potentialAction);

    public function provider($provider);

    public function sameAs($sameAs);

    public function subTrip($subTrip);

    public function subjectOf($subjectOf);

    public function url($url);
}
