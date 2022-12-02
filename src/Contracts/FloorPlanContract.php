<?php

namespace Spatie\SchemaOrg\Contracts;

interface FloorPlanContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function amenityFeature($amenityFeature);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function floorSize($floorSize);

    public function identifier($identifier);

    public function image($image);

    public function isPlanForApartment($isPlanForApartment);

    public function layoutImage($layoutImage);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function numberOfAccommodationUnits($numberOfAccommodationUnits);

    public function numberOfAvailableAccommodationUnits($numberOfAvailableAccommodationUnits);

    public function numberOfBathroomsTotal($numberOfBathroomsTotal);

    public function numberOfBedrooms($numberOfBedrooms);

    public function numberOfFullBathrooms($numberOfFullBathrooms);

    public function numberOfPartialBathrooms($numberOfPartialBathrooms);

    public function numberOfRooms($numberOfRooms);

    public function petsAllowed($petsAllowed);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
