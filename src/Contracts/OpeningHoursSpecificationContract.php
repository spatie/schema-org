<?php

namespace Spatie\SchemaOrg\Contracts;

interface OpeningHoursSpecificationContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function closes($closes);

    public function dayOfWeek($dayOfWeek);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function opens($opens);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);

    public function validFrom($validFrom);

    public function validThrough($validThrough);
}
