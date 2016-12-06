<?php

namespace Spatie\SchemaOrg;

/**
 * An agent joins an event/group with participants/friends at a
 * location.\n\nRelated actions:\n\n* [[RegisterAction]]: Unlike RegisterAction,
 * JoinAction refers to joining a group/team of people.\n* [[SubscribeAction]]:
 * Unlike SubscribeAction, JoinAction does not imply that you'll be receiving
 * updates.\n* [[FollowAction]]: Unlike FollowAction, JoinAction does not imply
 * that you'll be polling for updates.
 *
 * @see http://schema.org/JoinAction
 */
class JoinAction extends InteractAction
{
    /**
     * Upcoming or past event associated with this place, organization, or
     * action.
     *
     * @param \Spatie\SchemaOrg\Event $event
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
