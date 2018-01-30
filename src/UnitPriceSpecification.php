<?php

namespace Spatie\SchemaOrg;

/**
 * The price asked for a given offer by the respective organization or person.
 *
 * @see 
 */
class UnitPriceSpecification extends PriceSpecification
{
    /**
     * This property specifies the minimal quantity and rounding increment that
     * will be the basis for the billing. The unit of measurement is specified
     * by the unitCode property.
     *
     * @param float|float[]|int|int[] $billingIncrement
     *
     * @return static
     *
     * @see 
     */
    public function billingIncrement($billingIncrement)
    {
        return $this->setProperty('billingIncrement', $billingIncrement);
    }

    /**
     * A short text or acronym indicating multiple price specifications for the
     * same offer, e.g. SRP for the suggested retail price or INVOICE for the
     * invoice price, mostly used in the car industry.
     *
     * @param string|string[] $priceType
     *
     * @return static
     *
     * @see 
     */
    public function priceType($priceType)
    {
        return $this->setProperty('priceType', $priceType);
    }

    /**
     * The reference quantity for which a certain price applies, e.g. 1 EUR per
     * 4 kWh of electricity. This property is a replacement for
     * unitOfMeasurement for the advanced cases where the price does not relate
     * to a standard unit.
     *
     * @param QuantitativeValue|QuantitativeValue[] $referenceQuantity
     *
     * @return static
     *
     * @see 
     */
    public function referenceQuantity($referenceQuantity)
    {
        return $this->setProperty('referenceQuantity', $referenceQuantity);
    }

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3
     * characters) or a URL. Other codes than the UN/CEFACT Common Code may be
     * used with a prefix followed by a colon.
     *
     * @param string|string[] $unitCode
     *
     * @return static
     *
     * @see 
     */
    public function unitCode($unitCode)
    {
        return $this->setProperty('unitCode', $unitCode);
    }

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot
     * provide a standard unit code for
     * <a href='unitCode'>unitCode</a>.
     *
     * @param string|string[] $unitText
     *
     * @return static
     *
     * @see 
     */
    public function unitText($unitText)
    {
        return $this->setProperty('unitText', $unitText);
    }

}
