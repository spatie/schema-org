<?php

namespace Spatie\SchemaOrg;

/**
 * An agent joins an event/group with participants/friends at a location.
 * 
 * Related actions:
 * 
 * * [[RegisterAction]]: Unlike RegisterAction, JoinAction refers to joining a
 * group/team of people.
 * * [[SubscribeAction]]: Unlike SubscribeAction, JoinAction does not imply that
 * you'll be receiving updates.
 * * [[FollowAction]]: Unlike FollowAction, JoinAction does not imply that
 * you'll be polling for updates.
 *
 * @see http://schema.org/JoinAction
 *
 * @mixin \Spatie\SchemaOrg\InteractAction
 */
class JoinAction extends BaseType
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
