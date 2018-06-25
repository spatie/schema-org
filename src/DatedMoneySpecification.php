<?php

namespace Spatie\SchemaOrg;

/**
 * A DatedMoneySpecification represents monetary values with optional start and
 * end dates. For example, this could represent an employee's salary over a
 * specific period of time. __Note:__ This type has been superseded by
 * [[MonetaryAmount]] use of that type is recommended
 *
 * @see http://schema.org/DatedMoneySpecification
 *
 * @mixin \Spatie\SchemaOrg\StructuredValue
 */
class DatedMoneySpecification extends BaseType
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
     * The currency in which the monetary amount is expressed.
     * 
     * Use standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies e.g. "BTC"; well known names for [Local Exchange
     * Tradings
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system)
     * (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     * @param string|string[] $currency
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
