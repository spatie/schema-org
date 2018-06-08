<?php

namespace Spatie\SchemaOrg;

/**
 * Information about the engine of the vehicle. A vehicle can have multiple
 * engines represented by multiple engine specification entities.
 *
 * @see http://schema.org/EngineSpecification
 *
 * @mixin \Spatie\SchemaOrg\StructuredValue
 */
class EngineSpecification extends BaseType
{
    /**
     * The type of fuel suitable for the engine or engines of the vehicle. If
     * the vehicle has only one engine, this property can be attached directly
     * to the vehicle.
     *
     * @param QualitativeValue|QualitativeValue[]|string|string[] $fuelType
     *
     * @return static
     *
     * @see http://schema.org/fuelType
     */
    public function fuelType($fuelType)
    {
        return $this->setProperty('fuelType', $fuelType);
    }

}
