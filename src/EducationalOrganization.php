<?php

namespace Spatie\SchemaOrg;

/**
 * An educational organization.
 *
 * @see http://schema.org/EducationalOrganization
 */
class EducationalOrganization extends Organization
{
    /**
     * Alumni of an organization.
     *
     * @param \Spatie\SchemaOrg\Person $alumni
     *
     * @return static
     *
     * @see http://schema.org/alumni
     */
    public function alumni($alumni)
    {
        return $this->setProperty('alumni', $alumni);
    }

}
