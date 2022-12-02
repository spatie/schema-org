<?php

namespace Spatie\SchemaOrg\Contracts;

interface AlignmentObjectContract
{
    public function additionalType($additionalType);

    public function alignmentType($alignmentType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function educationalFramework($educationalFramework);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function targetDescription($targetDescription);

    public function targetName($targetName);

    public function targetUrl($targetUrl);

    public function url($url);
}
