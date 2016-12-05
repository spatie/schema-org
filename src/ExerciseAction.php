<?php

namespace Spatie\SchemaOrg;

/**
 * The act of participating in exertive activity for the purposes of improving
 * health and fitness.
 *
 * @see http://schema.org/ExerciseAction
 */
class ExerciseAction extends PlayAction
{
    /**
     * A sub property of location. The course where this action was taken.
     *
     * @param \Spatie\SchemaOrg\Place $course
     *
     * @return static
     *
     * @see http://schema.org/course
     */
    public function course($course)
    {
        return $this->setProperty('course', $course);
    }

    /**
     * A sub property of location. The course where this action was taken.
     *
     * @param \Spatie\SchemaOrg\Place $exerciseCourse
     *
     * @return static
     *
     * @see http://schema.org/exerciseCourse
     */
    public function exerciseCourse($exerciseCourse)
    {
        return $this->setProperty('exerciseCourse', $exerciseCourse);
    }

    /**
     * The distance travelled, e.g. exercising or travelling.
     *
     * @param \Spatie\SchemaOrg\Distance $distance
     *
     * @return static
     *
     * @see http://schema.org/distance
     */
    public function distance($distance)
    {
        return $this->setProperty('distance', $distance);
    }

    /**
     * A sub property of location. The original location of the object or the
     * agent before the action.
     *
     * @param \Spatie\SchemaOrg\Place $fromLocation
     *
     * @return static
     *
     * @see http://schema.org/fromLocation
     */
    public function fromLocation($fromLocation)
    {
        return $this->setProperty('fromLocation', $fromLocation);
    }

    /**
     * A sub property of participant. The opponent on this action.
     *
     * @param \Spatie\SchemaOrg\Person $opponent
     *
     * @return static
     *
     * @see http://schema.org/opponent
     */
    public function opponent($opponent)
    {
        return $this->setProperty('opponent', $opponent);
    }

    /**
     * A sub property of location. The sports activity location where this
     * action occurred.
     *
     * @param \Spatie\SchemaOrg\SportsActivityLocation $sportsActivityLocation
     *
     * @return static
     *
     * @see http://schema.org/sportsActivityLocation
     */
    public function sportsActivityLocation($sportsActivityLocation)
    {
        return $this->setProperty('sportsActivityLocation', $sportsActivityLocation);
    }

    /**
     * A sub property of location. The sports event where this action occurred.
     *
     * @param \Spatie\SchemaOrg\SportsEvent $sportsEvent
     *
     * @return static
     *
     * @see http://schema.org/sportsEvent
     */
    public function sportsEvent($sportsEvent)
    {
        return $this->setProperty('sportsEvent', $sportsEvent);
    }

    /**
     * A sub property of participant. The sports team that participated on this
     * action.
     *
     * @param \Spatie\SchemaOrg\SportsTeam $sportsTeam
     *
     * @return static
     *
     * @see http://schema.org/sportsTeam
     */
    public function sportsTeam($sportsTeam)
    {
        return $this->setProperty('sportsTeam', $sportsTeam);
    }

    /**
     * A sub property of location. The final location of the object or the agent
     * after the action.
     *
     * @param \Spatie\SchemaOrg\Place $toLocation
     *
     * @return static
     *
     * @see http://schema.org/toLocation
     */
    public function toLocation($toLocation)
    {
        return $this->setProperty('toLocation', $toLocation);
    }

}
