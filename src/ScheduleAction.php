<?php

namespace Spatie\SchemaOrg;

/**
 * Scheduling future actions, events, or tasks.
 * 
 * Related actions:
 * 
 * * [[ReserveAction]]: Unlike ReserveAction, ScheduleAction allocates future
 * actions (e.g. an event, a task, etc) towards a time slot / spatial
 * allocation.
 *
 * @see 
 */
class ScheduleAction extends PlanAction
{
}
