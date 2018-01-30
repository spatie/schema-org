<?php

namespace Spatie\SchemaOrg;

/**
 * The act of notifying an event organizer as to whether you expect to attend
 * the event.
 *
 * @see 
 */
class RsvpAction extends InformAction
{
    /**
     * If responding yes, the number of guests who will attend in addition to
     * the invitee.
     *
     * @param float|float[]|int|int[] $additionalNumberOfGuests
     *
     * @return static
     *
     * @see 
     */
    public function additionalNumberOfGuests($additionalNumberOfGuests)
    {
        return $this->setProperty('additionalNumberOfGuests', $additionalNumberOfGuests);
    }

    /**
     * Comments, typically from users.
     *
     * @param Comment|Comment[] $comment
     *
     * @return static
     *
     * @see 
     */
    public function comment($comment)
    {
        return $this->setProperty('comment', $comment);
    }

    /**
     * The response (yes, no, maybe) to the RSVP.
     *
     * @param RsvpResponseType|RsvpResponseType[] $rsvpResponse
     *
     * @return static
     *
     * @see 
     */
    public function rsvpResponse($rsvpResponse)
    {
        return $this->setProperty('rsvpResponse', $rsvpResponse);
    }

}
