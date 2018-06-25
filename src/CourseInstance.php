<?php

namespace Spatie\SchemaOrg;

/**
 * An instance of a [[Course]] which is distinct from other instances because it
 * is offered at a different time or location or through different media or
 * modes of study or to a specific section of students.
 *
 * @see http://schema.org/CourseInstance
 *
 * @mixin \Spatie\SchemaOrg\Event
 */
class CourseInstance extends BaseType
{
    /**
     * The medium or means of delivery of the course instance or the mode of
     * study, either as a text label (e.g. "online", "onsite" or "blended";
     * "synchronous" or "asynchronous"; "full-time" or "part-time") or as a URL
     * reference to a term from a controlled vocabulary (e.g.
     * https://ceds.ed.gov/element/001311#Asynchronous ).
     *
     * @param string|string[] $courseMode
     *
     * @return static
     *
     * @see http://schema.org/courseMode
     */
    public function courseMode($courseMode)
    {
        return $this->setProperty('courseMode', $courseMode);
    }

    /**
     * A person assigned to instruct or provide instructional assistance for the
     * [[CourseInstance]].
     *
     * @param Person|Person[] $instructor
     *
     * @return static
     *
     * @see http://schema.org/instructor
     */
    public function instructor($instructor)
    {
        return $this->setProperty('instructor', $instructor);
    }

}
