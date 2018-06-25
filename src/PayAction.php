<?php

namespace Spatie\SchemaOrg;

/**
 * An agent pays a price to a participant.
 *
 * @see http://schema.org/PayAction
 *
 * @mixin \Spatie\SchemaOrg\TradeAction
 */
class PayAction extends BaseType
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
