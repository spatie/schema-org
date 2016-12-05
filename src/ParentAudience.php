<?php

namespace Spatie\SchemaOrg;

/**
 * A set of characteristics describing parents, who can be interested in viewing
 * some content.
 *
 * @see http://schema.org/ParentAudience
 */
class ParentAudience extends PeopleAudience
{
    /**
     * Maximal age of the child.
     *
     * @param float|int $childMaxAge
     *
     * @return static
     *
     * @see http://schema.org/childMaxAge
     */
    public function childMaxAge($childMaxAge)
    {
        return $this->setProperty('childMaxAge', $childMaxAge);
    }

    /**
     * Minimal age of the child.
     *
     * @param float|int $childMinAge
     *
     * @return static
     *
     * @see http://schema.org/childMinAge
     */
    public function childMinAge($childMinAge)
    {
        return $this->setProperty('childMinAge', $childMinAge);
    }

}
