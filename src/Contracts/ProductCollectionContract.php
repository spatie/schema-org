<?php

namespace Spatie\SchemaOrg\Contracts;

interface ProductCollectionContract
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

    public function additionalProperty($additionalProperty);

    public function additionalType($additionalType);

    public function aggregateRating($aggregateRating);

    public function alternateName($alternateName);

    public function alternativeHeadline($alternativeHeadline);

    public function archivedAt($archivedAt);

    public function asin($asin);

    public function assesses($assesses);

    public function associatedMedia($associatedMedia);

    public function audience($audience);

    public function audio($audio);

    public function author($author);

    public function award($award);

    public function awards($awards);

    public function brand($brand);

    public function category($category);

    public function character($character);

    public function citation($citation);

    public function collectionSize($collectionSize);

    public function color($color);

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

    public function countryOfAssembly($countryOfAssembly);

    public function countryOfLastProcessing($countryOfLastProcessing);

    public function countryOfOrigin($countryOfOrigin);

    public function creativeWorkStatus($creativeWorkStatus);

    public function creator($creator);

    public function creditText($creditText);

    public function dateCreated($dateCreated);

    public function dateModified($dateModified);

    public function datePublished($datePublished);

    public function depth($depth);

    public function description($description);

    public function digitalSourceType($digitalSourceType);

    public function disambiguatingDescription($disambiguatingDescription);

    public function discussionUrl($discussionUrl);

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

    public function gtin($gtin);

    public function gtin12($gtin12);

    public function gtin13($gtin13);

    public function gtin14($gtin14);

    public function gtin8($gtin8);

    public function hasAdultConsideration($hasAdultConsideration);

    public function hasEnergyConsumptionDetails($hasEnergyConsumptionDetails);

    public function hasMeasurement($hasMeasurement);

    public function hasMerchantReturnPolicy($hasMerchantReturnPolicy);

    public function hasPart($hasPart);

    public function hasProductReturnPolicy($hasProductReturnPolicy);

    public function headline($headline);

    public function height($height);

    public function identifier($identifier);

    public function image($image);

    public function inLanguage($inLanguage);

    public function inProductGroupWithID($inProductGroupWithID);

    public function includesObject($includesObject);

    public function interactionStatistic($interactionStatistic);

    public function interactivityType($interactivityType);

    public function interpretedAsClaim($interpretedAsClaim);

    public function isAccessibleForFree($isAccessibleForFree);

    public function isAccessoryOrSparePartFor($isAccessoryOrSparePartFor);

    public function isBasedOn($isBasedOn);

    public function isBasedOnUrl($isBasedOnUrl);

    public function isConsumableFor($isConsumableFor);

    public function isFamilyFriendly($isFamilyFriendly);

    public function isPartOf($isPartOf);

    public function isRelatedTo($isRelatedTo);

    public function isSimilarTo($isSimilarTo);

    public function isVariantOf($isVariantOf);

    public function itemCondition($itemCondition);

    public function keywords($keywords);

    public function learningResourceType($learningResourceType);

    public function license($license);

    public function locationCreated($locationCreated);

    public function logo($logo);

    public function mainEntity($mainEntity);

    public function mainEntityOfPage($mainEntityOfPage);

    public function maintainer($maintainer);

    public function manufacturer($manufacturer);

    public function material($material);

    public function materialExtent($materialExtent);

    public function mentions($mentions);

    public function mobileUrl($mobileUrl);

    public function model($model);

    public function mpn($mpn);

    public function name($name);

    public function negativeNotes($negativeNotes);

    public function nsn($nsn);

    public function offers($offers);

    public function pattern($pattern);

    public function position($position);

    public function positiveNotes($positiveNotes);

    public function potentialAction($potentialAction);

    public function producer($producer);

    public function productID($productID);

    public function productionDate($productionDate);

    public function provider($provider);

    public function publication($publication);

    public function publisher($publisher);

    public function publisherImprint($publisherImprint);

    public function publishingPrinciples($publishingPrinciples);

    public function purchaseDate($purchaseDate);

    public function recordedAt($recordedAt);

    public function releaseDate($releaseDate);

    public function releasedEvent($releasedEvent);

    public function review($review);

    public function reviews($reviews);

    public function sameAs($sameAs);

    public function schemaVersion($schemaVersion);

    public function sdDatePublished($sdDatePublished);

    public function sdLicense($sdLicense);

    public function sdPublisher($sdPublisher);

    public function size($size);

    public function sku($sku);

    public function slogan($slogan);

    public function sourceOrganization($sourceOrganization);

    public function spatial($spatial);

    public function spatialCoverage($spatialCoverage);

    public function sponsor($sponsor);

    public function subjectOf($subjectOf);

    public function teaches($teaches);

    public function temporal($temporal);

    public function temporalCoverage($temporalCoverage);

    public function text($text);

    public function thumbnail($thumbnail);

    public function thumbnailUrl($thumbnailUrl);

    public function timeRequired($timeRequired);

    public function translationOfWork($translationOfWork);

    public function translator($translator);

    public function typicalAgeRange($typicalAgeRange);

    public function url($url);

    public function usageInfo($usageInfo);

    public function version($version);

    public function video($video);

    public function weight($weight);

    public function width($width);

    public function workExample($workExample);

    public function workTranslation($workTranslation);
}
