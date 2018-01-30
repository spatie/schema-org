<?php

namespace Spatie\SchemaOrg;

/**
 * Represents the collection of all sports organizations, including sports
 * teams, governing bodies, and sports associations.
 *
 * @see 
 */
class SportsOrganization extends Organization
{
    /**
     * A type of sport (e.g. Baseball).
     *
     * @param string|string[] $sport
     *
     * @return static
     *
     * @see 
     */
    public function sport($sport)
    {
        return $this->setProperty('sport', $sport);
    }

}
