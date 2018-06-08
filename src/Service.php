<?php

namespace Spatie\SchemaOrg;

/**
 * A service provided by an organization, e.g. delivery service, print services,
 * etc.
 *
 * @see http://schema.org/Service
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class Service extends BaseType
{
    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @param AggregateRating|AggregateRating[] $aggregateRating
     *
     * @return static
     *
     * @see http://schema.org/aggregateRating
     */
    public function aggregateRating($aggregateRating)
    {
        return $this->setProperty('aggregateRating', $aggregateRating);
    }

    /**
     * The geographic area where a service or offered item is provided.
     *
     * @param AdministrativeArea|AdministrativeArea[]|GeoShape|GeoShape[]|Place|Place[]|string|string[] $areaServed
     *
     * @return static
     *
     * @see http://schema.org/areaServed
     */
    public function areaServed($areaServed)
    {
        return $this->setProperty('areaServed', $areaServed);
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @param Audience|Audience[] $audience
     *
     * @return static
     *
     * @see http://schema.org/audience
     */
    public function audience($audience)
    {
        return $this->setProperty('audience', $audience);
    }

    /**
     * A means of accessing the service (e.g. a phone bank, a web site, a
     * location, etc.).
     *
     * @param ServiceChannel|ServiceChannel[] $availableChannel
     *
     * @return static
     *
     * @see http://schema.org/availableChannel
     */
    public function availableChannel($availableChannel)
    {
        return $this->setProperty('availableChannel', $availableChannel);
    }

    /**
     * An award won by or for this item.
     *
     * @param string|string[] $award
     *
     * @return static
     *
     * @see http://schema.org/award
     */
    public function award($award)
    {
        return $this->setProperty('award', $award);
    }

    /**
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     *
     * @param Brand|Brand[]|Organization|Organization[] $brand
     *
     * @return static
     *
     * @see http://schema.org/brand
     */
    public function brand($brand)
    {
        return $this->setProperty('brand', $brand);
    }

    /**
     * An entity that arranges for an exchange between a buyer and a seller.  In
     * most cases a broker never acquires or releases ownership of a product or
     * service involved in an exchange.  If it is not clear whether an entity is
     * a broker, seller, or buyer, the latter two terms are preferred.
     *
     * @param Organization|Organization[]|Person|Person[] $broker
     *
     * @return static
     *
     * @see http://schema.org/broker
     */
    public function broker($broker)
    {
        return $this->setProperty('broker', $broker);
    }

    /**
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     *
     * @param Thing|Thing[]|string|string[] $category
     *
     * @return static
     *
     * @see http://schema.org/category
     */
    public function category($category)
    {
        return $this->setProperty('category', $category);
    }

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or
     * Service.
     *
     * @param OfferCatalog|OfferCatalog[] $hasOfferCatalog
     *
     * @return static
     *
     * @see http://schema.org/hasOfferCatalog
     */
    public function hasOfferCatalog($hasOfferCatalog)
    {
        return $this->setProperty('hasOfferCatalog', $hasOfferCatalog);
    }

    /**
     * The hours during which this service or contact is available.
     *
     * @param OpeningHoursSpecification|OpeningHoursSpecification[] $hoursAvailable
     *
     * @return static
     *
     * @see http://schema.org/hoursAvailable
     */
    public function hoursAvailable($hoursAvailable)
    {
        return $this->setProperty('hoursAvailable', $hoursAvailable);
    }

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     * @param Product|Product[]|Service|Service[] $isRelatedTo
     *
     * @return static
     *
     * @see http://schema.org/isRelatedTo
     */
    public function isRelatedTo($isRelatedTo)
    {
        return $this->setProperty('isRelatedTo', $isRelatedTo);
    }

    /**
     * A pointer to another, functionally similar product (or multiple
     * products).
     *
     * @param Product|Product[]|Service|Service[] $isSimilarTo
     *
     * @return static
     *
     * @see http://schema.org/isSimilarTo
     */
    public function isSimilarTo($isSimilarTo)
    {
        return $this->setProperty('isSimilarTo', $isSimilarTo);
    }

    /**
     * An associated logo.
     *
     * @param ImageObject|ImageObject[]|string|string[] $logo
     *
     * @return static
     *
     * @see http://schema.org/logo
     */
    public function logo($logo)
    {
        return $this->setProperty('logo', $logo);
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a
     * product, rent the DVD of a movie, perform a service, or give away tickets
     * to an event.
     *
     * @param Offer|Offer[] $offers
     *
     * @return static
     *
     * @see http://schema.org/offers
     */
    public function offers($offers)
    {
        return $this->setProperty('offers', $offers);
    }

    /**
     * The tangible thing generated by the service, e.g. a passport, permit,
     * etc.
     *
     * @param Thing|Thing[] $produces
     *
     * @return static
     *
     * @see http://schema.org/produces
     */
    public function produces($produces)
    {
        return $this->setProperty('produces', $produces);
    }

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     *
     * @param Organization|Organization[]|Person|Person[] $provider
     *
     * @return static
     *
     * @see http://schema.org/provider
     */
    public function provider($provider)
    {
        return $this->setProperty('provider', $provider);
    }

    /**
     * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
     *
     * @param string|string[] $providerMobility
     *
     * @return static
     *
     * @see http://schema.org/providerMobility
     */
    public function providerMobility($providerMobility)
    {
        return $this->setProperty('providerMobility', $providerMobility);
    }

    /**
     * A review of the item.
     *
     * @param Review|Review[] $review
     *
     * @return static
     *
     * @see http://schema.org/review
     */
    public function review($review)
    {
        return $this->setProperty('review', $review);
    }

    /**
     * The geographic area where the service is provided.
     *
     * @param AdministrativeArea|AdministrativeArea[]|GeoShape|GeoShape[]|Place|Place[] $serviceArea
     *
     * @return static
     *
     * @see http://schema.org/serviceArea
     */
    public function serviceArea($serviceArea)
    {
        return $this->setProperty('serviceArea', $serviceArea);
    }

    /**
     * The audience eligible for this service.
     *
     * @param Audience|Audience[] $serviceAudience
     *
     * @return static
     *
     * @see http://schema.org/serviceAudience
     */
    public function serviceAudience($serviceAudience)
    {
        return $this->setProperty('serviceAudience', $serviceAudience);
    }

    /**
     * The tangible thing generated by the service, e.g. a passport, permit,
     * etc.
     *
     * @param Thing|Thing[] $serviceOutput
     *
     * @return static
     *
     * @see http://schema.org/serviceOutput
     */
    public function serviceOutput($serviceOutput)
    {
        return $this->setProperty('serviceOutput', $serviceOutput);
    }

    /**
     * The type of service being offered, e.g. veterans' benefits, emergency
     * relief, etc.
     *
     * @param string|string[] $serviceType
     *
     * @return static
     *
     * @see http://schema.org/serviceType
     */
    public function serviceType($serviceType)
    {
        return $this->setProperty('serviceType', $serviceType);
    }

}
