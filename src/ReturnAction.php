<?php

namespace Spatie\SchemaOrg;

/**
 * The act of returning to the origin that which was previously received
 * (concrete objects) or taken (ownership).
 *
 * @see http://schema.org/ReturnAction
 *
 * @mixin \Spatie\SchemaOrg\TransferAction
 */
class ReturnAction extends BaseType
{
    /**
     * A sub property of participant. The participant who is at the receiving
     * end of the action.
     *
     * @param Audience|Audience[]|ContactPoint|ContactPoint[]|Organization|Organization[]|Person|Person[] $recipient
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
