<?php

namespace Spatie\SchemaOrg\Contracts;

interface SuiteContract
{
    public function accommodationCategory($accommodationCategory);

    public function accommodationFloorPlan($accommodationFloorPlan);

    public function additionalProperty($additionalProperty);

    public function additionalType($additionalType);

    public function address($address);

    public function aggregateRating($aggregateRating);

    public function alternateName($alternateName);

    public function amenityFeature($amenityFeature);

    public function bed($bed);

    public function branchCode($branchCode);

    public function containedIn($containedIn);

    public function containedInPlace($containedInPlace);

    public function containsPlace($containsPlace);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function event($event);

    public function events($events);

    public function faxNumber($faxNumber);

    public function floorLevel($floorLevel);

    public function floorSize($floorSize);

    public function geo($geo);

    public function geoContains($geoContains);

    public function geoCoveredBy($geoCoveredBy);

    public function geoCovers($geoCovers);

    public function geoCrosses($geoCrosses);

    public function geoDisjoint($geoDisjoint);

    public function geoEquals($geoEquals);

    public function geoIntersects($geoIntersects);

    public function geoOverlaps($geoOverlaps);

    public function geoTouches($geoTouches);

    public function geoWithin($geoWithin);

    public function globalLocationNumber($globalLocationNumber);

    public function hasDriveThroughService($hasDriveThroughService);

    public function hasMap($hasMap);

    public function identifier($identifier);

    public function image($image);

    public function isAccessibleForFree($isAccessibleForFree);

    public function isicV4($isicV4);

    public function keywords($keywords);

    public function latitude($latitude);

    public function leaseLength($leaseLength);

    public function logo($logo);

    public function longitude($longitude);

    public function mainEntityOfPage($mainEntityOfPage);

    public function map($map);

    public function maps($maps);

    public function maximumAttendeeCapacity($maximumAttendeeCapacity);

    public function name($name);

    public function numberOfBathroomsTotal($numberOfBathroomsTotal);

    public function numberOfBedrooms($numberOfBedrooms);

    public function numberOfFullBathrooms($numberOfFullBathrooms);

    public function numberOfPartialBathrooms($numberOfPartialBathrooms);

    public function numberOfRooms($numberOfRooms);

    public function occupancy($occupancy);

    public function openingHoursSpecification($openingHoursSpecification);

    public function permittedUsage($permittedUsage);

    public function petsAllowed($petsAllowed);

    public function photo($photo);

    public function photos($photos);

    public function potentialAction($potentialAction);

    public function publicAccess($publicAccess);

    public function review($review);

    public function reviews($reviews);

    public function sameAs($sameAs);

    public function slogan($slogan);

    public function smokingAllowed($smokingAllowed);

    public function specialOpeningHoursSpecification($specialOpeningHoursSpecification);

    public function subjectOf($subjectOf);

    public function telephone($telephone);

    public function tourBookingPage($tourBookingPage);

    public function url($url);

    public function yearBuilt($yearBuilt);
}
