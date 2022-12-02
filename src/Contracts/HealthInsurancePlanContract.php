<?php

namespace Spatie\SchemaOrg\Contracts;

interface HealthInsurancePlanContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function benefitsSummaryUrl($benefitsSummaryUrl);

    public function contactPoint($contactPoint);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function healthPlanDrugOption($healthPlanDrugOption);

    public function healthPlanDrugTier($healthPlanDrugTier);

    public function healthPlanId($healthPlanId);

    public function healthPlanMarketingUrl($healthPlanMarketingUrl);

    public function identifier($identifier);

    public function image($image);

    public function includesHealthPlanFormulary($includesHealthPlanFormulary);

    public function includesHealthPlanNetwork($includesHealthPlanNetwork);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);

    public function usesHealthPlanIdStandard($usesHealthPlanIdStandard);
}
