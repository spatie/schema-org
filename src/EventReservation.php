<?php

namespace Spatie\SchemaOrg;

/**
 * A reservation for an event like a concert, sporting event, or lecture.
 * 
 * Note: This type is for information about actual reservations, e.g. in
 * confirmation emails or HTML pages with individual confirmations of
 * reservations. For offers of tickets, use [[Offer]].
 *
 * @see http://schema.org/EventReservation
 */
class EventReservation extends Reservation
{
}
