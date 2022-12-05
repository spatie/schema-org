<?php

namespace Spatie\SchemaOrg\Contracts;

interface PerformanceRoleContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function characterName($characterName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function endDate($endDate);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function namedPosition($namedPosition);

    public function potentialAction($potentialAction);

    public function roleName($roleName);

    public function sameAs($sameAs);

    public function startDate($startDate);

    public function subjectOf($subjectOf);

    public function url($url);
}
