<?php

namespace Spatie\SchemaOrg;

/**
 * An educational organization.
 *
 * @see http://schema.org/EducationalOrganization
 *
 * @mixin \Spatie\SchemaOrg\Organization
 */
class EducationalOrganization extends BaseType
{
    /**
     * Alumni of an organization.
     *
     * @param Person|Person[] $alumni
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
