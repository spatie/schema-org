<?php

namespace Spatie\SchemaOrg;

/**
 * A permit issued by an organization, e.g. a parking pass.
 *
 * @see http://schema.org/Permit
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class Permit extends BaseType
{
    /**
     * The organization issuing the ticket or permit.
     *
     * @param Organization|Organization[] $issuedBy
     *
     * @return static
     *
     * @see http://schema.org/issuedBy
     */
    public function issuedBy($issuedBy)
    {
        return $this->setProperty('issuedBy', $issuedBy);
    }

    /**
     * The service through with the permit was granted.
     *
     * @param Service|Service[] $issuedThrough
     *
     * @return static
     *
     * @see http://schema.org/issuedThrough
     */
    public function issuedThrough($issuedThrough)
    {
        return $this->setProperty('issuedThrough', $issuedThrough);
    }

    /**
     * The target audience for this permit.
     *
     * @param Audience|Audience[] $permitAudience
     *
     * @return static
     *
     * @see http://schema.org/permitAudience
     */
    public function permitAudience($permitAudience)
    {
        return $this->setProperty('permitAudience', $permitAudience);
    }

    /**
     * The time validity of the permit.
     *
     * @param Duration|Duration[] $validFor
     *
     * @return static
     *
     * @see http://schema.org/validFor
     */
    public function validFor($validFor)
    {
        return $this->setProperty('validFor', $validFor);
    }

    /**
     * The date when the item becomes valid.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $validFrom
     *
     * @return static
     *
     * @see http://schema.org/validFrom
     */
    public function validFrom($validFrom)
    {
        return $this->setProperty('validFrom', $validFrom);
    }

    /**
     * The geographic area where the permit is valid.
     *
     * @param AdministrativeArea|AdministrativeArea[] $validIn
     *
     * @return static
     *
     * @see http://schema.org/validIn
     */
    public function validIn($validIn)
    {
        return $this->setProperty('validIn', $validIn);
    }

    /**
     * The date when the item is no longer valid.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $validUntil
     *
     * @return static
     *
     * @see http://schema.org/validUntil
     */
    public function validUntil($validUntil)
    {
        return $this->setProperty('validUntil', $validUntil);
    }

}
