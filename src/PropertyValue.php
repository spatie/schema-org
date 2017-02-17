<?php

namespace Spatie\SchemaOrg;

/**
 * A property-value pair, e.g. representing a feature of a product or place. Use
 * the 'name' property for the name of the property. If there is an additional
 * human-readable version of the value, put that into the 'description'
 * property.
 * 
 *  Always use specific schema.org properties when a) they exist and b) you can
 * populate them. Using PropertyValue as a substitute will typically not trigger
 * the same effect as using the original, specific property.
 *
 * @see http://schema.org/PropertyValue
 */
class PropertyValue extends StructuredValue
{
    /**
     * The upper value of some characteristic or property.
     *
     * @param float|int $maxValue
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
     * @param float|int $minValue
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
     * The value of the quantitative value or property value node.
     * 
     * * For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type
     * for values is 'Number'.
     * * For [[PropertyValue]], it can be 'Text;', 'Number', 'Boolean', or
     * 'StructuredValue'.
     *
     * @param float|int|string|bool|\Spatie\SchemaOrg\StructuredValue $value
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
     * @param \Spatie\SchemaOrg\Enumeration|\Spatie\SchemaOrg\StructuredValue|\Spatie\SchemaOrg\PropertyValue|\Spatie\SchemaOrg\QualitativeValue|\Spatie\SchemaOrg\QuantitativeValue $valueReference
     *
     * @return static
     *
     * @see http://schema.org/valueReference
     */
    public function valueReference($valueReference)
    {
        return $this->setProperty('valueReference', $valueReference);
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
     * A commonly used identifier for the characteristic represented by the
     * property, e.g. a manufacturer or a standard code for a property.
     * propertyID can be
     * (1) a prefixed string, mainly meant to be used with standards for product
     * properties; (2) a site-specific, non-prefixed string (e.g. the primary
     * key of the property or the vendor-specific id of the property), or (3)
     * a URL indicating the type of the property, either pointing to an external
     * vocabulary, or a Web resource that describes the property (e.g. a
     * glossary entry).
     * Standards bodies should promote a standard prefix for the identifiers of
     * properties from their standards.
     *
     * @param string $propertyID
     *
     * @return static
     *
     * @see http://schema.org/propertyID
     */
    public function propertyID($propertyID)
    {
        return $this->setProperty('propertyID', $propertyID);
    }

}
