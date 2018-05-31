<?php

namespace Spatie\SchemaOrg;

/**
 * Represents the collection of all sports organizations, including sports
 * teams, governing bodies, and sports associations.
 *
 * @see http://schema.org/SportsOrganization
 *
 * @mixin Organization
 */
class SportsOrganization
{
    /**
     * A type of sport (e.g. Baseball).
     *
     * @param string|string[] $sport
     *
     * @return static
     *
     * @see http://schema.org/sport
     */
    public function sport($sport)
    {
        return $this->setProperty('sport', $sport);
    }

}
