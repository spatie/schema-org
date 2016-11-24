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
     * @param string|null $additionalType
     *
     * @return $this
     */
    public function additionalType(string $additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * @param string|null $alternateName
     *
     * @return $this
     */
    public function alternateName(string $alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * @param string|null $description
     *
     * @return $this
     */
    public function description(string $description)
    {
        return $this->setProperty('description', $description);
    }

    /**
     * @param string|null $disambiguatingDescription
     *
     * @return $this
     */
    public function disambiguatingDescription(string $disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * @param string|null $mainEntityOfPage
     *
     * @return $this
     */
    public function mainEntityOfPage(string $mainEntityOfPage)
    {
        return $this->setProperty('mainEntityOfPage', $mainEntityOfPage);
    }

    /**
     * @param string|null $name
     *
     * @return $this
     */
    public function name(string $name)
    {
        return $this->setProperty('name', $name);
    }

    /**
     * @param string|null $sameAs
     *
     * @return $this
     */
    public function sameAs(string $sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * @param string|null $url
     *
     * @return $this
     */
    public function url(string $url)
    {
        return $this->setProperty('url', $url);
    }
}
