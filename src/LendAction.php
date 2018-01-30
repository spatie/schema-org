<?php

namespace Spatie\SchemaOrg;

/**
 * The act of providing an object under an agreement that it will be returned at
 * a later date. Reciprocal of BorrowAction.
 * 
 * Related actions:
 * 
 * * [[BorrowAction]]: Reciprocal of LendAction.
 *
 * @see 
 */
class LendAction extends TransferAction
{
    /**
     * A sub property of participant. The person that borrows the object being
     * lent.
     *
     * @param Person|Person[] $borrower
     *
     * @return static
     *
     * @see 
     */
    public function borrower($borrower)
    {
        return $this->setProperty('borrower', $borrower);
    }

}
