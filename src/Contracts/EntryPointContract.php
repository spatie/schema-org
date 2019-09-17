<?php

namespace Spatie\SchemaOrg\Contracts;

interface EntryPointContract
{
    public function actionApplication($actionApplication);

    public function actionPlatform($actionPlatform);

    public function application($application);

    public function contentType($contentType);

    public function encodingType($encodingType);

    public function httpMethod($httpMethod);

    public function urlTemplate($urlTemplate);

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
