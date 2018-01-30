<?php

namespace Spatie\SchemaOrg;

/**
 * Event type: Sports event.
 *
 * @see 
 */
class SportsEvent extends Event
{
    /**
     * The away team in a sports event.
     *
     * @param Person|Person[]|SportsTeam|SportsTeam[] $awayTeam
     *
     * @return static
     *
     * @see 
     */
    public function awayTeam($awayTeam)
    {
        return $this->setProperty('awayTeam', $awayTeam);
    }

    /**
     * A competitor in a sports event.
     *
     * @param Person|Person[]|SportsTeam|SportsTeam[] $competitor
     *
     * @return static
     *
     * @see 
     */
    public function competitor($competitor)
    {
        return $this->setProperty('competitor', $competitor);
    }

    /**
     * The home team in a sports event.
     *
     * @param Person|Person[]|SportsTeam|SportsTeam[] $homeTeam
     *
     * @return static
     *
     * @see 
     */
    public function homeTeam($homeTeam)
    {
        return $this->setProperty('homeTeam', $homeTeam);
    }

}
