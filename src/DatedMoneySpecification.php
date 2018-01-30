<?php

namespace Spatie\SchemaOrg;

/**
 * A DatedMoneySpecification represents monetary values with optional start and
 * end dates. For example, this could represent an employee's salary over a
 * specific period of time. __Note:__ This type has been superseded by
 * [[MonetaryAmount]] use of that type is recommended
 *
 * @see 
 */
class DatedMoneySpecification extends StructuredValue
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

    /**
     * The currency in which the monetary amount is expressed (in 3-letter [ISO
     * 4217](http://en.wikipedia.org/wiki/ISO_4217) format).
     *
     * @param string|string[] $currency
     *
     * @return static
     *
     * @see 
     */
    public function currency($currency)
    {
        return $this->setProperty('currency', $currency);
    }

}
