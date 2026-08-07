<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\EnergyContract;

/**
 * Properties that take Energy as values are of the form '<Number> <Energy unit
 * of measure>'.
 *
 * @see https://schema.org/Energy
 *
 */
class Energy extends BaseType implements EnergyContract
{
}
