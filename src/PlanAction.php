<?php

namespace Spatie\SchemaOrg;

/**
 * The act of planning the execution of an event/task/action/reservation/plan to
 * a future date.
 *
 * @see http://schema.org/PlanAction
 */
class PlanAction extends OrganizeAction
{
    /**
     * The time the object is scheduled to.
     *
     * @param \DateTimeInterface $scheduledTime
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
