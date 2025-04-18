<?php

namespace Spatie\SchemaOrg\Contracts;

interface ExerciseActionContract
{
    public function actionProcess($actionProcess);

    public function actionStatus($actionStatus);

    public function additionalType($additionalType);

    public function agent($agent);

    public function alternateName($alternateName);

    public function audience($audience);

    public function course($course);

    public function description($description);

    public function diet($diet);

    public function disambiguatingDescription($disambiguatingDescription);

    public function distance($distance);

    public function endTime($endTime);

    public function error($error);

    public function event($event);

    public function exerciseCourse($exerciseCourse);

    public function exercisePlan($exercisePlan);

    public function exerciseRelatedDiet($exerciseRelatedDiet);

    public function exerciseType($exerciseType);

    public function fromLocation($fromLocation);

    public function identifier($identifier);

    public function image($image);

    public function instrument($instrument);

    public function location($location);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function object($object);

    public function opponent($opponent);

    public function participant($participant);

    public function potentialAction($potentialAction);

    public function provider($provider);

    public function result($result);

    public function sameAs($sameAs);

    public function sportsActivityLocation($sportsActivityLocation);

    public function sportsEvent($sportsEvent);

    public function sportsTeam($sportsTeam);

    public function startTime($startTime);

    public function subjectOf($subjectOf);

    public function target($target);

    public function toLocation($toLocation);

    public function url($url);
}
