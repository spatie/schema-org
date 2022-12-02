<?php

namespace Spatie\SchemaOrg\Contracts;

interface PatientContract
{
    public function additionalName($additionalName);

    public function additionalType($additionalType);

    public function address($address);

    public function affiliation($affiliation);

    public function alternateName($alternateName);

    public function alumniOf($alumniOf);

    public function audienceType($audienceType);

    public function award($award);

    public function awards($awards);

    public function birthDate($birthDate);

    public function birthPlace($birthPlace);

    public function brand($brand);

    public function callSign($callSign);

    public function children($children);

    public function colleague($colleague);

    public function colleagues($colleagues);

    public function contactPoint($contactPoint);

    public function contactPoints($contactPoints);

    public function deathDate($deathDate);

    public function deathPlace($deathPlace);

    public function description($description);

    public function diagnosis($diagnosis);

    public function disambiguatingDescription($disambiguatingDescription);

    public function drug($drug);

    public function duns($duns);

    public function email($email);

    public function familyName($familyName);

    public function faxNumber($faxNumber);

    public function follows($follows);

    public function funder($funder);

    public function funding($funding);

    public function gender($gender);

    public function geographicArea($geographicArea);

    public function givenName($givenName);

    public function globalLocationNumber($globalLocationNumber);

    public function hasCredential($hasCredential);

    public function hasOccupation($hasOccupation);

    public function hasOfferCatalog($hasOfferCatalog);

    public function hasPOS($hasPOS);

    public function healthCondition($healthCondition);

    public function height($height);

    public function homeLocation($homeLocation);

    public function honorificPrefix($honorificPrefix);

    public function honorificSuffix($honorificSuffix);

    public function identifier($identifier);

    public function image($image);

    public function interactionStatistic($interactionStatistic);

    public function isicV4($isicV4);

    public function jobTitle($jobTitle);

    public function knows($knows);

    public function knowsAbout($knowsAbout);

    public function knowsLanguage($knowsLanguage);

    public function mainEntityOfPage($mainEntityOfPage);

    public function makesOffer($makesOffer);

    public function memberOf($memberOf);

    public function naics($naics);

    public function name($name);

    public function nationality($nationality);

    public function netWorth($netWorth);

    public function owns($owns);

    public function parent($parent);

    public function parents($parents);

    public function performerIn($performerIn);

    public function potentialAction($potentialAction);

    public function publishingPrinciples($publishingPrinciples);

    public function relatedTo($relatedTo);

    public function requiredGender($requiredGender);

    public function requiredMaxAge($requiredMaxAge);

    public function requiredMinAge($requiredMinAge);

    public function sameAs($sameAs);

    public function seeks($seeks);

    public function sibling($sibling);

    public function siblings($siblings);

    public function sponsor($sponsor);

    public function spouse($spouse);

    public function subjectOf($subjectOf);

    public function suggestedAge($suggestedAge);

    public function suggestedGender($suggestedGender);

    public function suggestedMaxAge($suggestedMaxAge);

    public function suggestedMeasurement($suggestedMeasurement);

    public function suggestedMinAge($suggestedMinAge);

    public function taxID($taxID);

    public function telephone($telephone);

    public function url($url);

    public function vatID($vatID);

    public function weight($weight);

    public function workLocation($workLocation);

    public function worksFor($worksFor);
}
