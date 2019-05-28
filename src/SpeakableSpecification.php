<?php

namespace Spatie\SchemaOrg;

/**
 * A SpeakableSpecification indicates (typically via [[xpath]] or
 * [[cssSelector]]) sections of a document that are highlighted as particularly
 * [[speakable]]. Instances of this type are expected to be used primarily as
 * values of the [[speakable]] property.
 *
 * @see http://schema.org/SpeakableSpecification
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 * @method static cssSelector($cssSelector) The value should be instance of pending types CssSelectorType|CssSelectorType[]
 * @method static xpath($xpath) The value should be instance of pending types XPathType|XPathType[]
 */
class SpeakableSpecification extends BaseType
{
}
