<?php

namespace Spatie\SchemaOrg\Contracts;

interface ConstraintNodeContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function constraintProperty($constraintProperty);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function numConstraints($numConstraints);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
