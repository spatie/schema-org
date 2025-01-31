<?php

namespace Spatie\SchemaOrg\Contracts;

interface MemberProgramTierContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function hasTierBenefit($hasTierBenefit);

    public function hasTierRequirement($hasTierRequirement);

    public function identifier($identifier);

    public function image($image);

    public function isTierOf($isTierOf);

    public function mainEntityOfPage($mainEntityOfPage);

    public function membershipPointsEarned($membershipPointsEarned);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
