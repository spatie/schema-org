<?php

namespace Spatie\SchemaOrg\Contracts;

interface ExerciseActionContract
{
    public function course($course);

    public function distance($distance);

    public function exerciseCourse($exerciseCourse);

    public function fromLocation($fromLocation);

    public function opponent($opponent);

    public function sportsActivityLocation($sportsActivityLocation);

    public function sportsEvent($sportsEvent);

    public function sportsTeam($sportsTeam);

    public function toLocation($toLocation);

    public function audience($audience);

    public function event($event);

    public function actionStatus($actionStatus);

    public function agent($agent);

    public function endTime($endTime);

    public function error($error);

    public function instrument($instrument);

    public function location($location);

    public function object($object);

    public function participant($participant);

    public function result($result);

    public function startTime($startTime);

    public function target($target);

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
