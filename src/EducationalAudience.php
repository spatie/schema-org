<?php

namespace Spatie\SchemaOrg;

/**
 * An EducationalAudience.
 *
 * @see http://schema.org/EducationalAudience
 */
class EducationalAudience extends Audience
{
    /**
     * An educationalRole of an EducationalAudience.
     *
     * @param string $educationalRole
     *
     * @return static
     *
     * @see http://schema.org/educationalRole
     */
    public function educationalRole($educationalRole)
    {
        return $this->setProperty('educationalRole', $educationalRole);
    }

}
