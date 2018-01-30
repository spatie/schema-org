<?php

namespace Spatie\SchemaOrg;

/**
 * The act of un-registering from a service.
 * 
 * Related actions:
 * 
 * * [[RegisterAction]]: antonym of UnRegisterAction.
 * * [[Leave]]: Unlike LeaveAction, UnRegisterAction implies that you are
 * unregistering from a service you werer previously registered, rather than
 * leaving a team/group of people.
 *
 * @see http://schema.org/UnRegisterAction
 */
class UnRegisterAction extends InteractAction
{
}
