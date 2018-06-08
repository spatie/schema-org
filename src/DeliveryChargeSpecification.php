<?php

namespace Spatie\SchemaOrg;

/**
 * The price for the delivery of an offer using a particular delivery method.
 *
 * @see http://schema.org/DeliveryChargeSpecification
 *
 * @mixin \Spatie\SchemaOrg\PriceSpecification
 */
class DeliveryChargeSpecification extends BaseType
{
    /**
     * The delivery method(s) to which the delivery charge or payment charge
     * specification applies.
     *
     * @param DeliveryMethod|DeliveryMethod[] $appliesToDeliveryMethod
     *
     * @return static
     *
     * @see http://schema.org/appliesToDeliveryMethod
     */
    public function appliesToDeliveryMethod($appliesToDeliveryMethod)
    {
        return $this->setProperty('appliesToDeliveryMethod', $appliesToDeliveryMethod);
    }

    /**
     * The geographic area where a service or offered item is provided.
     *
     * @param AdministrativeArea|AdministrativeArea[]|GeoShape|GeoShape[]|Place|Place[]|string|string[] $areaServed
     *
     * @return static
     *
     * @see http://schema.org/areaServed
     */
    public function areaServed($areaServed)
    {
        return $this->setProperty('areaServed', $areaServed);
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery
     * charge specification is valid.
     * 
     * See also [[ineligibleRegion]].
     *
     * @param GeoShape|GeoShape[]|Place|Place[]|string|string[] $eligibleRegion
     *
     * @return static
     *
     * @see http://schema.org/eligibleRegion
     */
    public function eligibleRegion($eligibleRegion)
    {
        return $this->setProperty('eligibleRegion', $eligibleRegion);
    }

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the
     * GeoShape for the geo-political region(s) for which the offer or delivery
     * charge specification is not valid, e.g. a region where the transaction is
     * not allowed.
     * 
     * See also [[eligibleRegion]].
     *
     * @param GeoShape|GeoShape[]|Place|Place[]|string|string[] $ineligibleRegion
     *
     * @return static
     *
     * @see http://schema.org/ineligibleRegion
     */
    public function ineligibleRegion($ineligibleRegion)
    {
        return $this->setProperty('ineligibleRegion', $ineligibleRegion);
    }

}
