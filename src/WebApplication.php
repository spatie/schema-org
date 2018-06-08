<?php

namespace Spatie\SchemaOrg;

/**
 * Web applications.
 *
 * @see http://schema.org/WebApplication
 *
 * @mixin \Spatie\SchemaOrg\SoftwareApplication
 */
class WebApplication extends BaseType
{
    /**
     * Specifies browser requirements in human-readable text. For example,
     * 'requires HTML5 support'.
     *
     * @param string|string[] $browserRequirements
     *
     * @return static
     *
     * @see http://schema.org/browserRequirements
     */
    public function browserRequirements($browserRequirements)
    {
        return $this->setProperty('browserRequirements', $browserRequirements);
    }

}
