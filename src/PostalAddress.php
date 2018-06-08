<?php

namespace Spatie\SchemaOrg;

/**
 * The mailing address.
 *
 * @see http://schema.org/PostalAddress
 *
 * @mixin \Spatie\SchemaOrg\ContactPoint
 */
class PostalAddress extends BaseType
{
    /**
     * The country. For example, USA. You can also provide the two-letter [ISO
     * 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     *
     * @param Country|Country[]|string|string[] $addressCountry
     *
     * @return static
     *
     * @see http://schema.org/addressCountry
     */
    public function addressCountry($addressCountry)
    {
        return $this->setProperty('addressCountry', $addressCountry);
    }

    /**
     * The locality. For example, Mountain View.
     *
     * @param string|string[] $addressLocality
     *
     * @return static
     *
     * @see http://schema.org/addressLocality
     */
    public function addressLocality($addressLocality)
    {
        return $this->setProperty('addressLocality', $addressLocality);
    }

    /**
     * The region. For example, CA.
     *
     * @param string|string[] $addressRegion
     *
     * @return static
     *
     * @see http://schema.org/addressRegion
     */
    public function addressRegion($addressRegion)
    {
        return $this->setProperty('addressRegion', $addressRegion);
    }

    /**
     * The post office box number for PO box addresses.
     *
     * @param string|string[] $postOfficeBoxNumber
     *
     * @return static
     *
     * @see http://schema.org/postOfficeBoxNumber
     */
    public function postOfficeBoxNumber($postOfficeBoxNumber)
    {
        return $this->setProperty('postOfficeBoxNumber', $postOfficeBoxNumber);
    }

    /**
     * The postal code. For example, 94043.
     *
     * @param string|string[] $postalCode
     *
     * @return static
     *
     * @see http://schema.org/postalCode
     */
    public function postalCode($postalCode)
    {
        return $this->setProperty('postalCode', $postalCode);
    }

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     *
     * @param string|string[] $streetAddress
     *
     * @return static
     *
     * @see http://schema.org/streetAddress
     */
    public function streetAddress($streetAddress)
    {
        return $this->setProperty('streetAddress', $streetAddress);
    }

}
