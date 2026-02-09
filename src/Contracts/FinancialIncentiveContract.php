<?php

namespace Spatie\SchemaOrg\Contracts;

interface FinancialIncentiveContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function areaServed($areaServed);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function eligibleWithSupplier($eligibleWithSupplier);

    public function identifier($identifier);

    public function image($image);

    public function incentiveAmount($incentiveAmount);

    public function incentiveStatus($incentiveStatus);

    public function incentiveType($incentiveType);

    public function incentivizedItem($incentivizedItem);

    public function incomeLimit($incomeLimit);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function provider($provider);

    public function publisher($publisher);

    public function purchasePriceLimit($purchasePriceLimit);

    public function purchaseType($purchaseType);

    public function qualifiedExpense($qualifiedExpense);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);

    public function validFrom($validFrom);

    public function validThrough($validThrough);
}
