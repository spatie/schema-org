<?php

namespace Spatie\SchemaOrg;

/**
 * An order item is a line of an order. It includes the quantity and shipping
 * details of a bought offer.
 *
 * @see http://schema.org/OrderItem
 */
class OrderItem extends Intangible
{
    /**
     * The number of the item ordered. If the property is not set, assume the
     * quantity is one.
     *
     * @param float|int $orderQuantity
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
     * The current status of the order item.
     *
     * @param \Spatie\SchemaOrg\OrderStatus $orderItemStatus
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
     * The identifier of the order item.
     *
     * @param string $orderItemNumber
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
     * The delivery of the parcel related to this order or order item.
     *
     * @param \Spatie\SchemaOrg\ParcelDelivery $orderDelivery
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
     * The item ordered.
     *
     * @param \Spatie\SchemaOrg\Product|\Spatie\SchemaOrg\OrderItem $orderedItem
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
