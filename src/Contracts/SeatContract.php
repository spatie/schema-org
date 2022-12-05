<?php

namespace Spatie\SchemaOrg\Contracts;

interface SeatContract
{
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

    public function seatNumber($seatNumber);

    public function seatRow($seatRow);

    public function seatSection($seatSection);

    public function seatingType($seatingType);

    public function subjectOf($subjectOf);

    public function url($url);
}
