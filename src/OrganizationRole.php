<?php

namespace Spatie\SchemaOrg;

/**
 * A subclass of Role used to describe roles within organizations.
 *
 * @see http://schema.org/OrganizationRole
 */
class OrganizationRole extends Role
{
    /**
     * A number associated with a role in an organization, for example, the
     * number on an athlete's jersey.
     *
     * @param float|int $numberedPosition
     *
     * @return static
     *
     * @see http://schema.org/numberedPosition
     */
    public function numberedPosition($numberedPosition)
    {
        return $this->setProperty('numberedPosition', $numberedPosition);
    }

}
