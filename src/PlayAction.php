<?php

namespace Spatie\SchemaOrg;

/**
 * The act of playing/exercising/training/performing for enjoyment, leisure,
 * recreation, Competition or exercise.
 * 
 * Related actions:
 * 
 * * [[ListenAction]]: Unlike ListenAction (which is under ConsumeAction),
 * PlayAction refers to performing for an audience or at an event, rather than
 * consuming music.
 * * [[WatchAction]]: Unlike WatchAction (which is under ConsumeAction),
 * PlayAction refers to showing/displaying for an audience or at an event,
 * rather than consuming visual content.
 *
 * @see http://schema.org/PlayAction
 *
 * @mixin \Spatie\SchemaOrg\Action
 */
class PlayAction extends BaseType
{
    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @param Audience|Audience[] $audience
     *
     * @return static
     *
     * @see http://schema.org/audience
     */
    public function audience($audience)
    {
        return $this->setProperty('audience', $audience);
    }

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
