<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\ServiceChannelContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A means for accessing a service, e.g. a government office location, web site,
 * or phone number.
 *
 * @see https://schema.org/ServiceChannel
 *
 */
class ServiceChannel extends BaseType implements ServiceChannelContract, IntangibleContract, ThingContract
{
    /**
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a
     * relationship between something and a class that the thing is in. In RDFa
     * syntax, it is better to use the native RDFa syntax - the 'typeof'
     * attribute - for multiple types. Schema.org tools may have only weaker
     * understanding of extra types, in particular those defined externally.
     *
     * @param string|string[] $additionalType
     *
     * @return static
     *
     * @see https://schema.org/additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * An alias for the item.
     *
     * @param string|string[] $alternateName
     *
     * @return static
     *
     * @see https://schema.org/alternateName
     */
    public function alternateName($alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * A language someone may use with or at the item, service or place. Please
     * use one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]].
     *
     * @param \Spatie\SchemaOrg\Contracts\LanguageContract|\Spatie\SchemaOrg\Contracts\LanguageContract[]|string|string[] $availableLanguage
     *
     * @return static
     *
     * @see https://schema.org/availableLanguage
     */
    public function availableLanguage($availableLanguage)
    {
        return $this->setProperty('availableLanguage', $availableLanguage);
    }

    /**
     * A description of the item.
     *
     * @param string|string[] $description
     *
     * @return static
     *
     * @see https://schema.org/description
     */
    public function description($description)
    {
        return $this->setProperty('description', $description);
    }

    /**
     * A sub property of description. A short description of the item used to
     * disambiguate from other, similar items. Information from other properties
     * (in particular, name) may be necessary for the description to be useful
     * for disambiguation.
     *
     * @param string|string[] $disambiguatingDescription
     *
     * @return static
     *
     * @see https://schema.org/disambiguatingDescription
     */
    public function disambiguatingDescription($disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of
     * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides
     * dedicated properties for representing many of these, either as textual
     * strings or as URL (URI) links. See [background
     * notes](/docs/datamodel.html#identifierBg) for more details.
     *
     * @param \Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[]|string|string[] $identifier
     *
     * @return static
     *
     * @see https://schema.org/identifier
     */
    public function identifier($identifier)
    {
        return $this->setProperty('identifier', $identifier);
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     *
     * @param \Spatie\SchemaOrg\Contracts\ImageObjectContract|\Spatie\SchemaOrg\Contracts\ImageObjectContract[]|string|string[] $image
     *
     * @return static
     *
     * @see https://schema.org/image
     */
    public function image($image)
    {
        return $this->setProperty('image', $image);
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main
     * entity being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $mainEntityOfPage
     *
     * @return static
     *
     * @see https://schema.org/mainEntityOfPage
     */
    public function mainEntityOfPage($mainEntityOfPage)
    {
        return $this->setProperty('mainEntityOfPage', $mainEntityOfPage);
    }

    /**
     * The name of the item.
     *
     * @param string|string[] $name
     *
     * @return static
     *
     * @see https://schema.org/name
     */
    public function name($name)
    {
        return $this->setProperty('name', $name);
    }

    /**
     * Indicates a potential Action, which describes an idealized action in
     * which this thing would play an 'object' role.
     *
     * @param \Spatie\SchemaOrg\Contracts\ActionContract|\Spatie\SchemaOrg\Contracts\ActionContract[] $potentialAction
     *
     * @return static
     *
     * @see https://schema.org/potentialAction
     */
    public function potentialAction($potentialAction)
    {
        return $this->setProperty('potentialAction', $potentialAction);
    }

    /**
     * Estimated processing time for the service using this channel.
     *
     * @param \Spatie\SchemaOrg\Contracts\DurationContract|\Spatie\SchemaOrg\Contracts\DurationContract[] $processingTime
     *
     * @return static
     *
     * @see https://schema.org/processingTime
     */
    public function processingTime($processingTime)
    {
        return $this->setProperty('processingTime', $processingTime);
    }

    /**
     * The service provided by this channel.
     *
     * @param \Spatie\SchemaOrg\Contracts\ServiceContract|\Spatie\SchemaOrg\Contracts\ServiceContract[] $providesService
     *
     * @return static
     *
     * @see https://schema.org/providesService
     */
    public function providesService($providesService)
    {
        return $this->setProperty('providesService', $providesService);
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or
     * official website.
     *
     * @param string|string[] $sameAs
     *
     * @return static
     *
     * @see https://schema.org/sameAs
     */
    public function sameAs($sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * The location (e.g. civic structure, local business, etc.) where a person
     * can go to access the service.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $serviceLocation
     *
     * @return static
     *
     * @see https://schema.org/serviceLocation
     */
    public function serviceLocation($serviceLocation)
    {
        return $this->setProperty('serviceLocation', $serviceLocation);
    }

    /**
     * The phone number to use to access the service.
     *
     * @param \Spatie\SchemaOrg\Contracts\ContactPointContract|\Spatie\SchemaOrg\Contracts\ContactPointContract[] $servicePhone
     *
     * @return static
     *
     * @see https://schema.org/servicePhone
     */
    public function servicePhone($servicePhone)
    {
        return $this->setProperty('servicePhone', $servicePhone);
    }

    /**
     * The address for accessing the service by mail.
     *
     * @param \Spatie\SchemaOrg\Contracts\PostalAddressContract|\Spatie\SchemaOrg\Contracts\PostalAddressContract[] $servicePostalAddress
     *
     * @return static
     *
     * @see https://schema.org/servicePostalAddress
     */
    public function servicePostalAddress($servicePostalAddress)
    {
        return $this->setProperty('servicePostalAddress', $servicePostalAddress);
    }

    /**
     * The number to access the service by text message.
     *
     * @param \Spatie\SchemaOrg\Contracts\ContactPointContract|\Spatie\SchemaOrg\Contracts\ContactPointContract[] $serviceSmsNumber
     *
     * @return static
     *
     * @see https://schema.org/serviceSmsNumber
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
     * @see https://schema.org/serviceUrl
     */
    public function serviceUrl($serviceUrl)
    {
        return $this->setProperty('serviceUrl', $serviceUrl);
    }

    /**
     * A CreativeWork or Event about this Thing.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|\Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $subjectOf
     *
     * @return static
     *
     * @see https://schema.org/subjectOf
     * @link https://github.com/schemaorg/schemaorg/issues/1670
     */
    public function subjectOf($subjectOf)
    {
        return $this->setProperty('subjectOf', $subjectOf);
    }

    /**
     * URL of the item.
     *
     * @param string|string[] $url
     *
     * @return static
     *
     * @see https://schema.org/url
     */
    public function url($url)
    {
        return $this->setProperty('url', $url);
    }
}
