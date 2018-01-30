<?php

namespace Spatie\SchemaOrg;

/**
 * Web applications.
 *
 * @see 
 */
class WebApplication extends SoftwareApplication
{
    /**
     * Specifies browser requirements in human-readable text. For example,
     * 'requires HTML5 support'.
     *
     * @param string|string[] $browserRequirements
     *
     * @return static
     *
     * @see 
     */
    public function browserRequirements($browserRequirements)
    {
        return $this->setProperty('browserRequirements', $browserRequirements);
    }

}
