<?php

namespace Spatie\SchemaOrg;

/**
 * A monetary value or range. This type can be used to describe an amount of
 * money such as $50 USD, or a range as in describing a bank account being
 * suitable for a balance between £1,000 and £1,000,000 GBP, or the value of a
 * salary, etc. It is recommended to use [[PriceSpecification]] Types to
 * describe the price of an Offer, Invoice, etc.
 *
 * @see 
 */
class MonetaryAmount extends StructuredValue
{
    /**
     * The upper value of some characteristic or property.
     *
     * @param float|float[]|int|int[] $maxValue
     *
     * @return static
     *
     * @see 
     */
    public function maxValue($maxValue)
    {
        return $this->setProperty('maxValue', $maxValue);
    }

    /**
     * The lower value of some characteristic or property.
     *
     * @param float|float[]|int|int[] $minValue
     *
     * @return static
     *
     * @see 
     */
    public function minValue($minValue)
    {
        return $this->setProperty('minValue', $minValue);
    }

    /**
     * The value of the quantitative value or property value node.
     * 
     * * For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type
     * for values is 'Number'.
     * * For [[PropertyValue]], it can be 'Text;', 'Number', 'Boolean', or
     * 'StructuredValue'.
     *
     * @param float|float[]|int|int[]|string|string[]|bool|bool[]|StructuredValue|StructuredValue[] $value
     *
     * @return static
     *
     * @see 
     */
    public function value($value)
    {
        return $this->setProperty('value', $value);
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
