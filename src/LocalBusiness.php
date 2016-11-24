<?php

namespace Spatie\SchemaOrg;

/**
 * A particular physical business or branch of an organization. Examples of
 * LocalBusiness include a restaurant, a particular branch of a restaurant
 * chain, a branch of a bank, a medical practice, a club, a bowling alley, etc.
 *
 * @see https://schema.org/LocalBusiness
 */
class LocalBusiness extends BaseType
{
    use Properties\Thing;
    use Properties\Organization;
    use Properties\Place;
    use Properties\LocalBusiness;
}
