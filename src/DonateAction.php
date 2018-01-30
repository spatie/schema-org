<?php

namespace Spatie\SchemaOrg;

/**
 * The act of providing goods, services, or money without compensation, often
 * for philanthropic reasons.
 *
 * @see 
 */
class DonateAction extends TradeAction
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
