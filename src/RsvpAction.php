<?php

namespace Spatie\SchemaOrg;

/**
 * The act of notifying an event organizer as to whether you expect to attend
 * the event.
 *
 * @see http://schema.org/RsvpAction
 *
 * @mixin \Spatie\SchemaOrg\InformAction
 */
class RsvpAction extends BaseType
{
    /**
     * If responding yes, the number of guests who will attend in addition to
     * the invitee.
     *
     * @param float|float[]|int|int[] $additionalNumberOfGuests
     *
     * @return static
     *
     * @see http://schema.org/additionalNumberOfGuests
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
     * @see http://schema.org/comment
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
     * @see http://schema.org/rsvpResponse
     */
    public function rsvpResponse($rsvpResponse)
    {
        return $this->setProperty('rsvpResponse', $rsvpResponse);
    }

}
