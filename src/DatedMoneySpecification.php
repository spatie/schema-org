<?php

namespace Spatie\SchemaOrg;

/**
 * A DatedMoneySpecification represents monetary values with optional start and
 * end dates. For example, this could represent an employee's salary over a
 * specific period of time. __Note:__ This type has been superseded by
 * [[MonetaryAmount]] use of that type is recommended
 *
 * @see http://schema.org/DatedMoneySpecification
 */
class DatedMoneySpecification extends StructuredValue
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
     * The currency in which the monetary amount is expressed (in 3-letter [ISO
     * 4217](http://en.wikipedia.org/wiki/ISO_4217) format).
     *
     * @param string $currency
     *
     * @return static
     *
     * @see http://schema.org/currency
     */
    public function currency($currency)
    {
        return $this->setProperty('currency', $currency);
    }

}
