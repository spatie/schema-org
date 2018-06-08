<?php

namespace Spatie\SchemaOrg;

/**
 * Enumerated status values for Order.
 *
 * @see http://schema.org/OrderStatus
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class OrderStatus extends BaseType
{
    /**
     * OrderStatus representing cancellation of an order.
     *
     * @see http://schema.org/OrderCancelled
     */
     const OrderCancelled = 'http://schema.org/OrderCancelled';

    /**
     * OrderStatus representing successful delivery of an order.
     *
     * @see http://schema.org/OrderDelivered
     */
     const OrderDelivered = 'http://schema.org/OrderDelivered';

    /**
     * OrderStatus representing that an order is in transit.
     *
     * @see http://schema.org/OrderInTransit
     */
     const OrderInTransit = 'http://schema.org/OrderInTransit';

    /**
     * OrderStatus representing that payment is due on an order.
     *
     * @see http://schema.org/OrderPaymentDue
     */
     const OrderPaymentDue = 'http://schema.org/OrderPaymentDue';

    /**
     * OrderStatus representing availability of an order for pickup.
     *
     * @see http://schema.org/OrderPickupAvailable
     */
     const OrderPickupAvailable = 'http://schema.org/OrderPickupAvailable';

    /**
     * OrderStatus representing that there is a problem with the order.
     *
     * @see http://schema.org/OrderProblem
     */
     const OrderProblem = 'http://schema.org/OrderProblem';

    /**
     * OrderStatus representing that an order is being processed.
     *
     * @see http://schema.org/OrderProcessing
     */
     const OrderProcessing = 'http://schema.org/OrderProcessing';

    /**
     * OrderStatus representing that an order has been returned.
     *
     * @see http://schema.org/OrderReturned
     */
     const OrderReturned = 'http://schema.org/OrderReturned';

}
