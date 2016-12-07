<?php

namespace Spatie\SchemaOrg;

/**
 * A financial product for the loaning of an amount of money under agreed terms
 * and charges.
 *
 * @see http://schema.org/LoanOrCredit
 */
class LoanOrCredit extends FinancialProduct
{
    /**
     * The amount of money.
     *
     * @param \Spatie\SchemaOrg\MonetaryAmount|float|int $amount
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
     * @param \Spatie\SchemaOrg\QuantitativeValue $loanTerm
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
     * @param \Spatie\SchemaOrg\Thing|string $requiredCollateral
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
