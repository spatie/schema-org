<?php

namespace Spatie\SchemaOrg;

/**
 * The act of returning to the origin that which was previously received
 * (concrete objects) or taken (ownership).
 *
 * @see http://schema.org/ReturnAction
 */
class ReturnAction extends TransferAction
{
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
