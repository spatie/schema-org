<?php

namespace Spatie\SchemaOrg;

/**
 * Financial services business.
 *
 * @see http://schema.org/FinancialService
 */
class FinancialService extends LocalBusiness
{
    /**
     * Description of fees, commissions, and other terms applied either to a
     * class of financial product, or by a financial service organization.
     *
     * @param string $feesAndCommissionsSpecification
     *
     * @return static
     *
     * @see http://schema.org/feesAndCommissionsSpecification
     */
    public function feesAndCommissionsSpecification($feesAndCommissionsSpecification)
    {
        return $this->setProperty('feesAndCommissionsSpecification', $feesAndCommissionsSpecification);
    }

}
