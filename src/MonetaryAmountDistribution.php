<?php

namespace Spatie\SchemaOrg;

/**
 * A statistical distribution of monetary amounts.
 *
 * @see http://schema.org/MonetaryAmountDistribution
 *
 * @mixin \Spatie\SchemaOrg\QuantitativeValueDistribution
 */
class MonetaryAmountDistribution extends BaseType
{
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
