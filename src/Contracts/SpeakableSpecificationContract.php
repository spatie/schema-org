<?php

namespace Spatie\SchemaOrg\Contracts;

interface SpeakableSpecificationContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function cssSelector($cssSelector);

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

    public function xpath($xpath);
}
