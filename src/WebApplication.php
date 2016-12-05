<?php

namespace Spatie\SchemaOrg;

/**
 * Web applications.
 *
 * @see http://schema.org/WebApplication
 */
class WebApplication extends SoftwareApplication
{
    /**
     * Specifies browser requirements in human-readable text. For example,
     * 'requires HTML5 support'.
     *
     * @param string $browserRequirements
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
