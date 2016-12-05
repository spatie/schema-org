<?php

namespace Spatie\SchemaOrg;

/**
 * The act of gaining ownership of an object from an origin. Reciprocal of
 * GiveAction.\n\nRelated actions:\n\n* [[GiveAction]]: The reciprocal of
 * TakeAction.\n* [[ReceiveAction]]: Unlike ReceiveAction, TakeAction implies
 * that ownership has been transfered.
 *
 * @see http://schema.org/TakeAction
 */
class TakeAction extends TransferAction
{
}
