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
 * @see http://schema.org/TrackAction
 *
 * @mixin \Spatie\SchemaOrg\FindAction
 */
class TrackAction extends BaseType
{
    /**
     * A sub property of instrument. The method of delivery.
     *
     * @param DeliveryMethod|DeliveryMethod[] $deliveryMethod
     *
     * @return static
     *
     * @see http://schema.org/deliveryMethod
     */
    public function deliveryMethod($deliveryMethod)
    {
        return $this->setProperty('deliveryMethod', $deliveryMethod);
    }

}
