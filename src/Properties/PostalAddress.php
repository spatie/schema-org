<?php

namespace Spatie\SchemaOrg\Properties;

use Spatie\SchemaOrg\Country;

/**
 * @mixin \Spatie\SchemaOrg\BaseType
 */
trait PostalAddress
{
    /**
     * The country. For example, USA. You can also provide the two-letter
     * ISO 3166-1 alpha-2 country code.
     *
     * @param string|\Spatie\SchemaOrg\Country $addressCountry
     */
    public function addressCountry($addressCountry)
    {
        return $this->setProperty('addressCountry', $addressCountry, ['string', Country::class]);
    }

    /**
     * The locality. For example, Mountain View.
     *
     * @param string $addressLocality
     *
     * @return $this
     */
    public function addressLocality($addressLocality)
    {
        return $this->setProperty('addressLocality', $addressLocality, ['string']);
    }

    /**
     * The region. For example, CA.
     *
     * @param string $addressRegion
     *
     * @return $this
     */
    public function addressRegion($addressRegion)
    {
        return $this->setProperty('addressRegion', $addressRegion, ['string']);
    }

    /**
     * The post office box number for PO box addresses.
     *
     * @param $postOfficeBoxNumber
     *
     * @return $this
     */
    public function postOfficeBoxNumber($postOfficeBoxNumber)
    {
        return $this->setProperty('postOfficeBoxNumber', $postOfficeBoxNumber, ['string']);
    }

    /**
     * The postal code. For example, 94043.
     *
     * @param string $postalCode
     *
     * @return $this
     */
    public function postalCode($postalCode)
    {
        return $this->setProperty('postalCode', $postalCode, ['string']);
    }

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     *
     * @param string $streetAddress
     *
     * @return $this
     */
    public function streetAddress($streetAddress)
    {
        return $this->setProperty('streetAddress', $streetAddress, ['string']);
    }
}
