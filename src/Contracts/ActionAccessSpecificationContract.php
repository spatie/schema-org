<?php

namespace Spatie\SchemaOrg\Contracts;

interface ActionAccessSpecificationContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function availabilityEnds($availabilityEnds);

    public function availabilityStarts($availabilityStarts);

    public function category($category);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function eligibleRegion($eligibleRegion);

    public function expectsAcceptanceOf($expectsAcceptanceOf);

    public function identifier($identifier);

    public function image($image);

    public function ineligibleRegion($ineligibleRegion);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function requiresSubscription($requiresSubscription);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
