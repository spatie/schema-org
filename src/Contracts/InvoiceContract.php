<?php

namespace Spatie\SchemaOrg\Contracts;

interface InvoiceContract
{
    public function accountId($accountId);

    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function billingPeriod($billingPeriod);

    public function broker($broker);

    public function category($category);

    public function confirmationNumber($confirmationNumber);

    public function customer($customer);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function minimumPaymentDue($minimumPaymentDue);

    public function name($name);

    public function paymentDue($paymentDue);

    public function paymentDueDate($paymentDueDate);

    public function paymentMethod($paymentMethod);

    public function paymentMethodId($paymentMethodId);

    public function paymentStatus($paymentStatus);

    public function potentialAction($potentialAction);

    public function provider($provider);

    public function referencesOrder($referencesOrder);

    public function sameAs($sameAs);

    public function scheduledPaymentDate($scheduledPaymentDate);

    public function subjectOf($subjectOf);

    public function totalPaymentDue($totalPaymentDue);

    public function url($url);
}
