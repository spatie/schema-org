<?php

namespace Spatie\SchemaOrg;

/**
 * The act of providing goods, services, or money without compensation, often
 * for philanthropic reasons.
 *
 * @see http://schema.org/DonateAction
 */
class DonateAction extends TradeAction
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
