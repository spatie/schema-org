<?php

namespace Spatie\SchemaOrg\Contracts;

interface HowToItemContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function item($item);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function nextItem($nextItem);

    public function position($position);

    public function potentialAction($potentialAction);

    public function previousItem($previousItem);

    public function requiredQuantity($requiredQuantity);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
