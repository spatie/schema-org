<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\DurationContract;

/**
 * Quantity: Duration (use [ISO 8601 duration
 * format](http://en.wikipedia.org/wiki/ISO_8601)).
 *
 * @see https://schema.org/Duration
 *
 */
class Duration extends BaseType implements DurationContract
{
}
