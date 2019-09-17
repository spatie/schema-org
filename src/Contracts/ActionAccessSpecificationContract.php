<?php

namespace Spatie\SchemaOrg\Contracts;

interface ActionAccessSpecificationContract
{
    public function availabilityEnds($availabilityEnds);

    public function availabilityStarts($availabilityStarts);

    public function category($category);

    public function eligibleRegion($eligibleRegion);

    public function expectsAcceptanceOf($expectsAcceptanceOf);

    public function requiresSubscription($requiresSubscription);

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
