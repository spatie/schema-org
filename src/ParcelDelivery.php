<?php

namespace Spatie\SchemaOrg;

/**
 * The delivery of a parcel either via the postal service or a commercial
 * service.
 *
 * @see 
 */
class ParcelDelivery extends Intangible
{
    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel
     * delivery and flights.
     *
     * @param Organization|Organization[] $carrier
     *
     * @return static
     *
     * @see 
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
     * @see 
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
     * @see 
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
     * @see 
     */
    public function expectedArrivalFrom($expectedArrivalFrom)
    {
        return $this->setProperty('expectedArrivalFrom', $expectedArrivalFrom);
    }

    /**
     * Method used for delivery or shipping.
     *
     * @param DeliveryMethod|DeliveryMethod[] $hasDeliveryMethod
     *
     * @return static
     *
     * @see 
     */
    public function hasDeliveryMethod($hasDeliveryMethod)
    {
        return $this->setProperty('hasDeliveryMethod', $hasDeliveryMethod);
    }

    /**
     * The latest date the package may arrive.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $expectedArrivalUntil
     *
     * @return static
     *
     * @see 
     */
    public function expectedArrivalUntil($expectedArrivalUntil)
    {
        return $this->setProperty('expectedArrivalUntil', $expectedArrivalUntil);
    }

    /**
     * Item(s) being shipped.
     *
     * @param Product|Product[] $itemShipped
     *
     * @return static
     *
     * @see 
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
     * @see 
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
     * @see 
     */
    public function partOfOrder($partOfOrder)
    {
        return $this->setProperty('partOfOrder', $partOfOrder);
    }

    /**
     * Shipper tracking number.
     *
     * @param string|string[] $trackingNumber
     *
     * @return static
     *
     * @see 
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
     * @see 
     */
    public function trackingUrl($trackingUrl)
    {
        return $this->setProperty('trackingUrl', $trackingUrl);
    }

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     *
     * @param Person|Person[]|Organization|Organization[] $provider
     *
     * @return static
     *
     * @see 
     */
    public function provider($provider)
    {
        return $this->setProperty('provider', $provider);
    }

}
