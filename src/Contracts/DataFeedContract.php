<?php

namespace Spatie\SchemaOrg\Contracts;

interface DataFeedContract
{
    public function about($about);

    public function abstract($abstract);

    public function accessMode($accessMode);

    public function accessModeSufficient($accessModeSufficient);

    public function accessibilityAPI($accessibilityAPI);

    public function accessibilityControl($accessibilityControl);

    public function accessibilityFeature($accessibilityFeature);

    public function accessibilityHazard($accessibilityHazard);

    public function accessibilitySummary($accessibilitySummary);

    public function accountablePerson($accountablePerson);

    public function acquireLicensePage($acquireLicensePage);

    public function additionalType($additionalType);

    public function aggregateRating($aggregateRating);

    public function alternateName($alternateName);

    public function alternativeHeadline($alternativeHeadline);

    public function archivedAt($archivedAt);

    public function assesses($assesses);

    public function associatedMedia($associatedMedia);

    public function audience($audience);

    public function audio($audio);

    public function author($author);

    public function award($award);

    public function awards($awards);

    public function catalog($catalog);

    public function character($character);

    public function citation($citation);

    public function comment($comment);

    public function commentCount($commentCount);

    public function conditionsOfAccess($conditionsOfAccess);

    public function contentLocation($contentLocation);

    public function contentRating($contentRating);

    public function contentReferenceTime($contentReferenceTime);

    public function contributor($contributor);

    public function copyrightHolder($copyrightHolder);

    public function copyrightNotice($copyrightNotice);

    public function copyrightYear($copyrightYear);

    public function correction($correction);

    public function countryOfOrigin($countryOfOrigin);

    public function creativeWorkStatus($creativeWorkStatus);

    public function creator($creator);

    public function creditText($creditText);

    public function dataFeedElement($dataFeedElement);

    public function datasetTimeInterval($datasetTimeInterval);

    public function dateCreated($dateCreated);

    public function dateModified($dateModified);

    public function datePublished($datePublished);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function discussionUrl($discussionUrl);

    public function distribution($distribution);

    public function editEIDR($editEIDR);

    public function editor($editor);

    public function educationalAlignment($educationalAlignment);

    public function educationalLevel($educationalLevel);

    public function educationalUse($educationalUse);

    public function encoding($encoding);

    public function encodingFormat($encodingFormat);

    public function encodings($encodings);

    public function exampleOfWork($exampleOfWork);

    public function expires($expires);

    public function fileFormat($fileFormat);

    public function funder($funder);

    public function funding($funding);

    public function genre($genre);

    public function hasPart($hasPart);

    public function headline($headline);

    public function identifier($identifier);

    public function image($image);

    public function inLanguage($inLanguage);

    public function includedDataCatalog($includedDataCatalog);

    public function includedInDataCatalog($includedInDataCatalog);

    public function interactionStatistic($interactionStatistic);

    public function interactivityType($interactivityType);

    public function interpretedAsClaim($interpretedAsClaim);

    public function isAccessibleForFree($isAccessibleForFree);

    public function isBasedOn($isBasedOn);

    public function isBasedOnUrl($isBasedOnUrl);

    public function isFamilyFriendly($isFamilyFriendly);

    public function isPartOf($isPartOf);

    public function issn($issn);

    public function keywords($keywords);

    public function learningResourceType($learningResourceType);

    public function license($license);

    public function locationCreated($locationCreated);

    public function mainEntity($mainEntity);

    public function mainEntityOfPage($mainEntityOfPage);

    public function maintainer($maintainer);

    public function material($material);

    public function materialExtent($materialExtent);

    public function measurementTechnique($measurementTechnique);

    public function mentions($mentions);

    public function name($name);

    public function offers($offers);

    public function pattern($pattern);

    public function position($position);

    public function potentialAction($potentialAction);

    public function producer($producer);

    public function provider($provider);

    public function publication($publication);

    public function publisher($publisher);

    public function publisherImprint($publisherImprint);

    public function publishingPrinciples($publishingPrinciples);

    public function recordedAt($recordedAt);

    public function releasedEvent($releasedEvent);

    public function review($review);

    public function reviews($reviews);

    public function sameAs($sameAs);

    public function schemaVersion($schemaVersion);

    public function sdDatePublished($sdDatePublished);

    public function sdLicense($sdLicense);

    public function sdPublisher($sdPublisher);

    public function size($size);

    public function sourceOrganization($sourceOrganization);

    public function spatial($spatial);

    public function spatialCoverage($spatialCoverage);

    public function sponsor($sponsor);

    public function subjectOf($subjectOf);

    public function teaches($teaches);

    public function temporal($temporal);

    public function temporalCoverage($temporalCoverage);

    public function text($text);

    public function thumbnailUrl($thumbnailUrl);

    public function timeRequired($timeRequired);

    public function translationOfWork($translationOfWork);

    public function translator($translator);

    public function typicalAgeRange($typicalAgeRange);

    public function url($url);

    public function usageInfo($usageInfo);

    public function variableMeasured($variableMeasured);

    public function variablesMeasured($variablesMeasured);

    public function version($version);

    public function video($video);

    public function workExample($workExample);

    public function workTranslation($workTranslation);
}
