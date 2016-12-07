<?php

namespace Spatie\SchemaOrg;

/**
 * A single feed providing structured information about one or more entities or
 * topics.
 *
 * @see http://schema.org/DataFeed
 */
class DataFeed extends Dataset
{
    /**
     * An item within in a data feed. Data feeds may have many elements.
     *
     * @param string|\Spatie\SchemaOrg\Thing|\Spatie\SchemaOrg\DataFeedItem $dataFeedElement
     *
     * @return static
     *
     * @see http://schema.org/dataFeedElement
     */
    public function dataFeedElement($dataFeedElement)
    {
        return $this->setProperty('dataFeedElement', $dataFeedElement);
    }

}
