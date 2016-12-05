<?php

namespace Spatie\SchemaOrg;

/**
 * Scheduling future actions, events, or tasks.\n\nRelated actions:\n\n*
 * [[ReserveAction]]: Unlike ReserveAction, ScheduleAction allocates future
 * actions (e.g. an event, a task, etc) towards a time slot / spatial
 * allocation.
 *
 * @see http://schema.org/ScheduleAction
 */
class ScheduleAction extends PlanAction
{
}
