<?php

namespace Spatie\SchemaOrg;

/**
 * The act of asking someone to attend an event. Reciprocal of RsvpAction.
 *
 * @see http://schema.org/InviteAction
 *
 * @mixin \Spatie\SchemaOrg\CommunicateAction
 */
class InviteAction extends BaseType
{
    /**
     * Upcoming or past event associated with this place, organization, or
     * action.
     *
     * @param Event|Event[] $event
     *
     * @return static
     *
     * @see http://schema.org/event
     */
    public function event($event)
    {
        return $this->setProperty('event', $event);
    }

}
