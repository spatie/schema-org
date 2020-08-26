<?php

namespace Spatie\SchemaOrg\Contracts;

interface TheaterGroupContract
{
    public function additionalType($additionalType);

    public function address($address);

    public function aggregateRating($aggregateRating);

    public function alternateName($alternateName);

    public function alumni($alumni);

    public function areaServed($areaServed);

    public function award($award);

    public function awards($awards);

    public function brand($brand);

    public function contactPoint($contactPoint);

    public function contactPoints($contactPoints);

    public function department($department);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function dissolutionDate($dissolutionDate);

    public function duns($duns);

    public function email($email);

    public function employee($employee);

    public function employees($employees);

    public function event($event);

    public function events($events);

    public function faxNumber($faxNumber);

    public function founder($founder);

    public function founders($founders);

    public function foundingDate($foundingDate);

    public function foundingLocation($foundingLocation);

    public function funder($funder);

    public function globalLocationNumber($globalLocationNumber);

    public function hasOfferCatalog($hasOfferCatalog);

    public function hasPOS($hasPOS);

    public function identifier($identifier);

    public function image($image);

    public function interactionStatistic($interactionStatistic);

    public function isicV4($isicV4);

    public function legalName($legalName);

    public function leiCode($leiCode);

    public function logo($logo);

    public function mainEntityOfPage($mainEntityOfPage);

    public function makesOffer($makesOffer);

    public function member($member);

    public function memberOf($memberOf);

    public function members($members);

    public function naics($naics);

    public function name($name);

    public function numberOfEmployees($numberOfEmployees);

    public function owns($owns);

    public function parentOrganization($parentOrganization);

    public function potentialAction($potentialAction);

    public function publishingPrinciples($publishingPrinciples);

    public function review($review);

    public function reviews($reviews);

    public function sameAs($sameAs);

    public function seeks($seeks);

    public function serviceArea($serviceArea);

    public function slogan($slogan);

    public function sponsor($sponsor);

    public function subOrganization($subOrganization);

    public function subjectOf($subjectOf);

    public function taxID($taxID);

    public function telephone($telephone);

    public function url($url);

    public function vatID($vatID);

}
