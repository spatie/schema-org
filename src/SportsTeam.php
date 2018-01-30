<?php

namespace Spatie\SchemaOrg;

/**
 * Organization: Sports team.
 *
 * @see 
 */
class SportsTeam extends SportsOrganization
{
    /**
     * A person that acts as performing member of a sports team; a player as
     * opposed to a coach.
     *
     * @param Person|Person[] $athlete
     *
     * @return static
     *
     * @see 
     */
    public function athlete($athlete)
    {
        return $this->setProperty('athlete', $athlete);
    }

    /**
     * A person that acts in a coaching role for a sports team.
     *
     * @param Person|Person[] $coach
     *
     * @return static
     *
     * @see 
     */
    public function coach($coach)
    {
        return $this->setProperty('coach', $coach);
    }

}
