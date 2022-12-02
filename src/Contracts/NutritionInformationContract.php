<?php

namespace Spatie\SchemaOrg\Contracts;

interface NutritionInformationContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function calories($calories);

    public function carbohydrateContent($carbohydrateContent);

    public function cholesterolContent($cholesterolContent);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function fatContent($fatContent);

    public function fiberContent($fiberContent);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function proteinContent($proteinContent);

    public function sameAs($sameAs);

    public function saturatedFatContent($saturatedFatContent);

    public function servingSize($servingSize);

    public function sodiumContent($sodiumContent);

    public function subjectOf($subjectOf);

    public function sugarContent($sugarContent);

    public function transFatContent($transFatContent);

    public function unsaturatedFatContent($unsaturatedFatContent);

    public function url($url);
}
