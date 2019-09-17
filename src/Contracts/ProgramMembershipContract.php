<?php

namespace Spatie\SchemaOrg\Contracts;

interface ProgramMembershipContract
{
    public function hostingOrganization($hostingOrganization);

    public function member($member);

    public function members($members);

    public function membershipNumber($membershipNumber);

    public function programName($programName);

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
