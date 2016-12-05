<?php

namespace Spatie\SchemaOrg;

/**
 * A set of characteristics belonging to businesses, e.g. who compose an item's
 * target audience.
 *
 * @see http://schema.org/BusinessAudience
 */
class BusinessAudience extends Audience
{
    /**
     * The number of employees in an organization e.g. business.
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue $numberOfEmployees
     *
     * @return static
     *
     * @see http://schema.org/numberOfEmployees
     */
    public function numberOfEmployees($numberOfEmployees)
    {
        return $this->setProperty('numberOfEmployees', $numberOfEmployees);
    }

    /**
     * The size of the business in annual revenue.
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue $yearlyRevenue
     *
     * @return static
     *
     * @see http://schema.org/yearlyRevenue
     */
    public function yearlyRevenue($yearlyRevenue)
    {
        return $this->setProperty('yearlyRevenue', $yearlyRevenue);
    }

    /**
     * The age of the business.
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue $yearsInOperation
     *
     * @return static
     *
     * @see http://schema.org/yearsInOperation
     */
    public function yearsInOperation($yearsInOperation)
    {
        return $this->setProperty('yearsInOperation', $yearsInOperation);
    }

}
