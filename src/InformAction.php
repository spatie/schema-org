<?php

namespace Spatie\SchemaOrg;

/**
 * The act of notifying someone of information pertinent to them, with no
 * expectation of a response.
 *
 * @see 
 */
class InformAction extends CommunicateAction
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
