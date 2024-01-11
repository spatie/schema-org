<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\FlightContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\ThingContract;
use Spatie\SchemaOrg\Contracts\TripContract;

/**
 * An airline flight.
 *
 * @see https://schema.org/Flight
 *
 */
class Flight extends BaseType implements FlightContract, IntangibleContract, ThingContract, TripContract
{
    /**
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a
     * relationship between something and a class that the thing is in.
     * Typically the value is a URI-identified RDF class, and in this case
     * corresponds to the
     *     use of rdf:type in RDF. Text values can be used sparingly, for cases
     * where useful information can be added without their being an appropriate
     * schema to reference. In the case of text values, the class label should
     * follow the schema.org [style
     * guide](https://schema.org/docs/styleguide.html).
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
     * The kind of aircraft (e.g., "Boeing 747").
     *
     * @param \Spatie\SchemaOrg\Contracts\VehicleContract|\Spatie\SchemaOrg\Contracts\VehicleContract[]|string|string[] $aircraft
     *
     * @return static
     *
     * @see https://schema.org/aircraft
     */
    public function aircraft($aircraft)
    {
        return $this->setProperty('aircraft', $aircraft);
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
     * The airport where the flight terminates.
     *
     * @param \Spatie\SchemaOrg\Contracts\AirportContract|\Spatie\SchemaOrg\Contracts\AirportContract[] $arrivalAirport
     *
     * @return static
     *
     * @see https://schema.org/arrivalAirport
     */
    public function arrivalAirport($arrivalAirport)
    {
        return $this->setProperty('arrivalAirport', $arrivalAirport);
    }

    /**
     * Identifier of the flight's arrival gate.
     *
     * @param string|string[] $arrivalGate
     *
     * @return static
     *
     * @see https://schema.org/arrivalGate
     */
    public function arrivalGate($arrivalGate)
    {
        return $this->setProperty('arrivalGate', $arrivalGate);
    }

    /**
     * Identifier of the flight's arrival terminal.
     *
     * @param string|string[] $arrivalTerminal
     *
     * @return static
     *
     * @see https://schema.org/arrivalTerminal
     */
    public function arrivalTerminal($arrivalTerminal)
    {
        return $this->setProperty('arrivalTerminal', $arrivalTerminal);
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
     * The type of boarding policy used by the airline (e.g. zone-based or
     * group-based).
     *
     * @param \Spatie\SchemaOrg\Contracts\BoardingPolicyTypeContract|\Spatie\SchemaOrg\Contracts\BoardingPolicyTypeContract[] $boardingPolicy
     *
     * @return static
     *
     * @see https://schema.org/boardingPolicy
     */
    public function boardingPolicy($boardingPolicy)
    {
        return $this->setProperty('boardingPolicy', $boardingPolicy);
    }

    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel
     * delivery and flights.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $carrier
     *
     * @return static
     *
     * @see https://schema.org/carrier
     */
    public function carrier($carrier)
    {
        return $this->setProperty('carrier', $carrier);
    }

    /**
     * The airport where the flight originates.
     *
     * @param \Spatie\SchemaOrg\Contracts\AirportContract|\Spatie\SchemaOrg\Contracts\AirportContract[] $departureAirport
     *
     * @return static
     *
     * @see https://schema.org/departureAirport
     */
    public function departureAirport($departureAirport)
    {
        return $this->setProperty('departureAirport', $departureAirport);
    }

    /**
     * Identifier of the flight's departure gate.
     *
     * @param string|string[] $departureGate
     *
     * @return static
     *
     * @see https://schema.org/departureGate
     */
    public function departureGate($departureGate)
    {
        return $this->setProperty('departureGate', $departureGate);
    }

    /**
     * Identifier of the flight's departure terminal.
     *
     * @param string|string[] $departureTerminal
     *
     * @return static
     *
     * @see https://schema.org/departureTerminal
     */
    public function departureTerminal($departureTerminal)
    {
        return $this->setProperty('departureTerminal', $departureTerminal);
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
     * @param \Spatie\SchemaOrg\Contracts\TextObjectContract|\Spatie\SchemaOrg\Contracts\TextObjectContract[]|string|string[] $description
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
     * The estimated time the flight will take.
     *
     * @param \Spatie\SchemaOrg\Contracts\DurationContract|\Spatie\SchemaOrg\Contracts\DurationContract[]|string|string[] $estimatedFlightDuration
     *
     * @return static
     *
     * @see https://schema.org/estimatedFlightDuration
     */
    public function estimatedFlightDuration($estimatedFlightDuration)
    {
        return $this->setProperty('estimatedFlightDuration', $estimatedFlightDuration);
    }

    /**
     * The distance of the flight.
     *
     * @param \Spatie\SchemaOrg\Contracts\DistanceContract|\Spatie\SchemaOrg\Contracts\DistanceContract[]|string|string[] $flightDistance
     *
     * @return static
     *
     * @see https://schema.org/flightDistance
     */
    public function flightDistance($flightDistance)
    {
        return $this->setProperty('flightDistance', $flightDistance);
    }

    /**
     * The unique identifier for a flight including the airline IATA code. For
     * example, if describing United flight 110, where the IATA code for United
     * is 'UA', the flightNumber is 'UA110'.
     *
     * @param string|string[] $flightNumber
     *
     * @return static
     *
     * @see https://schema.org/flightNumber
     */
    public function flightNumber($flightNumber)
    {
        return $this->setProperty('flightNumber', $flightNumber);
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
     * @link https://github.com/schemaorg/schemaorg/issues/1810
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
     * Description of the meals that will be provided or available for purchase.
     *
     * @param string|string[] $mealService
     *
     * @return static
     *
     * @see https://schema.org/mealService
     */
    public function mealService($mealService)
    {
        return $this->setProperty('mealService', $mealService);
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
     * @link https://github.com/schemaorg/schemaorg/issues/1810
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
     * An entity which offers (sells / leases / lends / loans) the services /
     * goods.  A seller may also be a provider.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $seller
     *
     * @return static
     *
     * @see https://schema.org/seller
     */
    public function seller($seller)
    {
        return $this->setProperty('seller', $seller);
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
     * @link https://github.com/schemaorg/schemaorg/issues/1810
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
     * The location of origin of the trip, prior to any destination(s).
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $tripOrigin
     *
     * @return static
     *
     * @see https://schema.org/tripOrigin
     */
    public function tripOrigin($tripOrigin)
    {
        return $this->setProperty('tripOrigin', $tripOrigin);
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

    /**
     * The time when a passenger can check into the flight online.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $webCheckinTime
     *
     * @return static
     *
     * @see https://schema.org/webCheckinTime
     */
    public function webCheckinTime($webCheckinTime)
    {
        return $this->setProperty('webCheckinTime', $webCheckinTime);
    }
}
