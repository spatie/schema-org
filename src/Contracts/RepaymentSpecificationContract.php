<?php

namespace Spatie\SchemaOrg\Contracts;

interface RepaymentSpecificationContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function downPayment($downPayment);

    public function earlyPrepaymentPenalty($earlyPrepaymentPenalty);

    public function identifier($identifier);

    public function image($image);

    public function loanPaymentAmount($loanPaymentAmount);

    public function loanPaymentFrequency($loanPaymentFrequency);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function numberOfLoanPayments($numberOfLoanPayments);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
