<?php

namespace Spatie\SchemaOrg;

/**
 * A description of an educational course which may be offered as distinct
 * instances at which take place at different times or take place at different
 * locations, or be offered through different media or modes of study. An
 * educational course is a sequence of one or more educational events and/or
 * creative works which aims to build knowledge, competence or ability of
 * learners.
 *
 * @see http://schema.org/Course
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class Course extends BaseType
{
    /**
     * The identifier for the [[Course]] used by the course [[provider]] (e.g.
     * CS101 or 6.001).
     *
     * @param string|string[] $courseCode
     *
     * @return static
     *
     * @see http://schema.org/courseCode
     */
    public function courseCode($courseCode)
    {
        return $this->setProperty('courseCode', $courseCode);
    }

    /**
     * Requirements for taking the Course. May be completion of another
     * [[Course]] or a textual description like "permission of instructor".
     * Requirements may be a pre-requisite competency, referenced using
     * [[AlignmentObject]].
     *
     * @param AlignmentObject|AlignmentObject[]|Course|Course[]|string|string[] $coursePrerequisites
     *
     * @return static
     *
     * @see http://schema.org/coursePrerequisites
     */
    public function coursePrerequisites($coursePrerequisites)
    {
        return $this->setProperty('coursePrerequisites', $coursePrerequisites);
    }

    /**
     * An offering of the course at a specific time and place or through
     * specific media or mode of study or to a specific section of students.
     *
     * @param CourseInstance|CourseInstance[] $hasCourseInstance
     *
     * @return static
     *
     * @see http://schema.org/hasCourseInstance
     */
    public function hasCourseInstance($hasCourseInstance)
    {
        return $this->setProperty('hasCourseInstance', $hasCourseInstance);
    }

}
