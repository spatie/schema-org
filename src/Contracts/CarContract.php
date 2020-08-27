<?php

namespace Spatie\SchemaOrg\Contracts;

interface CarContract
{
    public function additionalProperty($additionalProperty);

    public function additionalType($additionalType);

    public function aggregateRating($aggregateRating);

    public function alternateName($alternateName);

    public function audience($audience);

    public function award($award);

    public function awards($awards);

    public function brand($brand);

    public function cargoVolume($cargoVolume);

    public function color($color);

    public function dateVehicleFirstRegistered($dateVehicleFirstRegistered);

    public function depth($depth);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function driveWheelConfiguration($driveWheelConfiguration);

    public function fuelConsumption($fuelConsumption);

    public function fuelEfficiency($fuelEfficiency);

    public function fuelType($fuelType);

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

    public function knownVehicleDamages($knownVehicleDamages);

    public function logo($logo);

    public function mainEntityOfPage($mainEntityOfPage);

    public function manufacturer($manufacturer);

    public function material($material);

    public function mileageFromOdometer($mileageFromOdometer);

    public function model($model);

    public function mpn($mpn);

    public function name($name);

    public function numberOfAirbags($numberOfAirbags);

    public function numberOfAxles($numberOfAxles);

    public function numberOfDoors($numberOfDoors);

    public function numberOfForwardGears($numberOfForwardGears);

    public function numberOfPreviousOwners($numberOfPreviousOwners);

    public function offers($offers);

    public function potentialAction($potentialAction);

    public function productID($productID);

    public function productionDate($productionDate);

    public function purchaseDate($purchaseDate);

    public function releaseDate($releaseDate);

    public function review($review);

    public function reviews($reviews);

    public function sameAs($sameAs);

    public function sku($sku);

    public function slogan($slogan);

    public function steeringPosition($steeringPosition);

    public function subjectOf($subjectOf);

    public function url($url);

    public function vehicleConfiguration($vehicleConfiguration);

    public function vehicleEngine($vehicleEngine);

    public function vehicleIdentificationNumber($vehicleIdentificationNumber);

    public function vehicleInteriorColor($vehicleInteriorColor);

    public function vehicleInteriorType($vehicleInteriorType);

    public function vehicleModelDate($vehicleModelDate);

    public function vehicleSeatingCapacity($vehicleSeatingCapacity);

    public function vehicleTransmission($vehicleTransmission);

    public function weight($weight);

    public function width($width);

}
