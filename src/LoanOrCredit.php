<?php

namespace Spatie\SchemaOrg;

/**
 * A financial product for the loaning of an amount of money under agreed terms
 * and charges.
 *
 * @see http://schema.org/LoanOrCredit
 *
 * @mixin \Spatie\SchemaOrg\FinancialProduct
 */
class LoanOrCredit extends BaseType
{
    /**
     * The amount of money.
     *
     * @param MonetaryAmount|MonetaryAmount[]|float|float[]|int|int[] $amount
     *
     * @return static
     *
     * @see http://schema.org/amount
     */
    public function amount($amount)
    {
        return $this->setProperty('amount', $amount);
    }

    /**
     * The duration of the loan or credit agreement.
     *
     * @param QuantitativeValue|QuantitativeValue[] $loanTerm
     *
     * @return static
     *
     * @see http://schema.org/loanTerm
     */
    public function loanTerm($loanTerm)
    {
        return $this->setProperty('loanTerm', $loanTerm);
    }

    /**
     * Assets required to secure loan or credit repayments. It may take form of
     * third party pledge, goods, financial instruments (cash, securities, etc.)
     *
     * @param Thing|Thing[]|string|string[] $requiredCollateral
     *
     * @return static
     *
     * @see http://schema.org/requiredCollateral
     */
    public function requiredCollateral($requiredCollateral)
    {
        return $this->setProperty('requiredCollateral', $requiredCollateral);
    }

}
