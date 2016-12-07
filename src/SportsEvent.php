<?php

namespace Spatie\SchemaOrg;

/**
 * Event type: Sports event.
 *
 * @see http://schema.org/SportsEvent
 */
class SportsEvent extends Event
{
    /**
     * The home team in a sports event.
     *
     * @param \Spatie\SchemaOrg\Person|\Spatie\SchemaOrg\SportsTeam $homeTeam
     *
     * @return static
     *
     * @see http://schema.org/homeTeam
     */
    public function homeTeam($homeTeam)
    {
        return $this->setProperty('homeTeam', $homeTeam);
    }

    /**
     * The away team in a sports event.
     *
     * @param \Spatie\SchemaOrg\Person|\Spatie\SchemaOrg\SportsTeam $awayTeam
     *
     * @return static
     *
     * @see http://schema.org/awayTeam
     */
    public function awayTeam($awayTeam)
    {
        return $this->setProperty('awayTeam', $awayTeam);
    }

    /**
     * A competitor in a sports event.
     *
     * @param \Spatie\SchemaOrg\Person|\Spatie\SchemaOrg\SportsTeam $competitor
     *
     * @return static
     *
     * @see http://schema.org/competitor
     */
    public function competitor($competitor)
    {
        return $this->setProperty('competitor', $competitor);
    }

}
