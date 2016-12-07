<?php

namespace Spatie\SchemaOrg;

/**
 * A service provided by an organization, e.g. delivery service, print services,
 * etc.
 *
 * @see http://schema.org/Service
 */
class Service extends Intangible
{
    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or
     * Service.
     *
     * @param \Spatie\SchemaOrg\OfferCatalog $hasOfferCatalog
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
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @param \Spatie\SchemaOrg\AggregateRating $aggregateRating
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
     * @param \Spatie\SchemaOrg\Place|\Spatie\SchemaOrg\AdministrativeArea|\Spatie\SchemaOrg\GeoShape|string $areaServed
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
     * @param \Spatie\SchemaOrg\Audience $audience
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
     * @param \Spatie\SchemaOrg\ServiceChannel $availableChannel
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
     * @param string $award
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
     * @param \Spatie\SchemaOrg\Brand|\Spatie\SchemaOrg\Organization $brand
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
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     *
     * @param string|\Spatie\SchemaOrg\Thing $category
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
     * The hours during which this service or contact is available.
     *
     * @param \Spatie\SchemaOrg\OpeningHoursSpecification $hoursAvailable
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
     * @param \Spatie\SchemaOrg\Product|\Spatie\SchemaOrg\Service $isRelatedTo
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
     * @param \Spatie\SchemaOrg\Product|\Spatie\SchemaOrg\Service $isSimilarTo
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
     * @param \Spatie\SchemaOrg\ImageObject|string $logo
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
     * @param \Spatie\SchemaOrg\Offer $offers
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
     * @param \Spatie\SchemaOrg\Thing $produces
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
     * The tangible thing generated by the service, e.g. a passport, permit,
     * etc.
     *
     * @param \Spatie\SchemaOrg\Thing $serviceOutput
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
     * A review of the item.
     *
     * @param \Spatie\SchemaOrg\Review $review
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
     * @param \Spatie\SchemaOrg\Place|\Spatie\SchemaOrg\AdministrativeArea|\Spatie\SchemaOrg\GeoShape $serviceArea
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
     * @param \Spatie\SchemaOrg\Audience $serviceAudience
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
     * The type of service being offered, e.g. veterans' benefits, emergency
     * relief, etc.
     *
     * @param string $serviceType
     *
     * @return static
     *
     * @see http://schema.org/serviceType
     */
    public function serviceType($serviceType)
    {
        return $this->setProperty('serviceType', $serviceType);
    }

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     *
     * @param \Spatie\SchemaOrg\Person|\Spatie\SchemaOrg\Organization $provider
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
     * @param string $providerMobility
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
     * An entity that arranges for an exchange between a buyer and a seller.  In
     * most cases a broker never acquires or releases ownership of a product or
     * service involved in an exchange.  If it is not clear whether an entity is
     * a broker, seller, or buyer, the latter two terms are preferred.
     *
     * @param \Spatie\SchemaOrg\Person|\Spatie\SchemaOrg\Organization $broker
     *
     * @return static
     *
     * @see http://schema.org/broker
     */
    public function broker($broker)
    {
        return $this->setProperty('broker', $broker);
    }

}
