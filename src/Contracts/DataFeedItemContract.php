<?php

namespace Spatie\SchemaOrg\Contracts;

interface DataFeedItemContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function dateCreated($dateCreated);

    public function dateDeleted($dateDeleted);

    public function dateModified($dateModified);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function item($item);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
