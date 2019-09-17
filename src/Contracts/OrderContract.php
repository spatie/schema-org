<?php

namespace Spatie\SchemaOrg\Contracts;

interface OrderContract
{
    public function acceptedOffer($acceptedOffer);

    public function billingAddress($billingAddress);

    public function broker($broker);

    public function confirmationNumber($confirmationNumber);

    public function customer($customer);

    public function discount($discount);

    public function discountCode($discountCode);

    public function discountCurrency($discountCurrency);

    public function isGift($isGift);

    public function merchant($merchant);

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

    public function seller($seller);

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
