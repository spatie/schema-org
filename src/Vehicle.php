<?php

namespace Spatie\SchemaOrg;

/**
 * A vehicle is a device that is designed or used to transport people or cargo
 * over land, water, air, or through space.
 *
 * @see http://schema.org/Vehicle
 */
class Vehicle extends Product
{
    /**
     * The number of doors.
     * 
     * Typical unit code(s): C62
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue|float|int $numberOfDoors
     *
     * @return static
     *
     * @see http://schema.org/numberOfDoors
     */
    public function numberOfDoors($numberOfDoors)
    {
        return $this->setProperty('numberOfDoors', $numberOfDoors);
    }

    /**
     * The number or type of airbags in the vehicle.
     *
     * @param float|int|string $numberOfAirbags
     *
     * @return static
     *
     * @see http://schema.org/numberOfAirbags
     */
    public function numberOfAirbags($numberOfAirbags)
    {
        return $this->setProperty('numberOfAirbags', $numberOfAirbags);
    }

    /**
     * The number of axles.
     * 
     * Typical unit code(s): C62
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue|float|int $numberOfAxles
     *
     * @return static
     *
     * @see http://schema.org/numberOfAxles
     */
    public function numberOfAxles($numberOfAxles)
    {
        return $this->setProperty('numberOfAxles', $numberOfAxles);
    }

    /**
     * Information about the engine or engines of the vehicle.
     *
     * @param \Spatie\SchemaOrg\EngineSpecification $vehicleEngine
     *
     * @return static
     *
     * @see http://schema.org/vehicleEngine
     */
    public function vehicleEngine($vehicleEngine)
    {
        return $this->setProperty('vehicleEngine', $vehicleEngine);
    }

    /**
     * The amount of fuel consumed for traveling a particular distance or
     * temporal duration with the given vehicle (e.g. liters per 100 km).
     * 
     * * Note 1: There are unfortunately no standard unit codes for liters per
     * 100 km.  Use [[unitText]] to indicate the unit of measurement, e.g. L/100
     * km.
     * * Note 2: There are two ways of indicating the fuel consumption,
     * [[fuelConsumption]] (e.g. 8 liters per 100 km) and [[fuelEfficiency]]
     * (e.g. 30 miles per gallon). They are reciprocal.
     * * Note 3: Often, the absolute value is useful only when related to
     * driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can
     * use [[valueReference]] to link the value for the fuel consumption to
     * another value.
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue $fuelConsumption
     *
     * @return static
     *
     * @see http://schema.org/fuelConsumption
     */
    public function fuelConsumption($fuelConsumption)
    {
        return $this->setProperty('fuelConsumption', $fuelConsumption);
    }

    /**
     * The distance traveled per unit of fuel used; most commonly miles per
     * gallon (mpg) or kilometers per liter (km/L).
     * 
     * * Note 1: There are unfortunately no standard unit codes for miles per
     * gallon or kilometers per liter. Use [[unitText]] to indicate the unit of
     * measurement, e.g. mpg or km/L.
     * * Note 2: There are two ways of indicating the fuel consumption,
     * [[fuelConsumption]] (e.g. 8 liters per 100 km) and [[fuelEfficiency]]
     * (e.g. 30 miles per gallon). They are reciprocal.
     * * Note 3: Often, the absolute value is useful only when related to
     * driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can
     * use [[valueReference]] to link the value for the fuel economy to another
     * value.
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue $fuelEfficiency
     *
     * @return static
     *
     * @see http://schema.org/fuelEfficiency
     */
    public function fuelEfficiency($fuelEfficiency)
    {
        return $this->setProperty('fuelEfficiency', $fuelEfficiency);
    }

    /**
     * The total number of forward gears available for the transmission system
     * of the vehicle.
     * 
     * Typical unit code(s): C62
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue|float|int $numberOfForwardGears
     *
     * @return static
     *
     * @see http://schema.org/numberOfForwardGears
     */
    public function numberOfForwardGears($numberOfForwardGears)
    {
        return $this->setProperty('numberOfForwardGears', $numberOfForwardGears);
    }

