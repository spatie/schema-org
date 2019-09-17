<?php

namespace Spatie\SchemaOrg\Contracts;

interface PersonContract
{
    public function additionalName($additionalName);

    public function address($address);

    public function affiliation($affiliation);

    public function alumniOf($alumniOf);

    public function award($award);

    public function awards($awards);

    public function birthDate($birthDate);

    public function birthPlace($birthPlace);

    public function brand($brand);

    public function children($children);

    public function colleague($colleague);

    public function colleagues($colleagues);

    public function contactPoint($contactPoint);

    public function contactPoints($contactPoints);

    public function deathDate($deathDate);

    public function deathPlace($deathPlace);

    public function duns($duns);

    public function email($email);

    public function familyName($familyName);

    public function faxNumber($faxNumber);

    public function follows($follows);

    public function funder($funder);

    public function gender($gender);

    public function givenName($givenName);

    public function globalLocationNumber($globalLocationNumber);

    public function hasOccupation($hasOccupation);

    public function hasOfferCatalog($hasOfferCatalog);

    public function hasPOS($hasPOS);

    public function height($height);

    public function homeLocation($homeLocation);

    public function honorificPrefix($honorificPrefix);

    public function honorificSuffix($honorificSuffix);

    public function isicV4($isicV4);

    public function jobTitle($jobTitle);

    public function knows($knows);

    public function makesOffer($makesOffer);

    public function memberOf($memberOf);

    public function naics($naics);

    public function nationality($nationality);

    public function netWorth($netWorth);

    public function owns($owns);

    public function parent($parent);

    public function parents($parents);

    public function performerIn($performerIn);

    public function publishingPrinciples($publishingPrinciples);

    public function relatedTo($relatedTo);

    public function seeks($seeks);

    public function sibling($sibling);

    public function siblings($siblings);

    public function sponsor($sponsor);

    public function spouse($spouse);

    public function taxID($taxID);

    public function telephone($telephone);

    public function vatID($vatID);

    public function weight($weight);

    public function workLocation($workLocation);

    public function worksFor($worksFor);

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
