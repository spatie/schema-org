<?php

namespace Spatie\SchemaOrg\Contracts;

interface BedTypeContract
{
    public function additionalProperty($additionalProperty);

    public function equal($equal);

    public function greater($greater);

    public function greaterOrEqual($greaterOrEqual);

    public function lesser($lesser);

    public function lesserOrEqual($lesserOrEqual);

    public function nonEqual($nonEqual);

    public function valueReference($valueReference);

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
