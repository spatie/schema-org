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
 * @see http://schema.org/BorrowAction
 *
 * @mixin \Spatie\SchemaOrg\TransferAction
 */
class BorrowAction extends BaseType
{
    /**
     * A sub property of participant. The person that lends the object being
     * borrowed.
     *
     * @param Organization|Organization[]|Person|Person[] $lender
     *
     * @return static
     *
     * @see http://schema.org/lender
     */
    public function lender($lender)
    {
        return $this->setProperty('lender', $lender);
    }

}
