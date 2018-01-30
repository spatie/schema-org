<?php

namespace Spatie\SchemaOrg;

/**
 * An event involving the delivery of an item.
 *
 * @see 
 */
class DeliveryEvent extends Event
{
    /**
     * Password, PIN, or access code needed for delivery (e.g. from a locker).
     *
     * @param string|string[] $accessCode
     *
     * @return static
     *
     * @see 
     */
    public function accessCode($accessCode)
    {
        return $this->setProperty('accessCode', $accessCode);
    }

    /**
     * After this date, the item will no longer be available for pickup.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $availableThrough
     *
     * @return static
     *
     * @see 
     */
    public function availableThrough($availableThrough)
    {
        return $this->setProperty('availableThrough', $availableThrough);
    }

    /**
     * When the item is available for pickup from the store, locker, etc.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $availableFrom
     *
     * @return static
     *
     * @see 
     */
    public function availableFrom($availableFrom)
    {
        return $this->setProperty('availableFrom', $availableFrom);
    }

    /**
     * Method used for delivery or shipping.
     *
     * @param DeliveryMethod|DeliveryMethod[] $hasDeliveryMethod
     *
     * @return static
     *
     * @see 
     */
    public function hasDeliveryMethod($hasDeliveryMethod)
    {
        return $this->setProperty('hasDeliveryMethod', $hasDeliveryMethod);
    }

}
