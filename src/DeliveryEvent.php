<?php

namespace Spatie\SchemaOrg;

/**
 * An event involving the delivery of an item.
 *
 * @see http://schema.org/DeliveryEvent
 *
 * @mixin \Spatie\SchemaOrg\Event
 */
class DeliveryEvent extends BaseType
{
    /**
     * Password, PIN, or access code needed for delivery (e.g. from a locker).
     *
     * @param string|string[] $accessCode
     *
     * @return static
     *
     * @see http://schema.org/accessCode
     */
    public function accessCode($accessCode)
    {
        return $this->setProperty('accessCode', $accessCode);
    }

    /**
     * When the item is available for pickup from the store, locker, etc.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $availableFrom
     *
     * @return static
     *
     * @see http://schema.org/availableFrom
     */
    public function availableFrom($availableFrom)
    {
        return $this->setProperty('availableFrom', $availableFrom);
    }

    /**
     * After this date, the item will no longer be available for pickup.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $availableThrough
     *
     * @return static
     *
     * @see http://schema.org/availableThrough
     */
    public function availableThrough($availableThrough)
    {
        return $this->setProperty('availableThrough', $availableThrough);
    }

    /**
     * Method used for delivery or shipping.
     *
     * @param DeliveryMethod|DeliveryMethod[] $hasDeliveryMethod
     *
     * @return static
     *
     * @see http://schema.org/hasDeliveryMethod
     */
    public function hasDeliveryMethod($hasDeliveryMethod)
    {
        return $this->setProperty('hasDeliveryMethod', $hasDeliveryMethod);
    }

}
