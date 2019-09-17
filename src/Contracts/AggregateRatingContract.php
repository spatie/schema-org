<?php

namespace Spatie\SchemaOrg\Contracts;

interface AggregateRatingContract
{
    public function itemReviewed($itemReviewed);

    public function ratingCount($ratingCount);

    public function reviewCount($reviewCount);

    public function author($author);

    public function bestRating($bestRating);

    public function ratingValue($ratingValue);

    public function reviewAspect($reviewAspect);

    public function worstRating($worstRating);

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
