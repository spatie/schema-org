<?php

namespace Spatie\SchemaOrg;

/**
 * not necessarily of the same kind.
 *
 * @see http://schema.org/Series
 */
class Series extends CreativeWork
{
    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an
     * event. Directors can be associated with individual items or with a
     * series, episode, clip.
     *
     * @param \Spatie\SchemaOrg\Person $director
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
