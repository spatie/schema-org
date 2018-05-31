<?php

namespace Spatie\SchemaOrg;

/**
 * A value indicating a steering position.
 *
 * @see http://schema.org/SteeringPositionValue
 *
 * @mixin QualitativeValue
 */
class SteeringPositionValue
{
    /**
     * The steering position is on the left side of the vehicle (viewed from the
     * main direction of driving).
     *
     * @see http://schema.org/LeftHandDriving
     */
     const LeftHandDriving = 'http://schema.org/LeftHandDriving';

    /**
     * The steering position is on the right side of the vehicle (viewed from
     * the main direction of driving).
     *
     * @see http://schema.org/RightHandDriving
     */
     const RightHandDriving = 'http://schema.org/RightHandDriving';

}
