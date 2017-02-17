<?php

namespace Spatie\SchemaOrg;

/**
 * A structured value indicating the quantity, unit of measurement, and business
 * function of goods included in a bundle offer.
 *
 * @see http://schema.org/TypeAndQuantityNode
 */
class TypeAndQuantityNode extends StructuredValue
{
    /**
     * The quantity of the goods included in the offer.
     *
     * @param float|int $amountOfThisGood
     *
     * @return static
     *
     * @see http://schema.org/amountOfThisGood
     */
    public function amountOfThisGood($amountOfThisGood)
    {
        return $this->setProperty('amountOfThisGood', $amountOfThisGood);
    }

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer or
     * component of a bundle (TypeAndQuantityNode). The default is
     * http://purl.org/goodrelations/v1#Sell.
     *
     * @param \Spatie\SchemaOrg\BusinessFunction $businessFunction
     *
     * @return static
     *
     * @see http://schema.org/businessFunction
     */
    public function businessFunction($businessFunction)
    {
        return $this->setProperty('businessFunction', $businessFunction);
    }

    /**
     * The product that this structured value is referring to.
     *
     * @param \Spatie\SchemaOrg\Product|\Spatie\SchemaOrg\Service $typeOfGood
     *
     * @return static
     *
     * @see http://schema.org/typeOfGood
     */
    public function typeOfGood($typeOfGood)
    {
        return $this->setProperty('typeOfGood', $typeOfGood);
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

}
