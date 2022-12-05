<?php

namespace Spatie\SchemaOrg\Contracts;

interface EndorsementRatingContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function author($author);

    public function bestRating($bestRating);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function ratingExplanation($ratingExplanation);

    public function ratingValue($ratingValue);

    public function reviewAspect($reviewAspect);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);

    public function worstRating($worstRating);
}
