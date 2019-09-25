<?php

namespace Spatie\SchemaOrg\Contracts;

interface TrainTripContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function arrivalPlatform($arrivalPlatform);

    public function arrivalStation($arrivalStation);

    public function arrivalTime($arrivalTime);

    public function departurePlatform($departurePlatform);

    public function departureStation($departureStation);

    public function departureTime($departureTime);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function offers($offers);

    public function potentialAction($potentialAction);

    public function provider($provider);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function trainName($trainName);

    public function trainNumber($trainNumber);

    public function url($url);

}
