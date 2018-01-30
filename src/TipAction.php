<?php

namespace Spatie\SchemaOrg;

/**
 * The act of giving money voluntarily to a beneficiary in recognition of
 * services rendered.
 *
 * @see 
 */
class TipAction extends TradeAction
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
