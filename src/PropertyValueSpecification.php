<?php

namespace Spatie\SchemaOrg;

/**
 * A Property value specification.
 *
 * @see http://schema.org/PropertyValueSpecification
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class PropertyValueSpecification extends BaseType
{
    /**
     * The default value of the input.  For properties that expect a literal,
     * the default is a literal value, for properties that expect an object,
     * it's an ID reference to one of the current values.
     *
     * @param Thing|Thing[]|string|string[] $defaultValue
     *
     * @return static
     *
     * @see http://schema.org/defaultValue
     */
    public function defaultValue($defaultValue)
    {
        return $this->setProperty('defaultValue', $defaultValue);
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
     * Whether multiple values are allowed for the property.  Default is false.
     *
     * @param bool|bool[] $multipleValues
     *
     * @return static
     *
     * @see http://schema.org/multipleValues
     */
    public function multipleValues($multipleValues)
    {
        return $this->setProperty('multipleValues', $multipleValues);
    }

    /**
     * Whether or not a property is mutable.  Default is false. Specifying this
     * for a property that also has a value makes it act similar to a "hidden"
     * input in an HTML form.
     *
     * @param bool|bool[] $readonlyValue
     *
     * @return static
     *
     * @see http://schema.org/readonlyValue
     */
    public function readonlyValue($readonlyValue)
    {
        return $this->setProperty('readonlyValue', $readonlyValue);
    }

    /**
     * The stepValue attribute indicates the granularity that is expected (and
     * required) of the value in a PropertyValueSpecification.
     *
     * @param float|float[]|int|int[] $stepValue
     *
     * @return static
     *
     * @see http://schema.org/stepValue
     */
    public function stepValue($stepValue)
    {
        return $this->setProperty('stepValue', $stepValue);
    }

    /**
     * Specifies the allowed range for number of characters in a literal value.
     *
     * @param float|float[]|int|int[] $valueMaxLength
     *
     * @return static
     *
     * @see http://schema.org/valueMaxLength
     */
    public function valueMaxLength($valueMaxLength)
    {
        return $this->setProperty('valueMaxLength', $valueMaxLength);
    }

    /**
     * Specifies the minimum allowed range for number of characters in a literal
     * value.
     *
     * @param float|float[]|int|int[] $valueMinLength
     *
     * @return static
     *
     * @see http://schema.org/valueMinLength
     */
    public function valueMinLength($valueMinLength)
    {
        return $this->setProperty('valueMinLength', $valueMinLength);
    }

    /**
     * Indicates the name of the PropertyValueSpecification to be used in URL
     * templates and form encoding in a manner analogous to HTML's input@name.
     *
     * @param string|string[] $valueName
     *
     * @return static
     *
     * @see http://schema.org/valueName
     */
    public function valueName($valueName)
    {
        return $this->setProperty('valueName', $valueName);
    }

    /**
     * Specifies a regular expression for testing literal values according to
     * the HTML spec.
     *
     * @param string|string[] $valuePattern
     *
     * @return static
     *
     * @see http://schema.org/valuePattern
     */
    public function valuePattern($valuePattern)
    {
        return $this->setProperty('valuePattern', $valuePattern);
    }

    /**
     * Whether the property must be filled in to complete the action.  Default
     * is false.
     *
     * @param bool|bool[] $valueRequired
     *
     * @return static
     *
     * @see http://schema.org/valueRequired
     */
    public function valueRequired($valueRequired)
    {
        return $this->setProperty('valueRequired', $valueRequired);
    }

}
