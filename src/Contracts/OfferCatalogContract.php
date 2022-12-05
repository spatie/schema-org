<?php

namespace Spatie\SchemaOrg\Contracts;

interface OfferCatalogContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function itemListElement($itemListElement);

    public function itemListOrder($itemListOrder);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function numberOfItems($numberOfItems);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
