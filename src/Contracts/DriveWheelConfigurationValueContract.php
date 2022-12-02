<?php

namespace Spatie\SchemaOrg\Contracts;

interface DriveWheelConfigurationValueContract
{
    public function additionalProperty($additionalProperty);

    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function equal($equal);

    public function greater($greater);

    public function greaterOrEqual($greaterOrEqual);

    public function identifier($identifier);

    public function image($image);

    public function lesser($lesser);

    public function lesserOrEqual($lesserOrEqual);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function nonEqual($nonEqual);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);

    public function valueReference($valueReference);
}
