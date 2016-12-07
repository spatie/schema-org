<?php

namespace Spatie\SchemaOrg;

/**
 * The act of granting permission to an object.
 *
 * @see http://schema.org/AuthorizeAction
 */
class AuthorizeAction extends AllocateAction
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
