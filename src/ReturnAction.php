<?php

namespace Spatie\SchemaOrg;

/**
 * The act of returning to the origin that which was previously received
 * (concrete objects) or taken (ownership).
 *
 * @see 
 */
class ReturnAction extends TransferAction
{
    /**
     * A sub property of participant. The participant who is at the receiving
     * end of the action.
     *
     * @param Audience|Audience[]|Organization|Organization[]|Person|Person[] $recipient
     *
     * @return static
     *
     * @see 
     */
    public function recipient($recipient)
    {
        return $this->setProperty('recipient', $recipient);
    }

}
