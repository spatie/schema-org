<?php

namespace Spatie\SchemaOrg;

/**
 * The act of planning the execution of an event/task/action/reservation/plan to
 * a future date.
 *
 * @see http://schema.org/PlanAction
 *
 * @mixin \Spatie\SchemaOrg\OrganizeAction
 */
class PlanAction extends BaseType
{
    /**
     * The time the object is scheduled to.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $scheduledTime
     *
     * @return static
     *
     * @see http://schema.org/scheduledTime
     */
    public function scheduledTime($scheduledTime)
    {
        return $this->setProperty('scheduledTime', $scheduledTime);
    }

}
