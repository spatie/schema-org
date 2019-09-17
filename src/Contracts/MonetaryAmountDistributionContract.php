<?php

namespace Spatie\SchemaOrg\Contracts;

interface MonetaryAmountDistributionContract
{
    public function currency($currency);

    public function median($median);

    public function percentile10($percentile10);

    public function percentile25($percentile25);

    public function percentile75($percentile75);

    public function percentile90($percentile90);

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
