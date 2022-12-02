<?php

namespace Spatie\SchemaOrg\Contracts;

interface ProductGroupContract
{
    public function additionalProperty($additionalProperty);

    public function additionalType($additionalType);

    public function aggregateRating($aggregateRating);

    public function alternateName($alternateName);

    public function asin($asin);

    public function audience($audience);

    public function award($award);

    public function awards($awards);

    public function brand($brand);

    public function category($category);

    public function color($color);

    public function countryOfAssembly($countryOfAssembly);

    public function countryOfLastProcessing($countryOfLastProcessing);

    public function countryOfOrigin($countryOfOrigin);

    public function depth($depth);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function funding($funding);

    public function gtin($gtin);

    public function gtin12($gtin12);

    public function gtin13($gtin13);

    public function gtin14($gtin14);

    public function gtin8($gtin8);

    public function hasAdultConsideration($hasAdultConsideration);

    public function hasEnergyConsumptionDetails($hasEnergyConsumptionDetails);

    public function hasMeasurement($hasMeasurement);

    public function hasMerchantReturnPolicy($hasMerchantReturnPolicy);

    public function hasProductReturnPolicy($hasProductReturnPolicy);

    public function hasVariant($hasVariant);

    public function height($height);

    public function identifier($identifier);

    public function image($image);

    public function inProductGroupWithID($inProductGroupWithID);

    public function isAccessoryOrSparePartFor($isAccessoryOrSparePartFor);

    public function isConsumableFor($isConsumableFor);

    public function isFamilyFriendly($isFamilyFriendly);

    public function isRelatedTo($isRelatedTo);

    public function isSimilarTo($isSimilarTo);

    public function isVariantOf($isVariantOf);

    public function itemCondition($itemCondition);

    public function keywords($keywords);

    public function logo($logo);

    public function mainEntityOfPage($mainEntityOfPage);

    public function manufacturer($manufacturer);

    public function material($material);

    public function mobileUrl($mobileUrl);

    public function model($model);

    public function mpn($mpn);

    public function name($name);

    public function negativeNotes($negativeNotes);

    public function nsn($nsn);

    public function offers($offers);

    public function pattern($pattern);

    public function positiveNotes($positiveNotes);

    public function potentialAction($potentialAction);

    public function productGroupID($productGroupID);

    public function productID($productID);

    public function productionDate($productionDate);

    public function purchaseDate($purchaseDate);

    public function releaseDate($releaseDate);

    public function review($review);

    public function reviews($reviews);

    public function sameAs($sameAs);

    public function size($size);

    public function sku($sku);

    public function slogan($slogan);

    public function subjectOf($subjectOf);

    public function url($url);

    public function variesBy($variesBy);

    public function weight($weight);

    public function width($width);
}
