<?php

namespace Spatie\SchemaOrg\Contracts;

interface OpeningHoursSpecificationContract
{
    public function closes($closes);

    public function dayOfWeek($dayOfWeek);

    public function opens($opens);

    public function validFrom($validFrom);

    public function validThrough($validThrough);

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
