<?php

namespace Spatie\SchemaOrg;

/**
 * The act of physically/electronically dispatching an object for transfer from
 * an origin to a destination.Related actions:
 * 
 * * [[ReceiveAction]]: The reciprocal of SendAction.
 * * [[GiveAction]]: Unlike GiveAction, SendAction does not imply the transfer
 * of ownership (e.g. I can send you my laptop, but I'm not necessarily giving
 * it to you).
 *
 * @see http://schema.org/SendAction
 */
class SendAction extends TransferAction
{
    /**
     * A sub property of instrument. The method of delivery.
     *
     * @param \Spatie\SchemaOrg\DeliveryMethod $deliveryMethod
     *
     * @return static
     *
     * @see http://schema.org/deliveryMethod
     */
    public function deliveryMethod($deliveryMethod)
    {
        return $this->setProperty('deliveryMethod', $deliveryMethod);
    }

    /**
     * A sub property of participant. The participant who is at the receiving
     * end of the action.
     *
     * @param \Spatie\SchemaOrg\Audience|\Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $recipient
     *
     * @return static
     *
     * @see http://schema.org/recipient
     */
    public function recipient($recipient)
    {
        return $this->setProperty('recipient', $recipient);
    }

}
