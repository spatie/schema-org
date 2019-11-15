<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\ActionContract;
use \Spatie\SchemaOrg\Contracts\AirportContract;
use \Spatie\SchemaOrg\Contracts\BoardingPolicyTypeContract;
use \Spatie\SchemaOrg\Contracts\CreativeWorkContract;
use \Spatie\SchemaOrg\Contracts\DemandContract;
use \Spatie\SchemaOrg\Contracts\DistanceContract;
use \Spatie\SchemaOrg\Contracts\DurationContract;
use \Spatie\SchemaOrg\Contracts\EventContract;
use \Spatie\SchemaOrg\Contracts\ImageObjectContract;
use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\OfferContract;
use \Spatie\SchemaOrg\Contracts\OrganizationContract;
use \Spatie\SchemaOrg\Contracts\PersonContract;
use \Spatie\SchemaOrg\Contracts\PropertyValueContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;
use \Spatie\SchemaOrg\Contracts\TripContract;
use \Spatie\SchemaOrg\Contracts\VehicleContract;

/**
 * An airline flight.
 *
 * @see http://schema.org/Flight
 *
 */
class Flight extends BaseType implements IntangibleContract, ThingContract, TripContract
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
     * @see http://schema.org/additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * The kind of aircraft (e.g., "Boeing 747").
     *
     * @param VehicleContract|VehicleContract[]|string|string[] $aircraft
     *
     * @return static
     *
     * @see http://schema.org/aircraft
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
     * @see http://schema.org/alternateName
     */
    public function alternateName($alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * The airport where the flight terminates.
     *
     * @param AirportContract|AirportContract[] $arrivalAirport
     *
     * @return static
     *
     * @see http://schema.org/arrivalAirport
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
     * @see http://schema.org/arrivalGate
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
     * @see http://schema.org/arrivalTerminal
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
     * @see http://schema.org/arrivalTime
     */
    public function arrivalTime($arrivalTime)
    {
        return $this->setProperty('arrivalTime', $arrivalTime);
    }

    /**
     * The type of boarding policy used by the airline (e.g. zone-based or
     * group-based).
     *
     * @param BoardingPolicyTypeContract|BoardingPolicyTypeContract[] $boardingPolicy
     *
     * @return static
     *
     * @see http://schema.org/boardingPolicy
     */
    public function boardingPolicy($boardingPolicy)
    {
        return $this->setProperty('boardingPolicy', $boardingPolicy);
    }

    /**
     * 'carrier' is an out-dated term indicating the 'provider' for parcel
     * delivery and flights.
     *
     * @param OrganizationContract|OrganizationContract[] $carrier
     *
     * @return static
     *
     * @see http://schema.org/carrier
     */
    public function carrier($carrier)
    {
        return $this->setProperty('carrier', $carrier);
    }

    /**
     * The airport where the flight originates.
     *
     * @param AirportContract|AirportContract[] $departureAirport
     *
     * @return static
     *
     * @see http://schema.org/departureAirport
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
     * @see http://schema.org/departureGate
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
     * @see http://schema.org/departureTerminal
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
     * @see http://schema.org/departureTime
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
     * @see http://schema.org/description
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
     * @see http://schema.org/disambiguatingDescription
     */
    public function disambiguatingDescription($disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * The estimated time the flight will take.
     *
     * @param DurationContract|DurationContract[]|string|string[] $estimatedFlightDuration
     *
     * @return static
     *
     * @see http://schema.org/estimatedFlightDuration
     */
    public function estimatedFlightDuration($estimatedFlightDuration)
    {
        return $this->setProperty('estimatedFlightDuration', $estimatedFlightDuration);
    }

    /**
     * The distance of the flight.
     *
     * @param DistanceContract|DistanceContract[]|string|string[] $flightDistance
     *
     * @return static
     *
     * @see http://schema.org/flightDistance
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
     * @see http://schema.org/flightNumber
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
     * @param PropertyValueContract|PropertyValueContract[]|string|string[] $identifier
     *
     * @return static
     *
     * @see http://schema.org/identifier
     */
    public function identifier($identifier)
    {
        return $this->setProperty('identifier', $identifier);
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     *
     * @param ImageObjectContract|ImageObjectContract[]|string|string[] $image
     *
     * @return static
     *
     * @see http://schema.org/image
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
     * @param CreativeWorkContract|CreativeWorkContract[]|string|string[] $mainEntityOfPage
     *
     * @return static
     *
     * @see http://schema.org/mainEntityOfPage
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
     * @see http://schema.org/mealService
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
     * @see http://schema.org/name
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
     * @param DemandContract|DemandContract[]|OfferContract|OfferContract[] $offers
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
     * Indicates a potential Action, which describes an idealized action in
     * which this thing would play an 'object' role.
     *
     * @param ActionContract|ActionContract[] $potentialAction
     *
     * @return static
     *
     * @see http://schema.org/potentialAction
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
     * @param OrganizationContract|OrganizationContract[]|PersonContract|PersonContract[] $provider
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
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or
     * official website.
     *
     * @param string|string[] $sameAs
     *
     * @return static
     *
     * @see http://schema.org/sameAs
     */
    public function sameAs($sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * An entity which offers (sells / leases / lends / loans) the services /
     * goods.  A seller may also be a provider.
     *
     * @param OrganizationContract|OrganizationContract[]|PersonContract|PersonContract[] $seller
     *
     * @return static
     *
     * @see http://schema.org/seller
     */
    public function seller($seller)
    {
        return $this->setProperty('seller', $seller);
    }

    /**
     * A CreativeWork or Event about this Thing.
     *
     * @param CreativeWorkContract|CreativeWorkContract[]|EventContract|EventContract[] $subjectOf
     *
     * @return static
     *
     * @see http://schema.org/subjectOf
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
     * @see http://schema.org/url
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
     * @see http://schema.org/webCheckinTime
     */
    public function webCheckinTime($webCheckinTime)
    {
        return $this->setProperty('webCheckinTime', $webCheckinTime);
    }

}
