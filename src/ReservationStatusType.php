<?php

namespace Spatie\SchemaOrg;

/**
 * Enumerated status values for Reservation.
 *
 * @see http://schema.org/ReservationStatusType
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class ReservationStatusType extends BaseType
{
    /**
     * The status for a previously confirmed reservation that is now cancelled.
     *
     * @see http://schema.org/ReservationCancelled
     */
     const ReservationCancelled = 'http://schema.org/ReservationCancelled';

    /**
     * The status of a confirmed reservation.
     *
     * @see http://schema.org/ReservationConfirmed
     */
     const ReservationConfirmed = 'http://schema.org/ReservationConfirmed';

    /**
     * The status of a reservation on hold pending an update like credit card
     * number or flight changes.
     *
     * @see http://schema.org/ReservationHold
     */
     const ReservationHold = 'http://schema.org/ReservationHold';

    /**
     * The status of a reservation when a request has been sent, but not
     * confirmed.
     *
     * @see http://schema.org/ReservationPending
     */
     const ReservationPending = 'http://schema.org/ReservationPending';

}
