<?php

namespace Spatie\SchemaOrg;

/**
 * A type of financial product that typically requires the client to transfer
 * funds to a financial service in return for potential beneficial financial
 * return.
 *
 * @see 
 */
class InvestmentOrDeposit extends FinancialProduct
{
    /**
     * The amount of money.
     *
     * @param MonetaryAmount|MonetaryAmount[]|float|float[]|int|int[] $amount
     *
     * @return static
     *
     * @see 
     */
    public function amount($amount)
    {
        return $this->setProperty('amount', $amount);
    }

}
