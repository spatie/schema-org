<?php

namespace Spatie\SchemaOrg;

/**
 * The act of granting permission to an object.
 *
 * @see http://schema.org/AuthorizeAction
 *
 * @mixin \Spatie\SchemaOrg\AllocateAction
 */
class AuthorizeAction extends BaseType
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
