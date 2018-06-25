<?php

namespace Spatie\SchemaOrg;

/**
 * The act of asserting that a future event/action is no longer going to happen.
 * 
 * Related actions:
 * 
 * * [[ConfirmAction]]: The antonym of CancelAction.
 *
 * @see http://schema.org/CancelAction
 *
 * @mixin \Spatie\SchemaOrg\PlanAction
 */
class CancelAction extends BaseType
{
}
