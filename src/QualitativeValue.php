<?php

namespace Spatie\SchemaOrg;

/**
 * A predefined value for a product characteristic, e.g. the power cord plug
 * type 'US' or the garment sizes 'S', 'M', 'L', and 'XL'.
 *
 * @see http://schema.org/QualitativeValue
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class QualitativeValue extends BaseType
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
     * This ordering relation for qualitative values indicates that the subject
     * is equal to the object.
     *
     * @param QualitativeValue|QualitativeValue[] $equal
     *
     * @return static
     *
     * @see http://schema.org/equal
     */
    public function equal($equal)
    {
        return $this->setProperty('equal', $equal);
    }

    /**
     * This ordering relation for qualitative values indicates that the subject
     * is greater than the object.
     *
     * @param QualitativeValue|QualitativeValue[] $greater
     *
     * @return static
     *
     * @see http://schema.org/greater
     */
    public function greater($greater)
    {
        return $this->setProperty('greater', $greater);
    }

    /**
     * This ordering relation for qualitative values indicates that the subject
     * is greater than or equal to the object.
     *
     * @param QualitativeValue|QualitativeValue[] $greaterOrEqual
     *
     * @return static
     *
     * @see http://schema.org/greaterOrEqual
     */
    public function greaterOrEqual($greaterOrEqual)
    {
        return $this->setProperty('greaterOrEqual', $greaterOrEqual);
    }

    /**
     * This ordering relation for qualitative values indicates that the subject
     * is lesser than the object.
     *
     * @param QualitativeValue|QualitativeValue[] $lesser
     *
     * @return static
     *
     * @see http://schema.org/lesser
     */
    public function lesser($lesser)
    {
        return $this->setProperty('lesser', $lesser);
    }

    /**
     * This ordering relation for qualitative values indicates that the subject
     * is lesser than or equal to the object.
     *
     * @param QualitativeValue|QualitativeValue[] $lesserOrEqual
     *
     * @return static
     *
     * @see http://schema.org/lesserOrEqual
     */
    public function lesserOrEqual($lesserOrEqual)
    {
        return $this->setProperty('lesserOrEqual', $lesserOrEqual);
    }

    /**
     * This ordering relation for qualitative values indicates that the subject
     * is not equal to the object.
     *
     * @param QualitativeValue|QualitativeValue[] $nonEqual
     *
     * @return static
     *
     * @see http://schema.org/nonEqual
     */
    public function nonEqual($nonEqual)
    {
        return $this->setProperty('nonEqual', $nonEqual);
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
