<?php

namespace Spatie\SchemaOrg;

/**
 * Financial services business.
 *
 * @see 
 */
class FinancialService extends LocalBusiness
{
    /**
     * Description of fees, commissions, and other terms applied either to a
     * class of financial product, or by a financial service organization.
     *
     * @param string|string[] $feesAndCommissionsSpecification
     *
     * @return static
     *
     * @see 
     */
    public function feesAndCommissionsSpecification($feesAndCommissionsSpecification)
    {
        return $this->setProperty('feesAndCommissionsSpecification', $feesAndCommissionsSpecification);
    }

}
