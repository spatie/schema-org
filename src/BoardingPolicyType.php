<?php

namespace Spatie\SchemaOrg;

/**
 * A type of boarding policy used by an airline.
 *
 * @see http://schema.org/BoardingPolicyType
 *
 * @mixin Enumeration
 */
class BoardingPolicyType
{
    /**
     * The airline boards by groups based on check-in time, priority, etc.
     *
     * @see http://schema.org/GroupBoardingPolicy
     */
     const GroupBoardingPolicy = 'http://schema.org/GroupBoardingPolicy';

    /**
     * The airline boards by zones of the plane.
     *
     * @see http://schema.org/ZoneBoardingPolicy
     */
     const ZoneBoardingPolicy = 'http://schema.org/ZoneBoardingPolicy';

}
