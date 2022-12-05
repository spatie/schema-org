<?php

namespace Spatie\SchemaOrg\Contracts;

interface HealthPlanFormularyContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function healthPlanCostSharing($healthPlanCostSharing);

    public function healthPlanDrugTier($healthPlanDrugTier);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function offersPrescriptionByMail($offersPrescriptionByMail);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
