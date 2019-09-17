<?php

namespace Spatie\SchemaOrg\Contracts;

interface OrganizationRoleContract
{
    public function numberedPosition($numberedPosition);

    public function endDate($endDate);

    public function namedPosition($namedPosition);

    public function roleName($roleName);

    public function startDate($startDate);

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
