<?php

namespace Spatie\SchemaOrg;

/**
 * The act of registering to an organization/service without the guarantee to
 * receive it.
 * 
 * Related actions:
 * 
 * * [[RegisterAction]]: Unlike RegisterAction, ApplyAction has no guarantees
 * that the application will be accepted.
 *
 * @see http://schema.org/ApplyAction
 */
class ApplyAction extends OrganizeAction
{
}
