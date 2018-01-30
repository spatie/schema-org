<?php

namespace Spatie\SchemaOrg;

/**
 * A set of characteristics describing parents, who can be interested in viewing
 * some content.
 *
 * @see 
 */
class ParentAudience extends PeopleAudience
{
    /**
     * Maximal age of the child.
     *
     * @param float|float[]|int|int[] $childMaxAge
     *
     * @return static
     *
     * @see 
     */
    public function childMaxAge($childMaxAge)
    {
        return $this->setProperty('childMaxAge', $childMaxAge);
    }

    /**
     * Minimal age of the child.
     *
     * @param float|float[]|int|int[] $childMinAge
     *
     * @return static
     *
     * @see 
     */
    public function childMinAge($childMinAge)
    {
        return $this->setProperty('childMinAge', $childMinAge);
    }

}
