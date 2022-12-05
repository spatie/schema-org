<?php

namespace Spatie\SchemaOrg\Contracts;

interface ProgramMembershipContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function hostingOrganization($hostingOrganization);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function member($member);

    public function members($members);

    public function membershipNumber($membershipNumber);

    public function membershipPointsEarned($membershipPointsEarned);

    public function name($name);

    public function potentialAction($potentialAction);

    public function programName($programName);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
