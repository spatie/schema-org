<?php

namespace Spatie\SchemaOrg;

/**
 * Quantities such as distance, time, mass, weight, etc. Particular instances of
 * say Mass are entities like '3 Kg' or '4 milligrams'.
 *
 * @see http://schema.org/Quantity
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class Quantity extends BaseType
{
}
