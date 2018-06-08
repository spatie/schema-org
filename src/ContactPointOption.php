<?php

namespace Spatie\SchemaOrg;

/**
 * Enumerated options related to a ContactPoint.
 *
 * @see http://schema.org/ContactPointOption
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class ContactPointOption extends BaseType
{
    /**
     * Uses devices to support users with hearing impairments.
     *
     * @see http://schema.org/HearingImpairedSupported
     */
     const HearingImpairedSupported = 'http://schema.org/HearingImpairedSupported';

    /**
     * The associated telephone number is toll free.
     *
     * @see http://schema.org/TollFree
     */
     const TollFree = 'http://schema.org/TollFree';

}
