<?php

namespace Spatie\SchemaOrg\Contracts;

interface EventContract
{
    public function about($about);

    public function actor($actor);

    public function additionalType($additionalType);

    public function aggregateRating($aggregateRating);

    public function alternateName($alternateName);

    public function attendee($attendee);

    public function attendees($attendees);

    public function audience($audience);

    public function composer($composer);

    public function contributor($contributor);

    public function description($description);

    public function director($director);

    public function disambiguatingDescription($disambiguatingDescription);

    public function doorTime($doorTime);

    public function duration($duration);

    public function endDate($endDate);

    public function eventAttendanceMode($eventAttendanceMode);

    public function eventSchedule($eventSchedule);

    public function eventStatus($eventStatus);

    public function funder($funder);

    public function funding($funding);

    public function identifier($identifier);

    public function image($image);

    public function inLanguage($inLanguage);

    public function isAccessibleForFree($isAccessibleForFree);

    public function keywords($keywords);

    public function location($location);

    public function mainEntityOfPage($mainEntityOfPage);

    public function maximumAttendeeCapacity($maximumAttendeeCapacity);

    public function maximumPhysicalAttendeeCapacity($maximumPhysicalAttendeeCapacity);

    public function maximumVirtualAttendeeCapacity($maximumVirtualAttendeeCapacity);

    public function name($name);

    public function offers($offers);

    public function organizer($organizer);

    public function performer($performer);

    public function performers($performers);

    public function potentialAction($potentialAction);

    public function previousStartDate($previousStartDate);

    public function recordedIn($recordedIn);

    public function remainingAttendeeCapacity($remainingAttendeeCapacity);

    public function review($review);

    public function sameAs($sameAs);

    public function sponsor($sponsor);

    public function startDate($startDate);

    public function subEvent($subEvent);

    public function subEvents($subEvents);

    public function subjectOf($subjectOf);

    public function superEvent($superEvent);

    public function translator($translator);

    public function typicalAgeRange($typicalAgeRange);

    public function url($url);

    public function workFeatured($workFeatured);

    public function workPerformed($workPerformed);
}
