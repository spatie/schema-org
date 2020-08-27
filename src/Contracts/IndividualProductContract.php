<?php

namespace Spatie\SchemaOrg\Contracts;

interface IndividualProductContract
{
    public function additionalProperty($additionalProperty);

    public function additionalType($additionalType);

    public function aggregateRating($aggregateRating);

    public function alternateName($alternateName);

    public function audience($audience);

    public function award($award);

    public function awards($awards);

    public function brand($brand);

    public function color($color);

    public function depth($depth);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function gtin12($gtin12);

    public function gtin13($gtin13);

    public function gtin14($gtin14);

    public function gtin8($gtin8);

    public function height($height);

    public function identifier($identifier);

    public function image($image);

    public function isAccessoryOrSparePartFor($isAccessoryOrSparePartFor);

    public function isConsumableFor($isConsumableFor);

    public function isRelatedTo($isRelatedTo);

    public function isSimilarTo($isSimilarTo);

    public function itemCondition($itemCondition);

    public function logo($logo);

    public function mainEntityOfPage($mainEntityOfPage);

    public function manufacturer($manufacturer);

    public function material($material);

    public function model($model);

    public function mpn($mpn);

    public function name($name);

    public function offers($offers);

    public function potentialAction($potentialAction);

    public function productID($productID);

    public function productionDate($productionDate);

    public function purchaseDate($purchaseDate);

    public function releaseDate($releaseDate);

    public function review($review);

    public function reviews($reviews);

    public function sameAs($sameAs);

    public function serialNumber($serialNumber);

    public function sku($sku);

    public function slogan($slogan);

    public function subjectOf($subjectOf);

    public function url($url);

    public function weight($weight);

    public function width($width);

}
