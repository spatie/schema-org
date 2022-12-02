<?php

namespace Spatie\SchemaOrg\Contracts;

interface OwnershipInfoContract
{
    public function acquiredFrom($acquiredFrom);

    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function ownedFrom($ownedFrom);

    public function ownedThrough($ownedThrough);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function typeOfGood($typeOfGood);

    public function url($url);
}
