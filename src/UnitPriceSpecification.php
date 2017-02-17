<?php

namespace Spatie\SchemaOrg;

/**
 * The price asked for a given offer by the respective organization or person.
 *
 * @see http://schema.org/UnitPriceSpecification
 */
class UnitPriceSpecification extends PriceSpecification
{
    /**
     * This property specifies the minimal quantity and rounding increment that
     * will be the basis for the billing. The unit of measurement is specified
     * by the unitCode property.
     *
     * @param float|int $billingIncrement
     *
     * @return static
     *
     * @see http://schema.org/billingIncrement
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
     * @param string $priceType
     *
     * @return static
     *
     * @see http://schema.org/priceType
     */
    public function priceType($priceType)
    {
        return $this->setProperty('priceType', $priceType);
    }

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3
     * characters) or a URL. Other codes than the UN/CEFACT Common Code may be
     * used with a prefix followed by a colon.
     *
     * @param string $unitCode
     *
     * @return static
     *
     * @see http://schema.org/unitCode
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
     * @param string $unitText
     *
     * @return static
     *
     * @see http://schema.org/unitText
     */
    public function unitText($unitText)
    {
        return $this->setProperty('unitText', $unitText);
    }

    /**
     * The reference quantity for which a certain price applies, e.g. 1 EUR per
     * 4 kWh of electricity. This property is a replacement for
     * unitOfMeasurement for the advanced cases where the price does not relate
     * to a standard unit.
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue $referenceQuantity
     *
     * @return static
     *
     * @see http://schema.org/referenceQuantity
     */
    public function referenceQuantity($referenceQuantity)
    {
        return $this->setProperty('referenceQuantity', $referenceQuantity);
    }

}
