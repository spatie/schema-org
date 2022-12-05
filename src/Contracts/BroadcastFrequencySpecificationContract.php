<?php

namespace Spatie\SchemaOrg\Contracts;

interface BroadcastFrequencySpecificationContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function broadcastFrequencyValue($broadcastFrequencyValue);

    public function broadcastSignalModulation($broadcastSignalModulation);

    public function broadcastSubChannel($broadcastSubChannel);

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
