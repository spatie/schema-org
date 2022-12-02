<?php

namespace Spatie\SchemaOrg\Contracts;

interface GrantContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function fundedItem($fundedItem);

    public function funder($funder);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function sponsor($sponsor);

    public function subjectOf($subjectOf);

    public function url($url);
}
