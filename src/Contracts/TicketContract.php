<?php

namespace Spatie\SchemaOrg\Contracts;

interface TicketContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function dateIssued($dateIssued);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function issuedBy($issuedBy);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function potentialAction($potentialAction);

    public function priceCurrency($priceCurrency);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function ticketNumber($ticketNumber);

    public function ticketToken($ticketToken);

    public function ticketedSeat($ticketedSeat);

    public function totalPrice($totalPrice);

    public function underName($underName);

    public function url($url);
}
