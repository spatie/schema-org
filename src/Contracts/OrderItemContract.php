<?php

namespace Spatie\SchemaOrg\Contracts;

interface OrderItemContract
{
    public function additionalType($additionalType);

    public function alternateName($alternateName);

    public function description($description);

    public function disambiguatingDescription($disambiguatingDescription);

    public function identifier($identifier);

    public function image($image);

    public function mainEntityOfPage($mainEntityOfPage);

    public function name($name);

    public function orderDelivery($orderDelivery);

    public function orderItemNumber($orderItemNumber);

    public function orderItemStatus($orderItemStatus);

    public function orderQuantity($orderQuantity);

    public function orderedItem($orderedItem);

    public function potentialAction($potentialAction);

    public function sameAs($sameAs);

    public function subjectOf($subjectOf);

    public function url($url);
}
