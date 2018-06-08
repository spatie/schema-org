<?php

namespace Spatie\SchemaOrg;

/**
 * A software application designed specifically to work well on a mobile device
 * such as a telephone.
 *
 * @see http://schema.org/MobileApplication
 *
 * @mixin \Spatie\SchemaOrg\SoftwareApplication
 */
class MobileApplication extends BaseType
{
    /**
     * Specifies specific carrier(s) requirements for the application (e.g. an
     * application may only work on a specific carrier network).
     *
     * @param string|string[] $carrierRequirements
     *
     * @return static
     *
     * @see http://schema.org/carrierRequirements
     */
    public function carrierRequirements($carrierRequirements)
    {
        return $this->setProperty('carrierRequirements', $carrierRequirements);
    }

}
