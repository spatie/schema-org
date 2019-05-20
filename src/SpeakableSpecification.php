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
 */
class SpeakableSpecification extends BaseType
{
    /**
     * A CSS selector, e.g. of a [[SpeakableSpecification]] or
     * [[WebPageElement]]. In the latter case, multiple matches within a page
     * can constitute a single conceptual "Web page element".
     *
     * @param CssSelectorType|CssSelectorType[] $cssSelector
     *
     * @return static
     *
     * @see http://schema.org/cssSelector
     */
    public function cssSelector($cssSelector)
    {
        return $this->setProperty('cssSelector', $cssSelector);
    }

    /**
     * An XPath, e.g. of a [[SpeakableSpecification]] or [[WebPageElement]]. In
     * the latter case, multiple matches within a page can constitute a single
     * conceptual "Web page element".
     *
     * @param XPathType|XPathType[] $xpath
     *
     * @return static
     *
     * @see http://schema.org/xpath
     */
    public function xpath($xpath)
    {
        return $this->setProperty('xpath', $xpath);
    }

}
