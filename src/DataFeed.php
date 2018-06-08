<?php

namespace Spatie\SchemaOrg;

/**
 * A single feed providing structured information about one or more entities or
 * topics.
 *
 * @see http://schema.org/DataFeed
 *
 * @mixin \Spatie\SchemaOrg\Dataset
 */
class DataFeed extends BaseType
{
    /**
     * An item within in a data feed. Data feeds may have many elements.
     *
     * @param DataFeedItem|DataFeedItem[]|Thing|Thing[]|string|string[] $dataFeedElement
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
