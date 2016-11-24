<?php

namespace Spatie\SchemaOrg\Properties;

/**
 * @mixin \Spatie\SchemaOrg\BaseType
 *
 * @todo Implement `potentialAction` (requires Action type)
 * @todo Implement `image` (requires ImageObject type)
 */
trait Thing
{
    /**
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a
     * relationship between something and a class that the thing is in. In RDFa
     * syntax, it is better to use the native RDFa syntax - the 'typeof'
     * attribute - for multiple types. Schema.org tools may have only weaker
     * understanding of extra types, in particular those defined externally.
     *
     * @param string $additionalType
     *
     * @return $this
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType, ['string']);
    }

    /**
     * An alias for the item.
     *
     * @param string $alternateName
     *
     * @return $this
     */
    public function alternateName(string $alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * A description of the item.
     *
     * @param string $description
     *
     * @return $this
     */
    public function description(string $description)
    {
        return $this->setProperty('description', $description);
    }

    /**
     * A sub property of description. A short description of the item used to
     * disambiguate from other, similar items. Information from other
     * properties (in particular, name) may be necessary for the description
     * to be useful for disambiguation.
     *
     * @param string $disambiguatingDescription
     *
     * @return $this
     */
    public function disambiguatingDescription(string $disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the
     * main entity being described. See background notes for details.
     *
     * @param string $mainEntityOfPage
     *
     * @return $this
     */
    public function mainEntityOfPage(string $mainEntityOfPage)
    {
        return $this->setProperty('mainEntityOfPage', $mainEntityOfPage);
    }

    /**
     * The name of the item.
     *
     * @param string $name
     *
     * @return $this
     */
    public function name(string $name)
    {
        return $this->setProperty('name', $name);
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Freebase page,
     * or official website.
     *
     * @param string $sameAs
     *
     * @return $this
     */
    public function sameAs(string $sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * URL of the item.
     *
     * @param string $url
     *
     * @return $this
     */
    public function url(string $url)
    {
        return $this->setProperty('url', $url);
    }
}
