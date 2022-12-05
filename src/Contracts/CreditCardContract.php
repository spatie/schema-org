<?php

namespace Spatie\SchemaOrg\Contracts;

interface CreditCardContract
{
    public function additionalType($additionalType);

    public function aggregateRating($aggregateRating);

    public function alternateName($alternateName);

    public function amount($amount);

    public function annualPercentageRate($annualPercentageRate);

    public function areaServed($areaServed);

    public function audience($audience);

    public function availableChannel($availableChannel);

    public function award($award);

    public function brand($brand);

    public function broker($broker);

    public function cashBack($cashBack);

    public function category($category);

    public function contactlessPayment($contactlessPayment);

    public function currency($currency);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function feesAndCommissionsSpecification($feesAndCommissionsSpecification);

    public function floorLimit($floorLimit);

    public function gracePeriod($gracePeriod);

    public function hasOfferCatalog($hasOfferCatalog);

    public function hoursAvailable($hoursAvailable);

    public function identifier($identifier);

    public function image($image);

    public function interestRate($interestRate);

    public function isRelatedTo($isRelatedTo);

    public function isSimilarTo($isSimilarTo);

    public function loanRepaymentForm($loanRepaymentForm);

    public function loanTerm($loanTerm);

    public function loanType($loanType);

    public function logo($logo);

    public function mainEntityOfPage($mainEntityOfPage);

    public function monthlyMinimumRepaymentAmount($monthlyMinimumRepaymentAmount);

    public function name($name);

    public function offers($offers);

    public function potentialAction($potentialAction);

    public function produces($produces);

    public function provider($provider);

    public function providerMobility($providerMobility);

    public function recourseLoan($recourseLoan);

    public function renegotiableLoan($renegotiableLoan);

    public function requiredCollateral($requiredCollateral);

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
}
