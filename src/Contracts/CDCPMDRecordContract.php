<?php

namespace Spatie\SchemaOrg\Contracts;

interface CDCPMDRecordContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function cvdCollectionDate($cvdCollectionDate);

    public function cvdFacilityCounty($cvdFacilityCounty);

    public function cvdFacilityId($cvdFacilityId);

    public function cvdNumBeds($cvdNumBeds);

    public function cvdNumBedsOcc($cvdNumBedsOcc);

    public function cvdNumC19Died($cvdNumC19Died);

    public function cvdNumC19HOPats($cvdNumC19HOPats);

    public function cvdNumC19HospPats($cvdNumC19HospPats);

    public function cvdNumC19MechVentPats($cvdNumC19MechVentPats);

    public function cvdNumC19OFMechVentPats($cvdNumC19OFMechVentPats);

    public function cvdNumC19OverflowPats($cvdNumC19OverflowPats);

    public function cvdNumICUBeds($cvdNumICUBeds);

    public function cvdNumICUBedsOcc($cvdNumICUBedsOcc);

    public function cvdNumTotBeds($cvdNumTotBeds);

    public function cvdNumVent($cvdNumVent);

    public function cvdNumVentUse($cvdNumVentUse);

    public function datePosted($datePosted);

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
