<?php

namespace Spatie\SchemaOrg;

/**
 * The act of transferring ownership of an object to a destination. Reciprocal
 * of TakeAction.
 * 
 * Related actions:
 * 
 * * [[TakeAction]]: Reciprocal of GiveAction.
 * * [[SendAction]]: Unlike SendAction, GiveAction implies that ownership is
 * being transferred (e.g. I may send my laptop to you, but that doesn't mean
 * I'm giving it to you).
 *
 * @see http://schema.org/GiveAction
 */
class GiveAction extends TransferAction
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