    /**
     * The Vehicle Identification Number (VIN) is a unique serial number used by
     * the automotive industry to identify individual motor vehicles.
     *
     * @param string $vehicleIdentificationNumber
     *
     * @return static
     *
     * @see http://schema.org/vehicleIdentificationNumber
     */
    public function vehicleIdentificationNumber($vehicleIdentificationNumber)
    {
        return $this->setProperty('vehicleIdentificationNumber', $vehicleIdentificationNumber);
    }

    /**
     * The available volume for cargo or luggage. For automobiles, this is
     * usually the trunk volume.
     * 
     * Typical unit code(s): LTR for liters, FTQ for cubic foot/feet
     * 
     * Note: You can use [[minValue]] and [[maxValue]] to indicate ranges.
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue $cargoVolume
     *
     * @return static
     *
     * @see http://schema.org/cargoVolume
     */
    public function cargoVolume($cargoVolume)
    {
        return $this->setProperty('cargoVolume', $cargoVolume);
    }

    /**
     * A short text indicating the configuration of the vehicle, e.g. '5dr
     * hatchback ST 2.5 MT 225 hp' or 'limited edition'.
     *
     * @param string $vehicleConfiguration
     *
     * @return static
     *
     * @see http://schema.org/vehicleConfiguration
     */
    public function vehicleConfiguration($vehicleConfiguration)
    {
        return $this->setProperty('vehicleConfiguration', $vehicleConfiguration);
    }

    /**
     * A textual description of known damages, both repaired and unrepaired.
     *
     * @param string $knownVehicleDamages
     *
     * @return static
     *
     * @see http://schema.org/knownVehicleDamages
     */
    public function knownVehicleDamages($knownVehicleDamages)
    {
        return $this->setProperty('knownVehicleDamages', $knownVehicleDamages);
    }

    /**
     * The date of the first registration of the vehicle with the respective
     * public authorities.
     *
     * @param \DateTimeInterface $dateVehicleFirstRegistered
     *
     * @return static
     *
     * @see http://schema.org/dateVehicleFirstRegistered
     */
    public function dateVehicleFirstRegistered($dateVehicleFirstRegistered)
    {
        return $this->setProperty('dateVehicleFirstRegistered', $dateVehicleFirstRegistered);
    }

    /**
     * The drive wheel configuration, i.e. which roadwheels will receive torque
     * from the vehicle's engine via the drivetrain.
     *
     * @param \Spatie\SchemaOrg\DriveWheelConfigurationValue|string $driveWheelConfiguration
     *
     * @return static
     *
     * @see http://schema.org/driveWheelConfiguration
     */
    public function driveWheelConfiguration($driveWheelConfiguration)
    {
        return $this->setProperty('driveWheelConfiguration', $driveWheelConfiguration);
    }

    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If
     * the vehicle has only one engine, this property can be attached directly
     * to the vehicle.
     *
     * @param string|\Spatie\SchemaOrg\QualitativeValue $fuelType
     *
     * @return static
     *
     * @see http://schema.org/fuelType
     */
    public function fuelType($fuelType)
    {
        return $this->setProperty('fuelType', $fuelType);
    }

    /**
     * The color or color combination of the interior of the vehicle.
     *
     * @param string $vehicleInteriorColor
     *
     * @return static
     *
     * @see http://schema.org/vehicleInteriorColor
     */
    public function vehicleInteriorColor($vehicleInteriorColor)
    {
        return $this->setProperty('vehicleInteriorColor', $vehicleInteriorColor);
    }

    /**
     * The type or material of the interior of the vehicle (e.g. synthetic
     * fabric, leather, wood, etc.). While most interior types are characterized
     * by the material used, an interior type can also be based on vehicle usage
     * or target audience.
     *
     * @param string $vehicleInteriorType
     *
     * @return static
     *
     * @see http://schema.org/vehicleInteriorType
     */
    public function vehicleInteriorType($vehicleInteriorType)
    {
        return $this->setProperty('vehicleInteriorType', $vehicleInteriorType);
    }

