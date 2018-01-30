<?php

namespace Spatie\SchemaOrg;

/**
 * A single feed providing structured information about one or more entities or
 * topics.
 *
 * @see 
 */
class DataFeed extends Dataset
{
    /**
     * An item within in a data feed. Data feeds may have many elements.
     *
     * @param string|string[]|Thing|Thing[]|DataFeedItem|DataFeedItem[] $dataFeedElement
     *
     * @return static
     *
     * @see 
     */
    public function dataFeedElement($dataFeedElement)
    {
        return $this->setProperty('dataFeedElement', $dataFeedElement);
    }

}
