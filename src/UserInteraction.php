<?php

namespace Spatie\SchemaOrg;

/**
 * UserInteraction and its subtypes is an old way of talking about users
 * interacting with pages. It is generally better to use [[Action]]-based
 * vocabulary, alongside types such as [[Comment]].
 *
 * @see http://schema.org/UserInteraction
 *
 * @mixin \Spatie\SchemaOrg\Event
 */
class UserInteraction extends BaseType
{
}
