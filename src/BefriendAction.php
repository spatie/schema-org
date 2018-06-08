<?php

namespace Spatie\SchemaOrg;

/**
 * The act of forming a personal connection with someone (object)
 * mutually/bidirectionally/symmetrically.
 * 
 * Related actions:
 * 
 * * [[FollowAction]]: Unlike FollowAction, BefriendAction implies that the
 * connection is reciprocal.
 *
 * @see http://schema.org/BefriendAction
 *
 * @mixin \Spatie\SchemaOrg\InteractAction
 */
class BefriendAction extends BaseType
{
}
