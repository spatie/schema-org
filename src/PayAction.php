<?php

namespace Spatie\SchemaOrg;

/**
 * An agent pays a price to a participant.
 *
 * @see 
 */
class PayAction extends TradeAction
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
