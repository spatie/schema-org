<?php

namespace Spatie\SchemaOrg;

/**
 * A value indicating which roadwheels will receive torque.
 *
 * @see http://schema.org/DriveWheelConfigurationValue
 *
 * @mixin \Spatie\SchemaOrg\QualitativeValue
 */
class DriveWheelConfigurationValue extends BaseType
{
    /**
     * All-wheel Drive is a transmission layout where the engine drives all four
     * wheels.
     *
     * @see http://schema.org/AllWheelDriveConfiguration
     */
     const AllWheelDriveConfiguration = 'http://schema.org/AllWheelDriveConfiguration';

    /**
     * Four-wheel drive is a transmission layout where the engine primarily
     * drives two wheels with a part-time four-wheel drive capability.
     *
     * @see http://schema.org/FourWheelDriveConfiguration
     */
     const FourWheelDriveConfiguration = 'http://schema.org/FourWheelDriveConfiguration';

    /**
     * Front-wheel drive is a transmission layout where the engine drives the
     * front wheels.
     *
     * @see http://schema.org/FrontWheelDriveConfiguration
     */
     const FrontWheelDriveConfiguration = 'http://schema.org/FrontWheelDriveConfiguration';

    /**
     * Real-wheel drive is a transmission layout where the engine drives the
     * rear wheels.
     *
     * @see http://schema.org/RearWheelDriveConfiguration
     */
     const RearWheelDriveConfiguration = 'http://schema.org/RearWheelDriveConfiguration';

}
