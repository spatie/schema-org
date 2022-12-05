<?php

namespace Spatie\SchemaOrg\Contracts;

interface LinkRoleContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function endDate($endDate);

    public function identifier($identifier);

    public function image($image);

    public function inLanguage($inLanguage);

    public function linkRelationship($linkRelationship);

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
