<?php

namespace Spatie\SchemaOrg;

/**
 * The delivery of a parcel either via the postal service or a commercial
 * service.
 *
 * @see http://schema.org/ParcelDelivery
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class ParcelDelivery extends BaseType
{
    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel
     * delivery and flights.
     *
     * @param Organization|Organization[] $carrier
     *
     * @return static
     *
     * @see http://schema.org/carrier
     */
    public function carrier($carrier)
    {
        return $this->setProperty('carrier', $carrier);
    }

    /**
     * Destination address.
     *
     * @param PostalAddress|PostalAddress[] $deliveryAddress
     *
     * @return static
     *
     * @see http://schema.org/deliveryAddress
     */
    public function deliveryAddress($deliveryAddress)
    {
        return $this->setProperty('deliveryAddress', $deliveryAddress);
    }

    /**
     * New entry added as the package passes through each leg of its journey
     * (from shipment to final delivery).
     *
     * @param DeliveryEvent|DeliveryEvent[] $deliveryStatus
     *
     * @return static
     *
     * @see http://schema.org/deliveryStatus
     */
    public function deliveryStatus($deliveryStatus)
    {
        return $this->setProperty('deliveryStatus', $deliveryStatus);
    }

    /**
     * The earliest date the package may arrive.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $expectedArrivalFrom
     *
     * @return static
     *
     * @see http://schema.org/expectedArrivalFrom
     */
    public function expectedArrivalFrom($expectedArrivalFrom)
    {
        return $this->setProperty('expectedArrivalFrom', $expectedArrivalFrom);
    }

    /**
     * The latest date the package may arrive.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $expectedArrivalUntil
     *
     * @return static
     *
     * @see http://schema.org/expectedArrivalUntil
     */
    public function expectedArrivalUntil($expectedArrivalUntil)
    {
        return $this->setProperty('expectedArrivalUntil', $expectedArrivalUntil);
    }

    /**
     * Method used for delivery or shipping.
     *
     * @param DeliveryMethod|DeliveryMethod[] $hasDeliveryMethod
     *
     * @return static
     *
     * @see http://schema.org/hasDeliveryMethod
     */
    public function hasDeliveryMethod($hasDeliveryMethod)
    {
        return $this->setProperty('hasDeliveryMethod', $hasDeliveryMethod);
    }

    /**
     * Item(s) being shipped.
     *
     * @param Product|Product[] $itemShipped
     *
     * @return static
     *
     * @see http://schema.org/itemShipped
     */
    public function itemShipped($itemShipped)
    {
        return $this->setProperty('itemShipped', $itemShipped);
    }

    /**
     * Shipper's address.
     *
     * @param PostalAddress|PostalAddress[] $originAddress
     *
     * @return static
     *
     * @see http://schema.org/originAddress
     */
    public function originAddress($originAddress)
    {
        return $this->setProperty('originAddress', $originAddress);
    }

    /**
     * The overall order the items in this delivery were included in.
     *
     * @param Order|Order[] $partOfOrder
     *
     * @return static
     *
     * @see http://schema.org/partOfOrder
     */
    public function partOfOrder($partOfOrder)
    {
        return $this->setProperty('partOfOrder', $partOfOrder);
    }

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     *
     * @param Organization|Organization[]|Person|Person[] $provider
     *
     * @return static
     *
     * @see http://schema.org/provider
     */
    public function provider($provider)
    {
        return $this->setProperty('provider', $provider);
    }

    /**
     * Shipper tracking number.
     *
     * @param string|string[] $trackingNumber
     *
     * @return static
     *
     * @see http://schema.org/trackingNumber
     */
    public function trackingNumber($trackingNumber)
    {
        return $this->setProperty('trackingNumber', $trackingNumber);
    }

    /**
     * Tracking url for the parcel delivery.
     *
     * @param string|string[] $trackingUrl
     *
     * @return static
     *
     * @see http://schema.org/trackingUrl
     */
    public function trackingUrl($trackingUrl)
    {
        return $this->setProperty('trackingUrl', $trackingUrl);
    }

}
