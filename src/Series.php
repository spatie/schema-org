<?php

namespace Spatie\SchemaOrg;

/**
 * A Series in schema.org is a group of related items, typically but not
 * necessarily of the same kind.
 *
 * @see http://schema.org/Series
 *
 * @mixin CreativeWork
 */
class Series
{
    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an
     * event. Directors can be associated with individual items or with a
     * series, episode, clip.
     *
     * @param Person|Person[] $director
     *
     * @return static
     *
     * @see http://schema.org/director
     */
    public function director($director)
    {
        return $this->setProperty('director', $director);
    }

}
