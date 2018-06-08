<?php

namespace Spatie\SchemaOrg;

/**
 * The act of notifying someone of information pertinent to them, with no
 * expectation of a response.
 *
 * @see http://schema.org/InformAction
 *
 * @mixin \Spatie\SchemaOrg\CommunicateAction
 */
class InformAction extends BaseType
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
