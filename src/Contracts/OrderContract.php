<?php

namespace Spatie\SchemaOrg\Contracts;

interface OrderContract
{
    public function acceptedOffer($acceptedOffer);

    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function billingAddress($billingAddress);

    public function broker($broker);

    public function confirmationNumber($confirmationNumber);

    public function customer($customer);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function discount($discount);

    public function discountCode($discountCode);

    public function discountCurrency($discountCurrency);

    public function identifier($identifier);

    public function image($image);

    public function isGift($isGift);

    public function mainEntityOfPage($mainEntityOfPage);

    public function merchant($merchant);

    public function name($name);

    public function orderDate($orderDate);

    public function orderDelivery($orderDelivery);

    public function orderNumber($orderNumber);

    public function orderStatus($orderStatus);

    public function orderedItem($orderedItem);

    public function partOfInvoice($partOfInvoice);

    public function paymentDue($paymentDue);

    public function paymentDueDate($paymentDueDate);

    public function paymentMethod($paymentMethod);

    public function paymentMethodId($paymentMethodId);

    public function paymentUrl($paymentUrl);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function seller($seller);

    public function subjectOf($subjectOf);

    public function url($url);
}
