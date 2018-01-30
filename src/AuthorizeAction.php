<?php

namespace Spatie\SchemaOrg;

/**
 * The act of granting permission to an object.
 *
 * @see 
 */
class AuthorizeAction extends AllocateAction
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
