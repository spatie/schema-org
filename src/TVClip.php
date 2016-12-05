<?php

namespace Spatie\SchemaOrg;

/**
 * A short TV program or a segment/part of a TV program.
 *
 * @see http://schema.org/TVClip
 */
class TVClip extends Clip
{
    /**
     * The TV series to which this episode or season belongs.
     *
     * @param \Spatie\SchemaOrg\TVSeries $partOfTVSeries
     *
     * @return static
     *
     * @see http://schema.org/partOfTVSeries
     */
    public function partOfTVSeries($partOfTVSeries)
    {
        return $this->setProperty('partOfTVSeries', $partOfTVSeries);
    }

}
