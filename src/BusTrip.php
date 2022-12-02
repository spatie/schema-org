<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\BusTripContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\ThingContract;
use Spatie\SchemaOrg\Contracts\TripContract;

/**
 * A trip on a commercial bus line.
 *
 * @see https://schema.org/BusTrip
 *
 */
class BusTrip extends BaseType implements BusTripContract, IntangibleContract, ThingContract, TripContract
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
     * The stop or station from which the bus arrives.
     *
     * @param \Spatie\SchemaOrg\Contracts\BusStationContract|\Spatie\SchemaOrg\Contracts\BusStationContract[]|\Spatie\SchemaOrg\Contracts\BusStopContract|\Spatie\SchemaOrg\Contracts\BusStopContract[] $arrivalBusStop
     *
     * @return static
     *
     * @see https://schema.org/arrivalBusStop
     */
    public function arrivalBusStop($arrivalBusStop)
    {
        return $this->setProperty('arrivalBusStop', $arrivalBusStop);
    }

    /**
     * The expected arrival time.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $arrivalTime
     *
     * @return static
     *
     * @see https://schema.org/arrivalTime
     */
    public function arrivalTime($arrivalTime)
    {
        return $this->setProperty('arrivalTime', $arrivalTime);
    }

    /**
     * The name of the bus (e.g. Bolt Express).
     *
     * @param string|string[] $busName
     *
     * @return static
     *
     * @see https://schema.org/busName
     */
    public function busName($busName)
    {
        return $this->setProperty('busName', $busName);
    }

    /**
     * The unique identifier for the bus.
     *
     * @param string|string[] $busNumber
     *
     * @return static
     *
     * @see https://schema.org/busNumber
     */
    public function busNumber($busNumber)
    {
        return $this->setProperty('busNumber', $busNumber);
    }

    /**
     * The stop or station from which the bus departs.
     *
     * @param \Spatie\SchemaOrg\Contracts\BusStationContract|\Spatie\SchemaOrg\Contracts\BusStationContract[]|\Spatie\SchemaOrg\Contracts\BusStopContract|\Spatie\SchemaOrg\Contracts\BusStopContract[] $departureBusStop
     *
     * @return static
     *
     * @see https://schema.org/departureBusStop
     */
    public function departureBusStop($departureBusStop)
    {
        return $this->setProperty('departureBusStop', $departureBusStop);
    }

    /**
     * The expected departure time.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $departureTime
     *
     * @return static
     *
     * @see https://schema.org/departureTime
     */
    public function departureTime($departureTime)
    {
        return $this->setProperty('departureTime', $departureTime);
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
     * Destination(s) ( [[Place]] ) that make up a trip. For a trip where
     * destination order is important use [[ItemList]] to specify that order
     * (see examples).
     *
     * @param \Spatie\SchemaOrg\Contracts\ItemListContract|\Spatie\SchemaOrg\Contracts\ItemListContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $itinerary
     *
     * @return static
     *
     * @see https://schema.org/itinerary
     * @see https://pending.schema.org
     */
    public function itinerary($itinerary)
    {
        return $this->setProperty('itinerary', $itinerary);
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
     * An offer to provide this item&#x2014;for example, an offer to sell a
     * product, rent the DVD of a movie, perform a service, or give away tickets
     * to an event. Use [[businessFunction]] to indicate the kind of transaction
     * offered, i.e. sell, lease, etc. This property can also be used to
     * describe a [[Demand]]. While this property is listed as expected on a
     * number of common types, it can be used in others. In that case, using a
     * second type, such as Product or a subtype of Product, can clarify the
     * nature of the offer.
     *
     * @param \Spatie\SchemaOrg\Contracts\DemandContract|\Spatie\SchemaOrg\Contracts\DemandContract[]|\Spatie\SchemaOrg\Contracts\OfferContract|\Spatie\SchemaOrg\Contracts\OfferContract[] $offers
     *
     * @return static
     *
     * @see https://schema.org/offers
     * @link https://github.com/schemaorg/schemaorg/issues/2289
     */
    public function offers($offers)
    {
        return $this->setProperty('offers', $offers);
    }

    /**
     * Identifies that this [[Trip]] is a subTrip of another Trip.  For example
     * Day 1, Day 2, etc. of a multi-day trip.
     *
     * @param \Spatie\SchemaOrg\Contracts\TripContract|\Spatie\SchemaOrg\Contracts\TripContract[] $partOfTrip
     *
     * @return static
     *
     * @see https://schema.org/partOfTrip
     * @see https://pending.schema.org
     */
    public function partOfTrip($partOfTrip)
    {
        return $this->setProperty('partOfTrip', $partOfTrip);
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
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $provider
     *
     * @return static
     *
     * @see https://schema.org/provider
     * @see https://pending.schema.org
     */
    public function provider($provider)
    {
        return $this->setProperty('provider', $provider);
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
     * Identifies a [[Trip]] that is a subTrip of this Trip.  For example Day 1,
     * Day 2, etc. of a multi-day trip.
     *
     * @param \Spatie\SchemaOrg\Contracts\TripContract|\Spatie\SchemaOrg\Contracts\TripContract[] $subTrip
     *
     * @return static
     *
     * @see https://schema.org/subTrip
     * @see https://pending.schema.org
     */
    public function subTrip($subTrip)
    {
        return $this->setProperty('subTrip', $subTrip);
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
