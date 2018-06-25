<?php

namespace Spatie\SchemaOrg;

/**
 * The act of giving money in return for temporary use, but not ownership, of an
 * object such as a vehicle or property. For example, an agent rents a property
 * from a landlord in exchange for a periodic payment.
 *
 * @see http://schema.org/RentAction
 *
 * @mixin \Spatie\SchemaOrg\TradeAction
 */
class RentAction extends BaseType
{
    /**
     * A sub property of participant. The owner of the real estate property.
     *
     * @param Organization|Organization[]|Person|Person[] $landlord
     *
     * @return static
     *
     * @see http://schema.org/landlord
     */
    public function landlord($landlord)
    {
        return $this->setProperty('landlord', $landlord);
    }

    /**
     * A sub property of participant. The real estate agent involved in the
     * action.
     *
     * @param RealEstateAgent|RealEstateAgent[] $realEstateAgent
     *
     * @return static
     *
     * @see http://schema.org/realEstateAgent
     */
    public function realEstateAgent($realEstateAgent)
    {
        return $this->setProperty('realEstateAgent', $realEstateAgent);
    }

}
