<?php

namespace Spatie\SchemaOrg\Contracts;

interface MenuItemContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function menuAddOn($menuAddOn);

    public function name($name);

    public function nutrition($nutrition);

    public function offers($offers);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function suitableForDiet($suitableForDiet);

    public function url($url);
}
