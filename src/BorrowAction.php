<?php

namespace Spatie\SchemaOrg;

/**
 * The act of obtaining an object under an agreement to return it at a later
 * date. Reciprocal of LendAction.
 * 
 * Related actions:
 * 
 * * [[LendAction]]: Reciprocal of BorrowAction.
 *
 * @see 
 */
class BorrowAction extends TransferAction
{
    /**
     * A sub property of participant. The person that lends the object being
     * borrowed.
     *
     * @param Person|Person[]|Organization|Organization[] $lender
     *
     * @return static
     *
     * @see 
     */
    public function lender($lender)
    {
        return $this->setProperty('lender', $lender);
    }

}
