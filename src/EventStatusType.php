<?php

namespace Spatie\SchemaOrg;

/**
 * EventStatusType is an enumeration type whose instances represent several
 * states that an Event may be in.
 *
 * @see http://schema.org/EventStatusType
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class EventStatusType extends BaseType
{
    /**
     * The event has been cancelled. If the event has multiple startDate values,
     * all are assumed to be cancelled. Either startDate or previousStartDate
     * may be used to specify the event's cancelled date(s).
     *
     * @see http://schema.org/EventCancelled
     */
     const EventCancelled = 'http://schema.org/EventCancelled';

    /**
     * The event has been postponed and no new date has been set. The event's
     * previousStartDate should be set.
     *
     * @see http://schema.org/EventPostponed
     */
     const EventPostponed = 'http://schema.org/EventPostponed';

    /**
     * The event has been rescheduled. The event's previousStartDate should be
     * set to the old date and the startDate should be set to the event's new
     * date. (If the event has been rescheduled multiple times, the
     * previousStartDate property may be repeated).
     *
     * @see http://schema.org/EventRescheduled
     */
     const EventRescheduled = 'http://schema.org/EventRescheduled';

    /**
     * The event is taking place or has taken place on the startDate as
     * scheduled. Use of this value is optional, as it is assumed by default.
     *
     * @see http://schema.org/EventScheduled
     */
     const EventScheduled = 'http://schema.org/EventScheduled';

}
