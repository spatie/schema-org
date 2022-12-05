<?php

namespace Spatie\SchemaOrg\Contracts;

interface HealthPlanCostSharingSpecificationContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function healthPlanCoinsuranceOption($healthPlanCoinsuranceOption);

    public function healthPlanCoinsuranceRate($healthPlanCoinsuranceRate);

    public function healthPlanCopay($healthPlanCopay);

    public function healthPlanCopayOption($healthPlanCopayOption);

    public function healthPlanPharmacyCategory($healthPlanPharmacyCategory);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
