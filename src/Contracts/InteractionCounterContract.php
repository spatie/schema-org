<?php

namespace Spatie\SchemaOrg\Contracts;

interface InteractionCounterContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function endTime($endTime);

    public function identifier($identifier);

    public function image($image);

    public function interactionService($interactionService);

    public function interactionType($interactionType);

    public function location($location);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function startTime($startTime);

    public function subjectOf($subjectOf);

    public function url($url);

    public function userInteractionCount($userInteractionCount);
}
