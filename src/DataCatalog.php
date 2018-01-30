<?php

namespace Spatie\SchemaOrg;

/**
 * A collection of datasets.
 *
 * @see 
 */
class DataCatalog extends CreativeWork
{
    /**
     * A dataset contained in this catalog.
     *
     * @param Dataset|Dataset[] $dataset
     *
     * @return static
     *
     * @see 
     */
    public function dataset($dataset)
    {
        return $this->setProperty('dataset', $dataset);
    }

}
