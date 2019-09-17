<?php

namespace Spatie\SchemaOrg\Contracts;

interface HowToItemContract
{
    public function requiredQuantity($requiredQuantity);

    public function item($item);

    public function nextItem($nextItem);

    public function position($position);

    public function previousItem($previousItem);

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
