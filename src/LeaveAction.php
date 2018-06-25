<?php

namespace Spatie\SchemaOrg;

/**
 * An agent leaves an event / group with participants/friends at a location.
 * 
 * Related actions:
 * 
 * * [[JoinAction]]: The antonym of LeaveAction.
 * * [[UnRegisterAction]]: Unlike UnRegisterAction, LeaveAction implies leaving
 * a group/team of people rather than a service.
 *
 * @see http://schema.org/LeaveAction
 *
 * @mixin \Spatie\SchemaOrg\InteractAction
 */
class LeaveAction extends BaseType
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
