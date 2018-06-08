<?php

namespace Spatie\SchemaOrg;

/**
 * A point value or interval for product characteristics and other purposes.
 *
 * @see http://schema.org/QuantitativeValue
 *
 * @mixin \Spatie\SchemaOrg\StructuredValue
 */
class QuantitativeValue extends BaseType
{
    /**
     * A property-value pair representing an additional characteristics of the
     * entitity, e.g. a product feature or another characteristic for which
     * there is no matching property in schema.org.
     * 
     * Note: Publishers should be aware that applications designed to use
     * specific schema.org properties (e.g. http://schema.org/width,
     * http://schema.org/color, http://schema.org/gtin13, ...) will typically
     * expect such data to be provided using those properties, rather than using
     * the generic property/value mechanism.
     *
     * @param PropertyValue|PropertyValue[] $additionalProperty
     *
     * @return static
     *
     * @see http://schema.org/additionalProperty
     */
    public function additionalProperty($additionalProperty)
    {
        return $this->setProperty('additionalProperty', $additionalProperty);
    }

    /**
     * The upper value of some characteristic or property.
     *
     * @param float|float[]|int|int[] $maxValue
     *
     * @return static
     *
     * @see http://schema.org/maxValue
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
     * @see http://schema.org/minValue
     */
    public function minValue($minValue)
    {
        return $this->setProperty('minValue', $minValue);
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
     * @param string|string[] $unitText
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
     * The value of the quantitative value or property value node.
     * 
     * * For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type
     * for values is 'Number'.
     * * For [[PropertyValue]], it can be 'Text;', 'Number', 'Boolean', or
     * 'StructuredValue'.
     *
     * @param StructuredValue|StructuredValue[]|bool|bool[]|float|float[]|int|int[]|string|string[] $value
     *
     * @return static
     *
     * @see http://schema.org/value
     */
    public function value($value)
    {
        return $this->setProperty('value', $value);
    }

    /**
     * A pointer to a secondary value that provides additional information on
     * the original value, e.g. a reference temperature.
     *
     * @param Enumeration|Enumeration[]|PropertyValue|PropertyValue[]|QualitativeValue|QualitativeValue[]|QuantitativeValue|QuantitativeValue[]|StructuredValue|StructuredValue[] $valueReference
     *
     * @return static
     *
     * @see http://schema.org/valueReference
     */
    public function valueReference($valueReference)
    {
        return $this->setProperty('valueReference', $valueReference);
    }

}
