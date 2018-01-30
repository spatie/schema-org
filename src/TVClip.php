<?php

namespace Spatie\SchemaOrg;

/**
 * A short TV program or a segment/part of a TV program.
 *
 * @see 
 */
class TVClip extends Clip
{
    /**
     * The TV series to which this episode or season belongs.
     *
     * @param TVSeries|TVSeries[] $partOfTVSeries
     *
     * @return static
     *
     * @see 
     */
    public function partOfTVSeries($partOfTVSeries)
    {
        return $this->setProperty('partOfTVSeries', $partOfTVSeries);
    }

}
