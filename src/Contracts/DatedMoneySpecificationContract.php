<?php

namespace Spatie\SchemaOrg\Contracts;

interface DatedMoneySpecificationContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function amount($amount);

    public function currency($currency);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function endDate($endDate);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function startDate($startDate);

    public function subjectOf($subjectOf);

    public function url($url);
}
