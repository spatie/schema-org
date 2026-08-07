<?php

namespace Spatie\SchemaOrg\Contracts;

interface InstantaneousEventContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function data($data);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function owner($owner);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function source($source);

    public function subjectOf($subjectOf);

    public function timestamp($timestamp);

    public function url($url);
}
