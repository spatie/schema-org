<?php

namespace Spatie\SchemaOrg\Contracts;

interface ScheduleContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function byDay($byDay);

    public function byMonth($byMonth);

    public function byMonthDay($byMonthDay);

    public function byMonthWeek($byMonthWeek);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function duration($duration);

    public function endDate($endDate);

    public function endTime($endTime);

    public function exceptDate($exceptDate);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function repeatCount($repeatCount);

    public function repeatFrequency($repeatFrequency);

    public function sameAs($sameAs);

    public function scheduleTimezone($scheduleTimezone);

    public function startDate($startDate);

    public function startTime($startTime);

    public function subjectOf($subjectOf);

    public function url($url);
}
