<?php

namespace Spatie\SchemaOrg;

/**
 * The act of physically/electronically taking delivery of an object thathas
 * been transferred from an origin to a destination. Reciprocal of SendAction.
 * 
 * Related actions:
 * 
 * * [[SendAction]]: The reciprocal of ReceiveAction.
 * * [[TakeAction]]: Unlike TakeAction, ReceiveAction does not imply that the
 * ownership has been transfered (e.g. I can receive a package, but it does not
 * mean the package is now mine).
 *
 * @see http://schema.org/ReceiveAction
 *
 * @mixin \Spatie\SchemaOrg\TransferAction
 */
class ReceiveAction extends BaseType
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

    /**
     * A sub property of participant. The participant who is at the sending end
     * of the action.
     *
     * @param Audience|Audience[]|Organization|Organization[]|Person|Person[] $sender
     *
     * @return static
     *
     * @see http://schema.org/sender
     */
    public function sender($sender)
    {
        return $this->setProperty('sender', $sender);
    }

}
