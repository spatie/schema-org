<?php

namespace Spatie\SchemaOrg\Contracts;

interface TaxonContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function childTaxon($childTaxon);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function hasDefinedTerm($hasDefinedTerm);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function parentTaxon($parentTaxon);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function taxonRank($taxonRank);

    public function url($url);
}
