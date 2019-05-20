<?php

namespace Spatie\SchemaOrg;

/**
 * The frequency in MHz and the modulation used for a particular
 * BroadcastService.
 *
 * @see http://schema.org/BroadcastFrequencySpecification
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class BroadcastFrequencySpecification extends BaseType
{
    /**
     * The frequency in MHz for a particular broadcast.
     *
     * @param QuantitativeValue|QuantitativeValue[]|float|float[]|int|int[] $broadcastFrequencyValue
     *
     * @return static
     *
     * @see http://schema.org/broadcastFrequencyValue
     */
    public function broadcastFrequencyValue($broadcastFrequencyValue)
    {
        return $this->setProperty('broadcastFrequencyValue', $broadcastFrequencyValue);
    }

}
