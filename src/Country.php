<?php

namespace Spatie\SchemaOrg;

/**
 * A country.
 *
 * @see https://schema.org/Country
 */
class Country extends BaseType
{
    use Properties\Thing;
    use Properties\Place;
    use Properties\AdministrativeArea;
    use Properties\Country;
}
