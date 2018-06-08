<?php

namespace Spatie\SchemaOrg;

/**
 * Event type: Sports event.
 *
 * @see http://schema.org/SportsEvent
 *
 * @mixin \Spatie\SchemaOrg\Event
 */
class SportsEvent extends BaseType
{
    /**
     * The away team in a sports event.
     *
     * @param Person|Person[]|SportsTeam|SportsTeam[] $awayTeam
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
     * @param Person|Person[]|SportsTeam|SportsTeam[] $competitor
     *
     * @return static
     *
     * @see http://schema.org/competitor
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
     * @see http://schema.org/homeTeam
     */
    public function homeTeam($homeTeam)
    {
        return $this->setProperty('homeTeam', $homeTeam);
    }

}
