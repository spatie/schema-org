<?php

namespace Spatie\SchemaOrg;

/**
 * An EducationalAudience.
 *
 * @see http://schema.org/EducationalAudience
 *
 * @mixin \Spatie\SchemaOrg\Audience
 */
class EducationalAudience extends BaseType
{
    /**
     * An educationalRole of an EducationalAudience.
     *
     * @param string|string[] $educationalRole
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
