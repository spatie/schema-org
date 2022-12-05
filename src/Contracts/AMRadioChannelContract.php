<?php

namespace Spatie\SchemaOrg\Contracts;

interface AMRadioChannelContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function broadcastChannelId($broadcastChannelId);

    public function broadcastFrequency($broadcastFrequency);

    public function broadcastServiceTier($broadcastServiceTier);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function genre($genre);

    public function identifier($identifier);

    public function image($image);

    public function inBroadcastLineup($inBroadcastLineup);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function providesBroadcastService($providesBroadcastService);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
