<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\DistanceContract;

/**
 * Properties that take Distances as values are of the form '<Number> <Length
 * unit of measure>'. E.g., '7 ft'.
 *
 * @see https://schema.org/Distance
 *
 */
class Distance extends BaseType implements DistanceContract
{
}
