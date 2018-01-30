<?php

namespace Spatie\SchemaOrg;

/**
 * The act of asking someone to attend an event. Reciprocal of RsvpAction.
 *
 * @see 
 */
class InviteAction extends CommunicateAction
{
    /**
     * Upcoming or past event associated with this place, organization, or
     * action.
     *
     * @param Event|Event[] $event
     *
     * @return static
     *
     * @see 
     */
    public function event($event)
    {
        return $this->setProperty('event', $event);
    }

}
