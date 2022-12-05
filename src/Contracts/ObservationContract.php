<?php

namespace Spatie\SchemaOrg\Contracts;

interface ObservationContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function marginOfError($marginOfError);

    public function measuredProperty($measuredProperty);

    public function name($name);

    public function observationDate($observationDate);

    public function observedNode($observedNode);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
