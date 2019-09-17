<?php

namespace Spatie\SchemaOrg\Contracts;

interface GovernmentPermitContract
{
    public function issuedBy($issuedBy);

    public function issuedThrough($issuedThrough);

    public function permitAudience($permitAudience);

    public function validFor($validFor);

    public function validFrom($validFrom);

    public function validIn($validIn);

    public function validUntil($validUntil);

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
