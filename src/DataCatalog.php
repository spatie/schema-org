<?php

namespace Spatie\SchemaOrg;

/**
 * A collection of datasets.
 *
 * @see http://schema.org/DataCatalog
 */
class DataCatalog extends CreativeWork
{
    /**
     * A dataset contained in this catalog.
     *
     * @param \Spatie\SchemaOrg\Dataset $dataset
     *
     * @return static
     *
     * @see http://schema.org/dataset
     */
    public function dataset($dataset)
    {
        return $this->setProperty('dataset', $dataset);
    }

}
