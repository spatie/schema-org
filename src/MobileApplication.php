<?php

namespace Spatie\SchemaOrg;

/**
 * A software application designed specifically to work well on a mobile device
 * such as a telephone.
 *
 * @see 
 */
class MobileApplication extends SoftwareApplication
{
    /**
     * Specifies specific carrier(s) requirements for the application (e.g. an
     * application may only work on a specific carrier network).
     *
     * @param string|string[] $carrierRequirements
     *
     * @return static
     *
     * @see 
     */
    public function carrierRequirements($carrierRequirements)
    {
        return $this->setProperty('carrierRequirements', $carrierRequirements);
    }

}
