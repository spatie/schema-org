<?php

namespace Spatie\SchemaOrg;

/**
 * A PerformanceRole is a Role that some entity places with regard to a
 * theatrical performance, e.g. in a Movie, TVSeries etc.
 *
 * @see 
 */
class PerformanceRole extends Role
{
    /**
     * The name of a character played in some acting or performing role, i.e. in
     * a PerformanceRole.
     *
     * @param string|string[] $characterName
     *
     * @return static
     *
     * @see 
     */
    public function characterName($characterName)
    {
        return $this->setProperty('characterName', $characterName);
    }

}
