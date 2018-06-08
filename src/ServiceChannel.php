<?php

namespace Spatie\SchemaOrg;

/**
 * A means for accessing a service, e.g. a government office location, web site,
 * or phone number.
 *
 * @see http://schema.org/ServiceChannel
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class ServiceChannel extends BaseType
{
    /**
     * A language someone may use with or at the item, service or place. Please
     * use one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]]
     *
     * @param Language|Language[]|string|string[] $availableLanguage
     *
     * @return static
     *
     * @see http://schema.org/availableLanguage
     */
    public function availableLanguage($availableLanguage)
    {
        return $this->setProperty('availableLanguage', $availableLanguage);
    }

    /**
     * Estimated processing time for the service using this channel.
     *
     * @param Duration|Duration[] $processingTime
     *
     * @return static
     *
     * @see http://schema.org/processingTime
     */
    public function processingTime($processingTime)
    {
        return $this->setProperty('processingTime', $processingTime);
    }

    /**
     * The service provided by this channel.
     *
     * @param Service|Service[] $providesService
     *
     * @return static
     *
     * @see http://schema.org/providesService
     */
    public function providesService($providesService)
    {
        return $this->setProperty('providesService', $providesService);
    }

    /**
     * The location (e.g. civic structure, local business, etc.) where a person
     * can go to access the service.
     *
     * @param Place|Place[] $serviceLocation
     *
     * @return static
     *
     * @see http://schema.org/serviceLocation
     */
    public function serviceLocation($serviceLocation)
    {
        return $this->setProperty('serviceLocation', $serviceLocation);
    }

    /**
     * The phone number to use to access the service.
     *
     * @param ContactPoint|ContactPoint[] $servicePhone
     *
     * @return static
     *
     * @see http://schema.org/servicePhone
     */
    public function servicePhone($servicePhone)
    {
        return $this->setProperty('servicePhone', $servicePhone);
    }

    /**
     * The address for accessing the service by mail.
     *
     * @param PostalAddress|PostalAddress[] $servicePostalAddress
     *
     * @return static
     *
     * @see http://schema.org/servicePostalAddress
     */
    public function servicePostalAddress($servicePostalAddress)
    {
        return $this->setProperty('servicePostalAddress', $servicePostalAddress);
    }

    /**
     * The number to access the service by text message.
     *
     * @param ContactPoint|ContactPoint[] $serviceSmsNumber
     *
     * @return static
     *
     * @see http://schema.org/serviceSmsNumber
     */
    public function serviceSmsNumber($serviceSmsNumber)
    {
        return $this->setProperty('serviceSmsNumber', $serviceSmsNumber);
    }

    /**
     * The website to access the service.
     *
     * @param string|string[] $serviceUrl
     *
     * @return static
     *
     * @see http://schema.org/serviceUrl
     */
    public function serviceUrl($serviceUrl)
    {
        return $this->setProperty('serviceUrl', $serviceUrl);
    }

}
