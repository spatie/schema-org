<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\AdministrativeAreaContract;
use Spatie\SchemaOrg\Contracts\PlaceContract;
use Spatie\SchemaOrg\Contracts\SchoolDistrictContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A School District is an administrative area for the administration of
 * schools.
 *
 * @see https://schema.org/SchoolDistrict
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2500
 *
 */
class SchoolDistrict extends BaseType implements SchoolDistrictContract, AdministrativeAreaContract, PlaceContract, ThingContract
{
    /**
     * A property-value pair representing an additional characteristic of the
     * entity, e.g. a product feature or another characteristic for which there
     * is no matching property in schema.org.
     *
     * Note: Publishers should be aware that applications designed to use
     * specific schema.org properties (e.g. https://schema.org/width,
     * https://schema.org/color, https://schema.org/gtin13, ...) will typically
     * expect such data to be provided using those properties, rather than using
     * the generic property/value mechanism.
     *
     * @param \Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[] $additionalProperty
     *
     * @return static
     *
     * @see https://schema.org/additionalProperty
     */
    public function additionalProperty($additionalProperty)
    {
        return $this->setProperty('additionalProperty', $additionalProperty);
    }

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
     * Physical address of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\PostalAddressContract|\Spatie\SchemaOrg\Contracts\PostalAddressContract[]|string|string[] $address
     *
     * @return static
     *
     * @see https://schema.org/address
     */
    public function address($address)
    {
        return $this->setProperty('address', $address);
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @param \Spatie\SchemaOrg\Contracts\AggregateRatingContract|\Spatie\SchemaOrg\Contracts\AggregateRatingContract[] $aggregateRating
     *
     * @return static
     *
     * @see https://schema.org/aggregateRating
     */
    public function aggregateRating($aggregateRating)
    {
        return $this->setProperty('aggregateRating', $aggregateRating);
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
     * An amenity feature (e.g. a characteristic or service) of the
     * Accommodation. This generic property does not make a statement about
     * whether the feature is included in an offer for the main accommodation or
     * available at extra costs.
     *
     * @param \Spatie\SchemaOrg\Contracts\LocationFeatureSpecificationContract|\Spatie\SchemaOrg\Contracts\LocationFeatureSpecificationContract[] $amenityFeature
     *
     * @return static
     *
     * @see https://schema.org/amenityFeature
     * @link https://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#STI_Accommodation_Ontology
     */
    public function amenityFeature($amenityFeature)
    {
        return $this->setProperty('amenityFeature', $amenityFeature);
    }

    /**
     * A short textual code (also called "store code") that uniquely identifies
     * a place of business. The code is typically assigned by the
     * parentOrganization and used in structured URLs.
     *
     * For example, in the URL
     * http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047"
     * is a branchCode for a particular branch.
     *
     * @param string|string[] $branchCode
     *
     * @return static
     *
     * @see https://schema.org/branchCode
     */
    public function branchCode($branchCode)
    {
        return $this->setProperty('branchCode', $branchCode);
    }

    /**
     * The basic containment relation between a place and one that contains it.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $containedIn
     *
     * @return static
     *
     * @see https://schema.org/containedIn
     */
    public function containedIn($containedIn)
    {
        return $this->setProperty('containedIn', $containedIn);
    }

    /**
     * The basic containment relation between a place and one that contains it.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $containedInPlace
     *
     * @return static
     *
     * @see https://schema.org/containedInPlace
     */
    public function containedInPlace($containedInPlace)
    {
        return $this->setProperty('containedInPlace', $containedInPlace);
    }

    /**
     * The basic containment relation between a place and another that it
     * contains.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $containsPlace
     *
     * @return static
     *
     * @see https://schema.org/containsPlace
     */
    public function containsPlace($containsPlace)
    {
        return $this->setProperty('containsPlace', $containsPlace);
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
     * Upcoming or past event associated with this place, organization, or
     * action.
     *
     * @param \Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $event
     *
     * @return static
     *
     * @see https://schema.org/event
     */
    public function event($event)
    {
        return $this->setProperty('event', $event);
    }

    /**
     * Upcoming or past events associated with this place or organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $events
     *
     * @return static
     *
     * @see https://schema.org/events
     */
    public function events($events)
    {
        return $this->setProperty('events', $events);
    }

    /**
     * The fax number.
     *
     * @param string|string[] $faxNumber
     *
     * @return static
     *
     * @see https://schema.org/faxNumber
     */
    public function faxNumber($faxNumber)
    {
        return $this->setProperty('faxNumber', $faxNumber);
    }

    /**
     * The geo coordinates of the place.
     *
     * @param \Spatie\SchemaOrg\Contracts\GeoCoordinatesContract|\Spatie\SchemaOrg\Contracts\GeoCoordinatesContract[]|\Spatie\SchemaOrg\Contracts\GeoShapeContract|\Spatie\SchemaOrg\Contracts\GeoShapeContract[] $geo
     *
     * @return static
     *
     * @see https://schema.org/geo
     */
    public function geo($geo)
    {
        return $this->setProperty('geo', $geo);
    }

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a containing geometry to a contained geometry. "a
     * contains b iff no points of b lie in the exterior of a, and at least one
     * point of the interior of b lies in the interior of a". As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoContains
     *
     * @return static
     *
     * @see https://schema.org/geoContains
     */
    public function geoContains($geoContains)
    {
        return $this->setProperty('geoContains', $geoContains);
    }

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a geometry to another that covers it. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoCoveredBy
     *
     * @return static
     *
     * @see https://schema.org/geoCoveredBy
     */
    public function geoCoveredBy($geoCoveredBy)
    {
        return $this->setProperty('geoCoveredBy', $geoCoveredBy);
    }

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a covering geometry to a covered geometry. "Every
     * point of b is a point of (the interior or boundary of) a". As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoCovers
     *
     * @return static
     *
     * @see https://schema.org/geoCovers
     */
    public function geoCovers($geoCovers)
    {
        return $this->setProperty('geoCovers', $geoCovers);
    }

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a geometry to another that crosses it: "a crosses b:
     * they have some but not all interior points in common, and the dimension
     * of the intersection is less than that of at least one of them". As
     * defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoCrosses
     *
     * @return static
     *
     * @see https://schema.org/geoCrosses
     */
    public function geoCrosses($geoCrosses)
    {
        return $this->setProperty('geoCrosses', $geoCrosses);
    }

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) are topologically disjoint: "they have no point in common.
     * They form a set of disconnected geometries." (A symmetric relationship,
     * as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoDisjoint
     *
     * @return static
     *
     * @see https://schema.org/geoDisjoint
     */
    public function geoDisjoint($geoDisjoint)
    {
        return $this->setProperty('geoDisjoint', $geoDisjoint);
    }

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) are topologically equal, as defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries are
     * topologically equal if their interiors intersect and no part of the
     * interior or boundary of one geometry intersects the exterior of the
     * other" (a symmetric relationship).
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoEquals
     *
     * @return static
     *
     * @see https://schema.org/geoEquals
     */
    public function geoEquals($geoEquals)
    {
        return $this->setProperty('geoEquals', $geoEquals);
    }

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) have at least one point in common. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoIntersects
     *
     * @return static
     *
     * @see https://schema.org/geoIntersects
     */
    public function geoIntersects($geoIntersects)
    {
        return $this->setProperty('geoIntersects', $geoIntersects);
    }

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a geometry to another that geospatially overlaps it,
     * i.e. they have some but not all points in common. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoOverlaps
     *
     * @return static
     *
     * @see https://schema.org/geoOverlaps
     */
    public function geoOverlaps($geoOverlaps)
    {
        return $this->setProperty('geoOverlaps', $geoOverlaps);
    }

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) touch: "they have at least one boundary point in common, but
     * no interior points." (A symmetric relationship, as defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoTouches
     *
     * @return static
     *
     * @see https://schema.org/geoTouches
     */
    public function geoTouches($geoTouches)
    {
        return $this->setProperty('geoTouches', $geoTouches);
    }

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a geometry to one that contains it, i.e. it is
     * inside (i.e. within) its interior. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoWithin
     *
     * @return static
     *
     * @see https://schema.org/geoWithin
     */
    public function geoWithin($geoWithin)
    {
        return $this->setProperty('geoWithin', $geoWithin);
    }

    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also
     * referred to as International Location Number or ILN) of the respective
     * organization, person, or place. The GLN is a 13-digit number used to
     * identify parties and physical locations.
     *
     * @param string|string[] $globalLocationNumber
     *
     * @return static
     *
     * @see https://schema.org/globalLocationNumber
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function globalLocationNumber($globalLocationNumber)
    {
        return $this->setProperty('globalLocationNumber', $globalLocationNumber);
    }

    /**
     * Indicates whether some facility (e.g. [[FoodEstablishment]],
     * [[CovidTestingFacility]]) offers a service that can be used by driving
     * through in a car. In the case of [[CovidTestingFacility]] such facilities
     * could potentially help with social distancing from other
     * potentially-infected users.
     *
     * @param bool|bool[] $hasDriveThroughService
     *
     * @return static
     *
     * @see https://schema.org/hasDriveThroughService
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2490
     */
    public function hasDriveThroughService($hasDriveThroughService)
    {
        return $this->setProperty('hasDriveThroughService', $hasDriveThroughService);
    }

    /**
     * A URL to a map of the place.
     *
     * @param \Spatie\SchemaOrg\Contracts\MapContract|\Spatie\SchemaOrg\Contracts\MapContract[]|string|string[] $hasMap
     *
     * @return static
     *
     * @see https://schema.org/hasMap
     */
    public function hasMap($hasMap)
    {
        return $this->setProperty('hasMap', $hasMap);
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
     * A flag to signal that the item, event, or place is accessible for free.
     *
     * @param bool|bool[] $isAccessibleForFree
     *
     * @return static
     *
     * @see https://schema.org/isAccessibleForFree
     */
    public function isAccessibleForFree($isAccessibleForFree)
    {
        return $this->setProperty('isAccessibleForFree', $isAccessibleForFree);
    }

    /**
     * The International Standard of Industrial Classification of All Economic
     * Activities (ISIC), Revision 4 code for a particular organization,
     * business person, or place.
     *
     * @param string|string[] $isicV4
     *
     * @return static
     *
     * @see https://schema.org/isicV4
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function isicV4($isicV4)
    {
        return $this->setProperty('isicV4', $isicV4);
    }

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in
     * a keywords list are typically delimited by commas, or by repeating the
     * property.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $keywords
     *
     * @return static
     *
     * @see https://schema.org/keywords
     */
    public function keywords($keywords)
    {
        return $this->setProperty('keywords', $keywords);
    }

    /**
     * The latitude of a location. For example ```37.42242``` ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     * @param float|float[]|int|int[]|string|string[] $latitude
     *
     * @return static
     *
     * @see https://schema.org/latitude
     */
    public function latitude($latitude)
    {
        return $this->setProperty('latitude', $latitude);
    }

    /**
     * An associated logo.
     *
     * @param \Spatie\SchemaOrg\Contracts\ImageObjectContract|\Spatie\SchemaOrg\Contracts\ImageObjectContract[]|string|string[] $logo
     *
     * @return static
     *
     * @see https://schema.org/logo
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function logo($logo)
    {
        return $this->setProperty('logo', $logo);
    }

    /**
     * The longitude of a location. For example ```-122.08585``` ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)).
     *
     * @param float|float[]|int|int[]|string|string[] $longitude
     *
     * @return static
     *
     * @see https://schema.org/longitude
     */
    public function longitude($longitude)
    {
        return $this->setProperty('longitude', $longitude);
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
     * A URL to a map of the place.
     *
     * @param string|string[] $map
     *
     * @return static
     *
     * @see https://schema.org/map
     */
    public function map($map)
    {
        return $this->setProperty('map', $map);
    }

    /**
     * A URL to a map of the place.
     *
     * @param string|string[] $maps
     *
     * @return static
     *
     * @see https://schema.org/maps
     */
    public function maps($maps)
    {
        return $this->setProperty('maps', $maps);
    }

    /**
     * The total number of individuals that may attend an event or venue.
     *
     * @param int|int[] $maximumAttendeeCapacity
     *
     * @return static
     *
     * @see https://schema.org/maximumAttendeeCapacity
     */
    public function maximumAttendeeCapacity($maximumAttendeeCapacity)
    {
        return $this->setProperty('maximumAttendeeCapacity', $maximumAttendeeCapacity);
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
     * The opening hours of a certain place.
     *
     * @param \Spatie\SchemaOrg\Contracts\OpeningHoursSpecificationContract|\Spatie\SchemaOrg\Contracts\OpeningHoursSpecificationContract[] $openingHoursSpecification
     *
     * @return static
     *
     * @see https://schema.org/openingHoursSpecification
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function openingHoursSpecification($openingHoursSpecification)
    {
        return $this->setProperty('openingHoursSpecification', $openingHoursSpecification);
    }

    /**
     * A photograph of this place.
     *
     * @param \Spatie\SchemaOrg\Contracts\ImageObjectContract|\Spatie\SchemaOrg\Contracts\ImageObjectContract[]|\Spatie\SchemaOrg\Contracts\PhotographContract|\Spatie\SchemaOrg\Contracts\PhotographContract[] $photo
     *
     * @return static
     *
     * @see https://schema.org/photo
     */
    public function photo($photo)
    {
        return $this->setProperty('photo', $photo);
    }

    /**
     * Photographs of this place.
     *
     * @param \Spatie\SchemaOrg\Contracts\ImageObjectContract|\Spatie\SchemaOrg\Contracts\ImageObjectContract[]|\Spatie\SchemaOrg\Contracts\PhotographContract|\Spatie\SchemaOrg\Contracts\PhotographContract[] $photos
     *
     * @return static
     *
     * @see https://schema.org/photos
     */
    public function photos($photos)
    {
        return $this->setProperty('photos', $photos);
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
     * A flag to signal that the [[Place]] is open to public visitors.  If this
     * property is omitted there is no assumed default boolean value
     *
     * @param bool|bool[] $publicAccess
     *
     * @return static
     *
     * @see https://schema.org/publicAccess
     */
    public function publicAccess($publicAccess)
    {
        return $this->setProperty('publicAccess', $publicAccess);
    }

    /**
     * A review of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\ReviewContract|\Spatie\SchemaOrg\Contracts\ReviewContract[] $review
     *
     * @return static
     *
     * @see https://schema.org/review
     */
    public function review($review)
    {
        return $this->setProperty('review', $review);
    }

    /**
     * Review of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\ReviewContract|\Spatie\SchemaOrg\Contracts\ReviewContract[] $reviews
     *
     * @return static
     *
     * @see https://schema.org/reviews
     */
    public function reviews($reviews)
    {
        return $this->setProperty('reviews', $reviews);
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
     * A slogan or motto associated with the item.
     *
     * @param string|string[] $slogan
     *
     * @return static
     *
     * @see https://schema.org/slogan
     */
    public function slogan($slogan)
    {
        return $this->setProperty('slogan', $slogan);
    }

    /**
     * Indicates whether it is allowed to smoke in the place, e.g. in the
     * restaurant, hotel or hotel room.
     *
     * @param bool|bool[] $smokingAllowed
     *
     * @return static
     *
     * @see https://schema.org/smokingAllowed
     * @link https://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#STI_Accommodation_Ontology
     */
    public function smokingAllowed($smokingAllowed)
    {
        return $this->setProperty('smokingAllowed', $smokingAllowed);
    }

    /**
     * The special opening hours of a certain place.
     *
     * Use this to explicitly override general opening hours brought in scope by
     * [[openingHoursSpecification]] or [[openingHours]].
     *
     * @param \Spatie\SchemaOrg\Contracts\OpeningHoursSpecificationContract|\Spatie\SchemaOrg\Contracts\OpeningHoursSpecificationContract[] $specialOpeningHoursSpecification
     *
     * @return static
     *
     * @see https://schema.org/specialOpeningHoursSpecification
     */
    public function specialOpeningHoursSpecification($specialOpeningHoursSpecification)
    {
        return $this->setProperty('specialOpeningHoursSpecification', $specialOpeningHoursSpecification);
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
     * The telephone number.
     *
     * @param string|string[] $telephone
     *
     * @return static
     *
     * @see https://schema.org/telephone
     */
    public function telephone($telephone)
    {
        return $this->setProperty('telephone', $telephone);
    }

    /**
     * A page providing information on how to book a tour of some [[Place]],
     * such as an [[Accommodation]] or [[ApartmentComplex]] in a real estate
     * setting, as well as other kinds of tours as appropriate.
     *
     * @param string|string[] $tourBookingPage
     *
     * @return static
     *
     * @see https://schema.org/tourBookingPage
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2373
     */
    public function tourBookingPage($tourBookingPage)
    {
        return $this->setProperty('tourBookingPage', $tourBookingPage);
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
