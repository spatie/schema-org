<?php

namespace Spatie\SchemaOrg;

/**
 * A product provided to consumers and businesses by financial institutions such
 * as banks, insurance companies, brokerage firms, consumer finance companies,
 * and investment companies which comprise the financial services industry.
 *
 * @see http://schema.org/FinancialProduct
 *
 * @mixin \Spatie\SchemaOrg\Service
 */
class FinancialProduct extends BaseType
{
    /**
     * The annual rate that is charged for borrowing (or made by investing),
     * expressed as a single percentage number that represents the actual yearly
     * cost of funds over the term of a loan. This includes any fees or
     * additional costs associated with the transaction.
     *
     * @param QuantitativeValue|QuantitativeValue[]|float|float[]|int|int[] $annualPercentageRate
     *
     * @return static
     *
     * @see http://schema.org/annualPercentageRate
     */
    public function annualPercentageRate($annualPercentageRate)
    {
        return $this->setProperty('annualPercentageRate', $annualPercentageRate);
    }

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

    /**
     * The interest rate, charged or paid, applicable to the financial product.
     * Note: This is different from the calculated annualPercentageRate.
     *
     * @param QuantitativeValue|QuantitativeValue[]|float|float[]|int|int[] $interestRate
     *
     * @return static
     *
     * @see http://schema.org/interestRate
     */
    public function interestRate($interestRate)
    {
        return $this->setProperty('interestRate', $interestRate);
    }

}
