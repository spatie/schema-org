<?php

namespace Spatie\SchemaOrg;

/**
 * The act of forming a personal connection with someone/something (object)
 * unidirectionally/asymmetrically to get updates pushed to.\n\nRelated
 * actions:\n\n* [[FollowAction]]: Unlike FollowAction, SubscribeAction implies
 * that the subscriber acts as a passive agent being constantly/actively pushed
 * for updates.\n* [[RegisterAction]]: Unlike RegisterAction, SubscribeAction
 * implies that the agent is interested in continuing receiving updates from the
 * object.\n* [[JoinAction]]: Unlike JoinAction, SubscribeAction implies that
 * the agent is interested in continuing receiving updates from the object.
 *
 * @see http://schema.org/SubscribeAction
 */
class SubscribeAction extends InteractAction
{
}
