<?php

namespace Spatie\SchemaOrg;

/**
 * Entities that have a somewhat fixed, physical extension.
 *
 * @see https://schema.org/Place
 */
class Place extends BaseType
{
    use Properties\Thing;
    use Properties\Place;
}
