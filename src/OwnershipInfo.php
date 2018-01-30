<?php

namespace Spatie\SchemaOrg;

/**
 * A structured value providing information about when a certain organization or
 * person owned a certain product.
 *
 * @see 
 */
class OwnershipInfo extends StructuredValue
{
    /**
     * The organization or person from which the product was acquired.
     *
     * @param Organization|Organization[]|Person|Person[] $acquiredFrom
     *
     * @return static
     *
     * @see 
     */
    public function acquiredFrom($acquiredFrom)
    {
        return $this->setProperty('acquiredFrom', $acquiredFrom);
    }

    /**
     * The date and time of obtaining the product.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $ownedFrom
     *
     * @return static
     *
     * @see 
     */
    public function ownedFrom($ownedFrom)
    {
        return $this->setProperty('ownedFrom', $ownedFrom);
    }

    /**
     * The date and time of giving up ownership on the product.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $ownedThrough
     *
     * @return static
     *
     * @see 
     */
    public function ownedThrough($ownedThrough)
    {
        return $this->setProperty('ownedThrough', $ownedThrough);
    }

    /**
     * The product that this structured value is referring to.
     *
     * @param Product|Product[]|Service|Service[] $typeOfGood
     *
     * @return static
     *
     * @see 
     */
    public function typeOfGood($typeOfGood)
    {
        return $this->setProperty('typeOfGood', $typeOfGood);
    }

}
