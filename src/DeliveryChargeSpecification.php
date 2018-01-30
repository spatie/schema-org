<?php

namespace Spatie\SchemaOrg;

/**
 * The price for the delivery of an offer using a particular delivery method.
 *
 * @see 
 */
class DeliveryChargeSpecification extends PriceSpecification
{
    /**
     * The geographic area where a service or offered item is provided.
     *
     * @param Place|Place[]|AdministrativeArea|AdministrativeArea[]|GeoShape|GeoShape[]|string|string[] $areaServed
     *
     * @return static
     *
     * @see 
     */
    public function areaServed($areaServed)
    {
        return $this->setProperty('areaServed', $areaServed);
    }

    /**
     * The delivery method(s) to which the delivery charge or payment charge
     * specification applies.
     *
     * @param DeliveryMethod|DeliveryMethod[] $appliesToDeliveryMethod
     *
     * @return static
     *
     * @see 
     */
    public function appliesToDeliveryMethod($appliesToDeliveryMethod)
    {
        return $this->setProperty('appliesToDeliveryMethod', $appliesToDeliveryMethod);
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
     * @see 
     */
    public function ineligibleRegion($ineligibleRegion)
    {
        return $this->setProperty('ineligibleRegion', $ineligibleRegion);
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
     * @see 
     */
    public function eligibleRegion($eligibleRegion)
    {
        return $this->setProperty('eligibleRegion', $eligibleRegion);
    }

}
