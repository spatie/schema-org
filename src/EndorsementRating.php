<?php

namespace Spatie\SchemaOrg;

/**
 * An EndorsementRating is a rating that expresses some level of endorsement,
 * for example inclusion in a "critic's pick" blog, a
 * "Like" or "+1" on a social network. It can be considered the [[result]] of an
 * [[EndorseAction]] in which the [[object]] of the action is rated positively
 * by
 * some [[agent]]. As is common elsewhere in schema.org, it is sometimes more
 * useful to describe the results of such an action without explicitly
 * describing the [[Action]].
 * 
 * An [[EndorsementRating]] may be part of a numeric scale or organized system,
 * but this is not required: having an explicit type for indicating a positive,
 * endorsement rating is particularly useful in the absence of numeric scales as
 * it helps consumers understand that the rating is broadly positive.
 *
 * @see http://schema.org/EndorsementRating
 *
 * @mixin \Spatie\SchemaOrg\Rating
 */
class EndorsementRating extends BaseType
{
}
