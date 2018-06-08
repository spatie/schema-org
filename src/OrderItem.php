<?php

namespace Spatie\SchemaOrg;

/**
 * An order item is a line of an order. It includes the quantity and shipping
 * details of a bought offer.
 *
 * @see http://schema.org/OrderItem
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class OrderItem extends BaseType
{
    /**
     * The delivery of the parcel related to this order or order item.
     *
     * @param ParcelDelivery|ParcelDelivery[] $orderDelivery
     *
     * @return static
     *
     * @see http://schema.org/orderDelivery
     */
    public function orderDelivery($orderDelivery)
    {
        return $this->setProperty('orderDelivery', $orderDelivery);
    }

    /**
     * The identifier of the order item.
     *
     * @param string|string[] $orderItemNumber
     *
     * @return static
     *
     * @see http://schema.org/orderItemNumber
     */
    public function orderItemNumber($orderItemNumber)
    {
        return $this->setProperty('orderItemNumber', $orderItemNumber);
    }

    /**
     * The current status of the order item.
     *
     * @param OrderStatus|OrderStatus[] $orderItemStatus
     *
     * @return static
     *
     * @see http://schema.org/orderItemStatus
     */
    public function orderItemStatus($orderItemStatus)
    {
        return $this->setProperty('orderItemStatus', $orderItemStatus);
    }

    /**
     * The number of the item ordered. If the property is not set, assume the
     * quantity is one.
     *
     * @param float|float[]|int|int[] $orderQuantity
     *
     * @return static
     *
     * @see http://schema.org/orderQuantity
     */
    public function orderQuantity($orderQuantity)
    {
        return $this->setProperty('orderQuantity', $orderQuantity);
    }

    /**
     * The item ordered.
     *
     * @param OrderItem|OrderItem[]|Product|Product[] $orderedItem
     *
     * @return static
     *
     * @see http://schema.org/orderedItem
     */
    public function orderedItem($orderedItem)
    {
        return $this->setProperty('orderedItem', $orderedItem);
    }

}
