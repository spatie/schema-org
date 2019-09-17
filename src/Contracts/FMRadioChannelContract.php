<?php

namespace Spatie\SchemaOrg\Contracts;

interface FMRadioChannelContract
{
    public function broadcastChannelId($broadcastChannelId);

    public function broadcastFrequency($broadcastFrequency);

    public function broadcastServiceTier($broadcastServiceTier);

    public function genre($genre);

    public function inBroadcastLineup($inBroadcastLineup);

    public function providesBroadcastService($providesBroadcastService);

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
