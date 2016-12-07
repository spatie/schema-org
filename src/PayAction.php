<?php

namespace Spatie\SchemaOrg;

/**
 * An agent pays a price to a participant.
 *
 * @see http://schema.org/PayAction
 */
class PayAction extends TradeAction
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
