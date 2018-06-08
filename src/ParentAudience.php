<?php

namespace Spatie\SchemaOrg;

/**
 * A set of characteristics describing parents, who can be interested in viewing
 * some content.
 *
 * @see http://schema.org/ParentAudience
 *
 * @mixin \Spatie\SchemaOrg\PeopleAudience
 */
class ParentAudience extends BaseType
{
    /**
     * Maximal age of the child.
     *
     * @param float|float[]|int|int[] $childMaxAge
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
     * @param float|float[]|int|int[] $childMinAge
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
