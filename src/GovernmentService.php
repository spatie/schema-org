<?php

namespace Spatie\SchemaOrg;

/**
 * A service provided by a government organization, e.g. food stamps, veterans
 * benefits, etc.
 *
 * @see http://schema.org/GovernmentService
 */
class GovernmentService extends Service
{
    /**
     * The operating organization, if different from the provider.  This enables
     * the representation of services that are provided by an organization, but
     * operated by another organization like a subcontractor.
     *
     * @param \Spatie\SchemaOrg\Organization $serviceOperator
     *
     * @return static
     *
     * @see http://schema.org/serviceOperator
     */
    public function serviceOperator($serviceOperator)
    {
        return $this->setProperty('serviceOperator', $serviceOperator);
    }

}
