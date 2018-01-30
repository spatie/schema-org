<?php

namespace Spatie\SchemaOrg;

/**
 * A Property value specification.
 *
 * @see 
 */
class PropertyValueSpecification extends Intangible
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
     * Whether the property must be filled in to complete the action.  Default
     * is false.
     *
     * @param bool|bool[] $valueRequired
     *
     * @return static
     *
     * @see 
     */
    public function valueRequired($valueRequired)
    {
        return $this->setProperty('valueRequired', $valueRequired);
    }

    /**
     * Indicates the name of the PropertyValueSpecification to be used in URL
     * templates and form encoding in a manner analogous to HTML's input@name.
     *
     * @param string|string[] $valueName
     *
     * @return static
     *
     * @see 
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
     * @see 
     */
    public function valuePattern($valuePattern)
    {
        return $this->setProperty('valuePattern', $valuePattern);
    }

    /**
     * Specifies the minimum allowed range for number of characters in a literal
     * value.
     *
     * @param float|float[]|int|int[] $valueMinLength
     *
     * @return static
     *
     * @see 
     */
    public function valueMinLength($valueMinLength)
    {
        return $this->setProperty('valueMinLength', $valueMinLength);
    }

    /**
     * Specifies the allowed range for number of characters in a literal value.
     *
     * @param float|float[]|int|int[] $valueMaxLength
     *
     * @return static
     *
     * @see 
     */
    public function valueMaxLength($valueMaxLength)
    {
        return $this->setProperty('valueMaxLength', $valueMaxLength);
    }

    /**
     * The stepValue attribute indicates the granularity that is expected (and
     * required) of the value in a PropertyValueSpecification.
     *
     * @param float|float[]|int|int[] $stepValue
     *
     * @return static
     *
     * @see 
     */
    public function stepValue($stepValue)
    {
        return $this->setProperty('stepValue', $stepValue);
    }

    /**
     * Whether multiple values are allowed for the property.  Default is false.
     *
     * @param bool|bool[] $multipleValues
     *
     * @return static
     *
     * @see 
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
     * @see 
     */
    public function readonlyValue($readonlyValue)
    {
        return $this->setProperty('readonlyValue', $readonlyValue);
    }

    /**
     * The default value of the input.  For properties that expect a literal,
     * the default is a literal value, for properties that expect an object,
     * it's an ID reference to one of the current values.
     *
     * @param Thing|Thing[]|string|string[] $defaultValue
     *
     * @return static
     *
     * @see 
     */
    public function defaultValue($defaultValue)
    {
        return $this->setProperty('defaultValue', $defaultValue);
    }

}
