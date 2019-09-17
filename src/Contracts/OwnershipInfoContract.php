<?php

namespace Spatie\SchemaOrg\Contracts;

interface OwnershipInfoContract
{
    public function acquiredFrom($acquiredFrom);

    public function ownedFrom($ownedFrom);

    public function ownedThrough($ownedThrough);

    public function typeOfGood($typeOfGood);

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
