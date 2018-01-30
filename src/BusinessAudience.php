<?php

namespace Spatie\SchemaOrg;

/**
 * A set of characteristics belonging to businesses, e.g. who compose an item's
 * target audience.
 *
 * @see 
 */
class BusinessAudience extends Audience
{
    /**
     * The number of employees in an organization e.g. business.
     *
     * @param QuantitativeValue|QuantitativeValue[] $numberOfEmployees
     *
     * @return static
     *
     * @see 
     */
    public function numberOfEmployees($numberOfEmployees)
    {
        return $this->setProperty('numberOfEmployees', $numberOfEmployees);
    }

    /**
     * The size of the business in annual revenue.
     *
     * @param QuantitativeValue|QuantitativeValue[] $yearlyRevenue
     *
     * @return static
     *
     * @see 
     */
    public function yearlyRevenue($yearlyRevenue)
    {
        return $this->setProperty('yearlyRevenue', $yearlyRevenue);
    }

    /**
     * The age of the business.
     *
     * @param QuantitativeValue|QuantitativeValue[] $yearsInOperation
     *
     * @return static
     *
     * @see 
     */
    public function yearsInOperation($yearsInOperation)
    {
        return $this->setProperty('yearsInOperation', $yearsInOperation);
    }

}
