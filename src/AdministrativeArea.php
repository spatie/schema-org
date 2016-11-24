<?php

namespace Spatie\SchemaOrg;

/**
 * A geographical region, typically under the jurisdiction of a particular
 * government.
 *
 * @see https://schema.org/AdministrativeArea
 */
class AdministrativeArea extends BaseType
{
    use Properties\Thing;
    use Properties\AdministrativeArea;
}
