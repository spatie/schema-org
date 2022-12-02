<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\XPathTypeContract;

/**
 * Text representing an XPath (typically but not necessarily version 1.0).
 *
 * @see https://schema.org/XPathType
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/1672
 *
 */
class XPathType extends BaseType implements XPathTypeContract
{
}
