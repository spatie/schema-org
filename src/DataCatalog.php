<?php

namespace Spatie\SchemaOrg;

/**
 * A collection of datasets.
 *
 * @see http://schema.org/DataCatalog
 *
 * @mixin CreativeWork
 */
class DataCatalog extends BaseType
{
    /**
     * A dataset contained in this catalog.
     *
     * @param Dataset|Dataset[] $dataset
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
