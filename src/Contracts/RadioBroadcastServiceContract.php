<?php

namespace Spatie\SchemaOrg\Contracts;

interface RadioBroadcastServiceContract
{
    public function additionalType($additionalType);

    public function aggregateRating($aggregateRating);

    public function alternateName($alternateName);

    public function area($area);

    public function areaServed($areaServed);

    public function audience($audience);

    public function availableChannel($availableChannel);

    public function award($award);

    public function brand($brand);

    public function broadcastAffiliateOf($broadcastAffiliateOf);

    public function broadcastDisplayName($broadcastDisplayName);

    public function broadcastFrequency($broadcastFrequency);

    public function broadcastTimezone($broadcastTimezone);

    public function broadcaster($broadcaster);

    public function broker($broker);

    public function callSign($callSign);

    public function category($category);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function hasBroadcastChannel($hasBroadcastChannel);

    public function hasOfferCatalog($hasOfferCatalog);

    public function hoursAvailable($hoursAvailable);

    public function identifier($identifier);

    public function image($image);

    public function inLanguage($inLanguage);

    public function isRelatedTo($isRelatedTo);

    public function isSimilarTo($isSimilarTo);

    public function logo($logo);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function offers($offers);

    public function parentService($parentService);

    public function potentialAction($potentialAction);

    public function produces($produces);

    public function provider($provider);

    public function providerMobility($providerMobility);

    public function review($review);

    public function sameAs($sameAs);

    public function serviceArea($serviceArea);

    public function serviceAudience($serviceAudience);

    public function serviceOutput($serviceOutput);

    public function serviceType($serviceType);

    public function slogan($slogan);

    public function subjectOf($subjectOf);

    public function termsOfService($termsOfService);

    public function url($url);

    public function videoFormat($videoFormat);
}
