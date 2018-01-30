<?php

namespace Spatie\SchemaOrg;

/**
 * A subclass of Role used to describe roles within organizations.
 *
 * @see 
 */
class OrganizationRole extends Role
{
    /**
     * A number associated with a role in an organization, for example, the
     * number on an athlete's jersey.
     *
     * @param float|float[]|int|int[] $numberedPosition
     *
     * @return static
     *
     * @see 
     */
    public function numberedPosition($numberedPosition)
    {
        return $this->setProperty('numberedPosition', $numberedPosition);
    }

}
