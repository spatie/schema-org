<?php

namespace Spatie\SchemaOrg;

/**
 * A contact point&#x2014;for example, a Customer Complaints department.
 *
 * @see 
 */
class ContactPoint extends StructuredValue
{
    /**
     * The geographic area where a service or offered item is provided.
     *
     * @param Place|Place[]|AdministrativeArea|AdministrativeArea[]|GeoShape|GeoShape[]|string|string[] $areaServed
     *
     * @return static
     *
     * @see 
     */
    public function areaServed($areaServed)
    {
        return $this->setProperty('areaServed', $areaServed);
    }

    /**
     * A language someone may use with the item. Please use one of the language
     * codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47).
     * See also [[inLanguage]]
     *
     * @param Language|Language[]|string|string[] $availableLanguage
     *
     * @return static
     *
     * @see 
     */
    public function availableLanguage($availableLanguage)
    {
        return $this->setProperty('availableLanguage', $availableLanguage);
    }

    /**
     * An option available on this contact point (e.g. a toll-free number or
     * support for hearing-impaired callers).
     *
     * @param ContactPointOption|ContactPointOption[] $contactOption
     *
     * @return static
     *
     * @see 
     */
    public function contactOption($contactOption)
    {
        return $this->setProperty('contactOption', $contactOption);
    }

    /**
     * A person or organization can have different contact points, for different
     * purposes. For example, a sales contact point, a PR contact point and so
     * on. This property is used to specify the kind of contact point.
     *
     * @param string|string[] $contactType
     *
     * @return static
     *
     * @see 
     */
    public function contactType($contactType)
    {
        return $this->setProperty('contactType', $contactType);
    }

    /**
     * Email address.
     *
     * @param string|string[] $email
     *
     * @return static
     *
     * @see 
     */
    public function email($email)
    {
        return $this->setProperty('email', $email);
    }

    /**
     * The fax number.
     *
     * @param string|string[] $faxNumber
     *
     * @return static
     *
     * @see 
     */
    public function faxNumber($faxNumber)
    {
        return $this->setProperty('faxNumber', $faxNumber);
    }

    /**
     * The hours during which this service or contact is available.
     *
     * @param OpeningHoursSpecification|OpeningHoursSpecification[] $hoursAvailable
     *
     * @return static
     *
     * @see 
     */
    public function hoursAvailable($hoursAvailable)
    {
        return $this->setProperty('hoursAvailable', $hoursAvailable);
    }

    /**
     * The product or service this support contact point is related to (such as
     * product support for a particular product line). This can be a specific
     * product or product line (e.g. "iPhone") or a general category of products
     * or services (e.g. "smartphones").
     *
     * @param Product|Product[]|string|string[] $productSupported
     *
     * @return static
     *
     * @see 
     */
    public function productSupported($productSupported)
    {
        return $this->setProperty('productSupported', $productSupported);
    }

    /**
     * The geographic area where the service is provided.
     *
     * @param Place|Place[]|AdministrativeArea|AdministrativeArea[]|GeoShape|GeoShape[] $serviceArea
     *
     * @return static
     *
     * @see 
     */
    public function serviceArea($serviceArea)
    {
        return $this->setProperty('serviceArea', $serviceArea);
    }

    /**
     * The telephone number.
     *
     * @param string|string[] $telephone
     *
     * @return static
     *
     * @see 
     */
    public function telephone($telephone)
    {
        return $this->setProperty('telephone', $telephone);
    }

}
