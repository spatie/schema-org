<?php

namespace Spatie\SchemaOrg;

/**
 * The act of registering to be a user of a service, product or web page.
 * 
 * Related actions:
 * 
 * * [[JoinAction]]: Unlike JoinAction, RegisterAction implies you are
 * registering to be a user of a service, *not* a group/team of people.
 * * [FollowAction]]: Unlike FollowAction, RegisterAction doesn't imply that the
 * agent is expecting to poll for updates from the object.
 * * [[SubscribeAction]]: Unlike SubscribeAction, RegisterAction doesn't imply
 * that the agent is expecting updates from the object.
 *
 * @see http://schema.org/RegisterAction
 *
 * @mixin \Spatie\SchemaOrg\InteractAction
 */
class RegisterAction extends BaseType
{
}
