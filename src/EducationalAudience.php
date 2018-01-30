<?php

namespace Spatie\SchemaOrg;

/**
 * An EducationalAudience.
 *
 * @see 
 */
class EducationalAudience extends Audience
{
    /**
     * An educationalRole of an EducationalAudience.
     *
     * @param string|string[] $educationalRole
     *
     * @return static
     *
     * @see 
     */
    public function educationalRole($educationalRole)
    {
        return $this->setProperty('educationalRole', $educationalRole);
    }

}
