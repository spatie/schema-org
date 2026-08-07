<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\MassContract;

/**
 * Properties that take Mass as values are of the form '<Number> <Mass unit of
 * measure>'. E.g., '7 kg'.
 *
 * @see https://schema.org/Mass
 *
 */
class Mass extends BaseType implements MassContract
{
}
