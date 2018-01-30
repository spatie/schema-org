<?php

namespace Spatie\SchemaOrg;

/**
 * An agent tracks an object for updates.
 * 
 * Related actions:
 * 
 * * [[FollowAction]]: Unlike FollowAction, TrackAction refers to the interest
 * on the location of innanimates objects.
 * * [[SubscribeAction]]: Unlike SubscribeAction, TrackAction refers to  the
 * interest on the location of innanimate objects.
 *
 * @see 
 */
class TrackAction extends FindAction
{
    /**
     * A sub property of instrument. The method of delivery.
     *
     * @param DeliveryMethod|DeliveryMethod[] $deliveryMethod
     *
     * @return static
     *
     * @see 
     */
    public function deliveryMethod($deliveryMethod)
    {
        return $this->setProperty('deliveryMethod', $deliveryMethod);
    }

}
