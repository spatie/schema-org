<?php

namespace Spatie\SchemaOrg\Contracts;

interface CanalContract
{
    public function additionalProperty($additionalProperty);

    public function address($address);

    public function aggregateRating($aggregateRating);

    public function amenityFeature($amenityFeature);

    public function branchCode($branchCode);

    public function containedIn($containedIn);

    public function containedInPlace($containedInPlace);

    public function containsPlace($containsPlace);

    public function event($event);

    public function events($events);

    public function faxNumber($faxNumber);

    public function geo($geo);

    public function globalLocationNumber($globalLocationNumber);

    public function hasMap($hasMap);

    public function isAccessibleForFree($isAccessibleForFree);

    public function isicV4($isicV4);

    public function latitude($latitude);

    public function logo($logo);

    public function longitude($longitude);

    public function map($map);

    public function maps($maps);

    public function maximumAttendeeCapacity($maximumAttendeeCapacity);

    public function openingHoursSpecification($openingHoursSpecification);

    public function photo($photo);

    public function photos($photos);

    public function publicAccess($publicAccess);

    public function review($review);

    public function reviews($reviews);

    public function slogan($slogan);

    public function smokingAllowed($smokingAllowed);

    public function specialOpeningHoursSpecification($specialOpeningHoursSpecification);

    public function telephone($telephone);

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
