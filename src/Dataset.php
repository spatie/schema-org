<?php

namespace Spatie\SchemaOrg;

/**
 * A body of structured information describing some topic(s) of interest.
 *
 * @see http://schema.org/Dataset
 */
class Dataset extends CreativeWork
{
    /**
     * A data catalog which contains this dataset.
     *
     * @param DataCatalog|DataCatalog[] $catalog
     *
     * @return static
     *
     * @see http://schema.org/catalog
     */
    public function catalog($catalog)
    {
        return $this->setProperty('catalog', $catalog);
    }

    /**
     * The range of temporal applicability of a dataset, e.g. for a 2011 census
     * dataset, the year 2011 (in ISO 8601 time interval format).
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $datasetTimeInterval
     *
     * @return static
     *
     * @see http://schema.org/datasetTimeInterval
     */
    public function datasetTimeInterval($datasetTimeInterval)
    {
        return $this->setProperty('datasetTimeInterval', $datasetTimeInterval);
    }

    /**
     * A downloadable form of this dataset, at a specific location, in a
     * specific format.
     *
     * @param DataDownload|DataDownload[] $distribution
     *
     * @return static
     *
     * @see http://schema.org/distribution
     */
    public function distribution($distribution)
    {
        return $this->setProperty('distribution', $distribution);
    }

    /**
     * A data catalog which contains this dataset (this property was previously
     * 'catalog', preferred name is now 'includedInDataCatalog').
     *
     * @param DataCatalog|DataCatalog[] $includedDataCatalog
     *
     * @return static
     *
     * @see http://schema.org/includedDataCatalog
     */
    public function includedDataCatalog($includedDataCatalog)
    {
        return $this->setProperty('includedDataCatalog', $includedDataCatalog);
    }

    /**
     * A data catalog which contains this dataset.
     *
     * @param DataCatalog|DataCatalog[] $includedInDataCatalog
     *
     * @return static
     *
     * @see http://schema.org/includedInDataCatalog
     */
    public function includedInDataCatalog($includedInDataCatalog)
    {
        return $this->setProperty('includedInDataCatalog', $includedInDataCatalog);
    }

    /**
     * The range of spatial applicability of a dataset, e.g. for a dataset of
     * New York weather, the state of New York.
     *
     * @param Place|Place[] $spatial
     *
     * @return static
     *
     * @see http://schema.org/spatial
     */
    public function spatial($spatial)
    {
        return $this->setProperty('spatial', $spatial);
    }

    /**
     * The range of temporal applicability of a dataset, e.g. for a 2011 census
     * dataset, the year 2011 (in ISO 8601 time interval format).
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $temporal
     *
     * @return static
     *
     * @see http://schema.org/temporal
     */
    public function temporal($temporal)
    {
        return $this->setProperty('temporal', $temporal);
    }

}
