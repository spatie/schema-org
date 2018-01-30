<?php

namespace Spatie\SchemaOrg;

/**
 * A technical article - Example: How-to (task) topics, step-by-step, procedural
 * troubleshooting, specifications, etc.
 *
 * @see 
 */
class TechArticle extends Article
{
    /**
     * Prerequisites needed to fulfill steps in article.
     *
     * @param string|string[] $dependencies
     *
     * @return static
     *
     * @see 
     */
    public function dependencies($dependencies)
    {
        return $this->setProperty('dependencies', $dependencies);
    }

    /**
     * Proficiency needed for this content; expected values: 'Beginner',
     * 'Expert'.
     *
     * @param string|string[] $proficiencyLevel
     *
     * @return static
     *
     * @see 
     */
    public function proficiencyLevel($proficiencyLevel)
    {
        return $this->setProperty('proficiencyLevel', $proficiencyLevel);
    }

}