    /**
     * The total distance travelled by the particular vehicle since its initial
     * production, as read from its odometer.
     * 
     * Typical unit code(s): KMT for kilometers, SMI for statute miles
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue $mileageFromOdometer
     *
     * @return static
     *
     * @see http://schema.org/mileageFromOdometer
     */
    public function mileageFromOdometer($mileageFromOdometer)
    {
        return $this->setProperty('mileageFromOdometer', $mileageFromOdometer);
    }

    /**
     * The release date of a vehicle model (often used to differentiate versions
     * of the same make and model).
     *
     * @param \DateTimeInterface $vehicleModelDate
     *
     * @return static
     *
     * @see http://schema.org/vehicleModelDate
     */
    public function vehicleModelDate($vehicleModelDate)
    {
        return $this->setProperty('vehicleModelDate', $vehicleModelDate);
    }

    /**
     * The number of owners of the vehicle, including the current one.
     * 
     * Typical unit code(s): C62
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue|float|int $numberOfPreviousOwners
     *
     * @return static
     *
     * @see http://schema.org/numberOfPreviousOwners
     */
    public function numberOfPreviousOwners($numberOfPreviousOwners)
    {
        return $this->setProperty('numberOfPreviousOwners', $numberOfPreviousOwners);
    }

    /**
     * The date of production of the item, e.g. vehicle.
     *
     * @param \DateTimeInterface $productionDate
     *
     * @return static
     *
     * @see http://schema.org/productionDate
     */
    public function productionDate($productionDate)
    {
        return $this->setProperty('productionDate', $productionDate);
    }

    /**
     * The date the item e.g. vehicle was purchased by the current owner.
     *
     * @param \DateTimeInterface $purchaseDate
     *
     * @return static
     *
     * @see http://schema.org/purchaseDate
     */
    public function purchaseDate($purchaseDate)
    {
        return $this->setProperty('purchaseDate', $purchaseDate);
    }

    /**
     * The number of passengers that can be seated in the vehicle, both in terms
     * of the physical space available, and in terms of limitations set by law.
     * 
     * Typical unit code(s): C62 for persons.
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue|float|int $vehicleSeatingCapacity
     *
     * @return static
     *
     * @see http://schema.org/vehicleSeatingCapacity
     */
    public function vehicleSeatingCapacity($vehicleSeatingCapacity)
    {
        return $this->setProperty('vehicleSeatingCapacity', $vehicleSeatingCapacity);
    }

    /**
     * The type of component used for transmitting the power from a rotating
     * power source to the wheels or other relevant component(s) ("gearbox" for
     * cars).
     *
     * @param string|\Spatie\SchemaOrg\QualitativeValue $vehicleTransmission
     *
     * @return static
     *
     * @see http://schema.org/vehicleTransmission
     */
    public function vehicleTransmission($vehicleTransmission)
    {
        return $this->setProperty('vehicleTransmission', $vehicleTransmission);
    }

    /**
     * The position of the steering wheel or similar device (mostly for cars).
     *
     * @param \Spatie\SchemaOrg\SteeringPositionValue $steeringPosition
     *
     * @return static
     *
     * @see http://schema.org/steeringPosition
     */
    public function steeringPosition($steeringPosition)
    {
        return $this->setProperty('steeringPosition', $steeringPosition);
    }

    /**
     * Indicates whether the vehicle has been used for special purposes, like
     * commercial rental, driving school, or as a taxi. The legislation in many
     * countries requires this information to be revealed when offering a car
     * for sale.
     *
     * @param string $vehicleSpecialUsage
     *
     * @return static
     *
     * @see http://schema.org/vehicleSpecialUsage
     */
    public function vehicleSpecialUsage($vehicleSpecialUsage)
    {
        return $this->setProperty('vehicleSpecialUsage', $vehicleSpecialUsage);
    }

}
