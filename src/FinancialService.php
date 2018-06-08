<?php

namespace Spatie\SchemaOrg;

/**
 * Financial services business.
 *
 * @see http://schema.org/FinancialService
 *
 * @mixin \Spatie\SchemaOrg\LocalBusiness
 */
class FinancialService extends BaseType
{
    /**
     * Description of fees, commissions, and other terms applied either to a
     * class of financial product, or by a financial service organization.
     *
     * @param string|string[] $feesAndCommissionsSpecification
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
