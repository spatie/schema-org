<?php

namespace Spatie\SchemaOrg;

/**
 * An educational organization.
 *
 * @see 
 */
class EducationalOrganization extends Organization
{
    /**
     * Alumni of an organization.
     *
     * @param Person|Person[] $alumni
     *
     * @return static
     *
     * @see 
     */
    public function alumni($alumni)
    {
        return $this->setProperty('alumni', $alumni);
    }

}
