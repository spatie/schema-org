<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\HomeAndConstructionBusinessContract;
use Spatie\SchemaOrg\Contracts\LocalBusinessContract;
use Spatie\SchemaOrg\Contracts\LocksmithContract;
use Spatie\SchemaOrg\Contracts\OrganizationContract;
use Spatie\SchemaOrg\Contracts\PlaceContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A locksmith.
 *
 * @see https://schema.org/Locksmith
 *
 */
class Locksmith extends BaseType implements LocksmithContract, HomeAndConstructionBusinessContract, LocalBusinessContract, OrganizationContract, PlaceContract, ThingContract
{
    /**
     * For a [[NewsMediaOrganization]] or other news-related [[Organization]], a
     * statement about public engagement activities (for news media, the
     * newsroom’s), including involving the public - digitally or otherwise --
     * in coverage decisions, reporting and activities after publication.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $actionableFeedbackPolicy
     *
     * @return static
     *
     * @see https://schema.org/actionableFeedbackPolicy
     * @see https://pending.schema.org
     */
    public function actionableFeedbackPolicy($actionableFeedbackPolicy)
    {
        return $this->setProperty('actionableFeedbackPolicy', $actionableFeedbackPolicy);
    }

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
     * Alumni of an organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $alumni
     *
     * @return static
     *
     * @see https://schema.org/alumni
     */
    public function alumni($alumni)
    {
        return $this->setProperty('alumni', $alumni);
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
     * The geographic area where a service or offered item is provided.
     *
     * @param \Spatie\SchemaOrg\Contracts\AdministrativeAreaContract|\Spatie\SchemaOrg\Contracts\AdministrativeAreaContract[]|\Spatie\SchemaOrg\Contracts\GeoShapeContract|\Spatie\SchemaOrg\Contracts\GeoShapeContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[]|string|string[] $areaServed
     *
     * @return static
     *
     * @see https://schema.org/areaServed
     */
    public function areaServed($areaServed)
    {
        return $this->setProperty('areaServed', $areaServed);
    }

    /**
     * An award won by or for this item.
     *
     * @param string|string[] $award
     *
     * @return static
     *
     * @see https://schema.org/award
     */
    public function award($award)
    {
        return $this->setProperty('award', $award);
    }

    /**
     * Awards won by or for this item.
     *
     * @param string|string[] $awards
     *
     * @return static
     *
     * @see https://schema.org/awards
     */
    public function awards($awards)
    {
        return $this->setProperty('awards', $awards);
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
     * The larger organization that this local business is a branch of, if any.
     * Not to be confused with (anatomical) [[branch]].
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $branchOf
     *
     * @return static
     *
     * @see https://schema.org/branchOf
     */
    public function branchOf($branchOf)
    {
        return $this->setProperty('branchOf', $branchOf);
    }

    /**
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     *
     * @param \Spatie\SchemaOrg\Contracts\BrandContract|\Spatie\SchemaOrg\Contracts\BrandContract[]|\Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $brand
     *
     * @return static
     *
     * @see https://schema.org/brand
     */
    public function brand($brand)
    {
        return $this->setProperty('brand', $brand);
    }

    /**
     * A contact point for a person or organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\ContactPointContract|\Spatie\SchemaOrg\Contracts\ContactPointContract[] $contactPoint
     *
     * @return static
     *
     * @see https://schema.org/contactPoint
     */
    public function contactPoint($contactPoint)
    {
        return $this->setProperty('contactPoint', $contactPoint);
    }

    /**
     * A contact point for a person or organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\ContactPointContract|\Spatie\SchemaOrg\Contracts\ContactPointContract[] $contactPoints
     *
     * @return static
     *
     * @see https://schema.org/contactPoints
     */
    public function contactPoints($contactPoints)
    {
        return $this->setProperty('contactPoints', $contactPoints);
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
     * For an [[Organization]] (e.g. [[NewsMediaOrganization]]), a statement
     * describing (in news media, the newsroom’s) disclosure and correction
     * policy for errors.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $correctionsPolicy
     *
     * @return static
     *
     * @see https://schema.org/correctionsPolicy
     * @see https://pending.schema.org
     */
    public function correctionsPolicy($correctionsPolicy)
    {
        return $this->setProperty('correctionsPolicy', $correctionsPolicy);
    }

    /**
     * The currency accepted.
     *
     * Use standard formats: [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217), e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies, e.g. "BTC"; well known names for [Local Exchange
     * Trading
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system)
     * (LETS) and other currency types, e.g. "Ithaca HOUR".
     *
     * @param string|string[] $currenciesAccepted
     *
     * @return static
     *
     * @see https://schema.org/currenciesAccepted
     */
    public function currenciesAccepted($currenciesAccepted)
    {
        return $this->setProperty('currenciesAccepted', $currenciesAccepted);
    }

    /**
     * A relationship between an organization and a department of that
     * organization, also described as an organization (allowing different urls,
     * logos, opening hours). For example: a store with a pharmacy, or a bakery
     * with a cafe.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $department
     *
     * @return static
     *
     * @see https://schema.org/department
     */
    public function department($department)
    {
        return $this->setProperty('department', $department);
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
     * The date that this organization was dissolved.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dissolutionDate
     *
     * @return static
     *
     * @see https://schema.org/dissolutionDate
     */
    public function dissolutionDate($dissolutionDate)
    {
        return $this->setProperty('dissolutionDate', $dissolutionDate);
    }

    /**
     * Statement on diversity policy by an [[Organization]] e.g. a
     * [[NewsMediaOrganization]]. For a [[NewsMediaOrganization]], a statement
     * describing the newsroom’s diversity policy on both staffing and
     * sources, typically providing staffing data.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $diversityPolicy
     *
     * @return static
     *
     * @see https://schema.org/diversityPolicy
     * @see https://pending.schema.org
     */
    public function diversityPolicy($diversityPolicy)
    {
        return $this->setProperty('diversityPolicy', $diversityPolicy);
    }

    /**
     * For an [[Organization]] (often but not necessarily a
     * [[NewsMediaOrganization]]), a report on staffing diversity issues. In a
     * news context this might be for example ASNE or RTDNA (US) reports, or
     * self-reported.
     *
     * @param \Spatie\SchemaOrg\Contracts\ArticleContract|\Spatie\SchemaOrg\Contracts\ArticleContract[]|string|string[] $diversityStaffingReport
     *
     * @return static
     *
     * @see https://schema.org/diversityStaffingReport
     * @see https://pending.schema.org
     */
    public function diversityStaffingReport($diversityStaffingReport)
    {
        return $this->setProperty('diversityStaffingReport', $diversityStaffingReport);
    }

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or
     * business person.
     *
     * @param string|string[] $duns
     *
     * @return static
     *
     * @see https://schema.org/duns
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function duns($duns)
    {
        return $this->setProperty('duns', $duns);
    }

    /**
     * Email address.
     *
     * @param string|string[] $email
     *
     * @return static
     *
     * @see https://schema.org/email
     */
    public function email($email)
    {
        return $this->setProperty('email', $email);
    }

    /**
     * Someone working for this organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $employee
     *
     * @return static
     *
     * @see https://schema.org/employee
     */
    public function employee($employee)
    {
        return $this->setProperty('employee', $employee);
    }

    /**
     * People working for this organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $employees
     *
     * @return static
     *
     * @see https://schema.org/employees
     */
    public function employees($employees)
    {
        return $this->setProperty('employees', $employees);
    }

    /**
     * Statement about ethics policy, e.g. of a [[NewsMediaOrganization]]
     * regarding journalistic and publishing practices, or of a [[Restaurant]],
     * a page describing food source policies. In the case of a
     * [[NewsMediaOrganization]], an ethicsPolicy is typically a statement
     * describing the personal, organizational, and corporate standards of
     * behavior expected by the organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $ethicsPolicy
     *
     * @return static
     *
     * @see https://schema.org/ethicsPolicy
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1525
     */
    public function ethicsPolicy($ethicsPolicy)
    {
        return $this->setProperty('ethicsPolicy', $ethicsPolicy);
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
     * A person who founded this organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $founder
     *
     * @return static
     *
     * @see https://schema.org/founder
     */
    public function founder($founder)
    {
        return $this->setProperty('founder', $founder);
    }

    /**
     * A person who founded this organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $founders
     *
     * @return static
     *
     * @see https://schema.org/founders
     */
    public function founders($founders)
    {
        return $this->setProperty('founders', $founders);
    }

    /**
     * The date that this organization was founded.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $foundingDate
     *
     * @return static
     *
     * @see https://schema.org/foundingDate
     */
    public function foundingDate($foundingDate)
    {
        return $this->setProperty('foundingDate', $foundingDate);
    }

    /**
     * The place where the Organization was founded.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $foundingLocation
     *
     * @return static
     *
     * @see https://schema.org/foundingLocation
     */
    public function foundingLocation($foundingLocation)
    {
        return $this->setProperty('foundingLocation', $foundingLocation);
    }

    /**
     * A person or organization that supports (sponsors) something through some
     * kind of financial contribution.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $funder
     *
     * @return static
     *
     * @see https://schema.org/funder
     */
    public function funder($funder)
    {
        return $this->setProperty('funder', $funder);
    }

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship
     * for this item. See also [[ownershipFundingInfo]].
     *
     * @param \Spatie\SchemaOrg\Contracts\GrantContract|\Spatie\SchemaOrg\Contracts\GrantContract[] $funding
     *
     * @return static
     *
     * @see https://schema.org/funding
     * @see https://pending.schema.org
     */
    public function funding($funding)
    {
        return $this->setProperty('funding', $funding);
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
     * A credential awarded to the Person or Organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\EducationalOccupationalCredentialContract|\Spatie\SchemaOrg\Contracts\EducationalOccupationalCredentialContract[] $hasCredential
     *
     * @return static
     *
     * @see https://schema.org/hasCredential
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2289
     */
    public function hasCredential($hasCredential)
    {
        return $this->setProperty('hasCredential', $hasCredential);
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
     * Specifies a MerchantReturnPolicy that may be applicable.
     *
     * @param \Spatie\SchemaOrg\Contracts\MerchantReturnPolicyContract|\Spatie\SchemaOrg\Contracts\MerchantReturnPolicyContract[] $hasMerchantReturnPolicy
     *
     * @return static
     *
     * @see https://schema.org/hasMerchantReturnPolicy
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function hasMerchantReturnPolicy($hasMerchantReturnPolicy)
    {
        return $this->setProperty('hasMerchantReturnPolicy', $hasMerchantReturnPolicy);
    }

    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or
     * Service.
     *
     * @param \Spatie\SchemaOrg\Contracts\OfferCatalogContract|\Spatie\SchemaOrg\Contracts\OfferCatalogContract[] $hasOfferCatalog
     *
     * @return static
     *
     * @see https://schema.org/hasOfferCatalog
     */
    public function hasOfferCatalog($hasOfferCatalog)
    {
        return $this->setProperty('hasOfferCatalog', $hasOfferCatalog);
    }

    /**
     * Points-of-Sales operated by the organization or person.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $hasPOS
     *
     * @return static
     *
     * @see https://schema.org/hasPOS
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function hasPOS($hasPOS)
    {
        return $this->setProperty('hasPOS', $hasPOS);
    }

    /**
     * Indicates a ProductReturnPolicy that may be applicable.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductReturnPolicyContract|\Spatie\SchemaOrg\Contracts\ProductReturnPolicyContract[] $hasProductReturnPolicy
     *
     * @return static
     *
     * @see https://schema.org/hasProductReturnPolicy
     * @see https://attic.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function hasProductReturnPolicy($hasProductReturnPolicy)
    {
        return $this->setProperty('hasProductReturnPolicy', $hasProductReturnPolicy);
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
     * The number of interactions for the CreativeWork using the WebSite or
     * SoftwareApplication. The most specific child type of InteractionCounter
     * should be used.
     *
     * @param \Spatie\SchemaOrg\Contracts\InteractionCounterContract|\Spatie\SchemaOrg\Contracts\InteractionCounterContract[] $interactionStatistic
     *
     * @return static
     *
     * @see https://schema.org/interactionStatistic
     * @link https://github.com/schemaorg/schemaorg/issues/2421
     */
    public function interactionStatistic($interactionStatistic)
    {
        return $this->setProperty('interactionStatistic', $interactionStatistic);
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
     * An organization identifier as defined in ISO 6523(-1). Note that many
     * existing organization identifiers such as
     * [leiCode](https://schema.org/leiCode), [duns](https://schema.org/duns)
     * and [vatID](https://schema.org/vatID) can be expressed as an ISO 6523
     * identifier by setting the ICD part of the ISO 6523 identifier
     * accordingly.
     *
     * @param string|string[] $iso6523Code
     *
     * @return static
     *
     * @see https://schema.org/iso6523Code
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2915
     */
    public function iso6523Code($iso6523Code)
    {
        return $this->setProperty('iso6523Code', $iso6523Code);
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
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a
     * topic that is known about - suggesting possible expertise but not
     * implying it. We do not distinguish skill levels here, or relate this to
     * educational content, events, objectives or [[JobPosting]] descriptions.
     *
     * @param \Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[]|string|string[] $knowsAbout
     *
     * @return static
     *
     * @see https://schema.org/knowsAbout
     * @see https://pending.schema.org
     */
    public function knowsAbout($knowsAbout)
    {
        return $this->setProperty('knowsAbout', $knowsAbout);
    }

    /**
     * Of a [[Person]], and less typically of an [[Organization]], to indicate a
     * known language. We do not distinguish skill levels or
     * reading/writing/speaking/signing here. Use language codes from the [IETF
     * BCP 47 standard](http://tools.ietf.org/html/bcp47).
     *
     * @param \Spatie\SchemaOrg\Contracts\LanguageContract|\Spatie\SchemaOrg\Contracts\LanguageContract[]|string|string[] $knowsLanguage
     *
     * @return static
     *
     * @see https://schema.org/knowsLanguage
     * @see https://pending.schema.org
     */
    public function knowsLanguage($knowsLanguage)
    {
        return $this->setProperty('knowsLanguage', $knowsLanguage);
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
     * The official name of the organization, e.g. the registered company name.
     *
     * @param string|string[] $legalName
     *
     * @return static
     *
     * @see https://schema.org/legalName
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function legalName($legalName)
    {
        return $this->setProperty('legalName', $legalName);
    }

    /**
     * An organization identifier that uniquely identifies a legal entity as
     * defined in ISO 17442.
     *
     * @param string|string[] $leiCode
     *
     * @return static
     *
     * @see https://schema.org/leiCode
     */
    public function leiCode($leiCode)
    {
        return $this->setProperty('leiCode', $leiCode);
    }

    /**
     * The location of, for example, where an event is happening, where an
     * organization is located, or where an action takes place.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[]|\Spatie\SchemaOrg\Contracts\PostalAddressContract|\Spatie\SchemaOrg\Contracts\PostalAddressContract[]|\Spatie\SchemaOrg\Contracts\VirtualLocationContract|\Spatie\SchemaOrg\Contracts\VirtualLocationContract[]|string|string[] $location
     *
     * @return static
     *
     * @see https://schema.org/location
     */
    public function location($location)
    {
        return $this->setProperty('location', $location);
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
     * A pointer to products or services offered by the organization or person.
     *
     * @param \Spatie\SchemaOrg\Contracts\OfferContract|\Spatie\SchemaOrg\Contracts\OfferContract[] $makesOffer
     *
     * @return static
     *
     * @see https://schema.org/makesOffer
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function makesOffer($makesOffer)
    {
        return $this->setProperty('makesOffer', $makesOffer);
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
     * A member of an Organization or a ProgramMembership. Organizations can be
     * members of organizations; ProgramMembership is typically for individuals.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $member
     *
     * @return static
     *
     * @see https://schema.org/member
     */
    public function member($member)
    {
        return $this->setProperty('member', $member);
    }

    /**
     * An Organization (or ProgramMembership) to which this Person or
     * Organization belongs.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\ProgramMembershipContract|\Spatie\SchemaOrg\Contracts\ProgramMembershipContract[] $memberOf
     *
     * @return static
     *
     * @see https://schema.org/memberOf
     */
    public function memberOf($memberOf)
    {
        return $this->setProperty('memberOf', $memberOf);
    }

    /**
     * A member of this organization.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $members
     *
     * @return static
     *
     * @see https://schema.org/members
     */
    public function members($members)
    {
        return $this->setProperty('members', $members);
    }

    /**
     * The North American Industry Classification System (NAICS) code for a
     * particular organization or business person.
     *
     * @param string|string[] $naics
     *
     * @return static
     *
     * @see https://schema.org/naics
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function naics($naics)
    {
        return $this->setProperty('naics', $naics);
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
     * nonprofitStatus indicates the legal status of a non-profit organization
     * in its primary place of business.
     *
     * @param \Spatie\SchemaOrg\Contracts\NonprofitTypeContract|\Spatie\SchemaOrg\Contracts\NonprofitTypeContract[] $nonprofitStatus
     *
     * @return static
     *
     * @see https://schema.org/nonprofitStatus
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public function nonprofitStatus($nonprofitStatus)
    {
        return $this->setProperty('nonprofitStatus', $nonprofitStatus);
    }

    /**
     * The number of employees in an organization, e.g. business.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $numberOfEmployees
     *
     * @return static
     *
     * @see https://schema.org/numberOfEmployees
     */
    public function numberOfEmployees($numberOfEmployees)
    {
        return $this->setProperty('numberOfEmployees', $numberOfEmployees);
    }

    /**
     * The general opening hours for a business. Opening hours can be specified
     * as a weekly time range, starting with days, then times per day. Multiple
     * days can be listed with commas ',' separating each day. Day or time
     * ranges are specified using a hyphen '-'.
     *
     * * Days are specified using the following two-letter combinations:
     * ```Mo```, ```Tu```, ```We```, ```Th```, ```Fr```, ```Sa```, ```Su```.
     * * Times are specified using 24:00 format. For example, 3pm is specified
     * as ```15:00```, 10am as ```10:00```.
     * * Here is an example: ```<time itemprop="openingHours" datetime="Tu,Th
     * 16:00-20:00">Tuesdays and Thursdays 4-8pm</time>```.
     * * If a business is open 7 days a week, then it can be specified as
     * ```<time itemprop="openingHours" datetime="Mo-Su">Monday through Sunday,
     * all day</time>```.
     *
     * @param string|string[] $openingHours
     *
     * @return static
     *
     * @see https://schema.org/openingHours
     */
    public function openingHours($openingHours)
    {
        return $this->setProperty('openingHours', $openingHours);
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
     * For an [[Organization]] (often but not necessarily a
     * [[NewsMediaOrganization]]), a description of organizational ownership
     * structure; funding and grants. In a news/media setting, this is with
     * particular reference to editorial independence.   Note that the
     * [[funder]] is also available and can be used to make basic funder
     * information machine-readable.
     *
     * @param \Spatie\SchemaOrg\Contracts\AboutPageContract|\Spatie\SchemaOrg\Contracts\AboutPageContract[]|\Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $ownershipFundingInfo
     *
     * @return static
     *
     * @see https://schema.org/ownershipFundingInfo
     * @see https://pending.schema.org
     */
    public function ownershipFundingInfo($ownershipFundingInfo)
    {
        return $this->setProperty('ownershipFundingInfo', $ownershipFundingInfo);
    }

    /**
     * Products owned by the organization or person.
     *
     * @param \Spatie\SchemaOrg\Contracts\OwnershipInfoContract|\Spatie\SchemaOrg\Contracts\OwnershipInfoContract[]|\Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[] $owns
     *
     * @return static
     *
     * @see https://schema.org/owns
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function owns($owns)
    {
        return $this->setProperty('owns', $owns);
    }

    /**
     * The larger organization that this organization is a [[subOrganization]]
     * of, if any.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $parentOrganization
     *
     * @return static
     *
     * @see https://schema.org/parentOrganization
     */
    public function parentOrganization($parentOrganization)
    {
        return $this->setProperty('parentOrganization', $parentOrganization);
    }

    /**
     * Cash, Credit Card, Cryptocurrency, Local Exchange Tradings System, etc.
     *
     * @param string|string[] $paymentAccepted
     *
     * @return static
     *
     * @see https://schema.org/paymentAccepted
     */
    public function paymentAccepted($paymentAccepted)
    {
        return $this->setProperty('paymentAccepted', $paymentAccepted);
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
     * The price range of the business, for example ```$$$```.
     *
     * @param string|string[] $priceRange
     *
     * @return static
     *
     * @see https://schema.org/priceRange
     */
    public function priceRange($priceRange)
    {
        return $this->setProperty('priceRange', $priceRange);
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
     * The publishingPrinciples property indicates (typically via [[URL]]) a
     * document describing the editorial principles of an [[Organization]] (or
     * individual, e.g. a [[Person]] writing a blog) that relate to their
     * activities as a publisher, e.g. ethics or diversity policies. When
     * applied to a [[CreativeWork]] (e.g. [[NewsArticle]]) the principles are
     * those of the party primarily responsible for the creation of the
     * [[CreativeWork]].
     *
     * While such policies are most typically expressed in natural language,
     * sometimes related information (e.g. indicating a [[funder]]) can be
     * expressed using schema.org terminology.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $publishingPrinciples
     *
     * @return static
     *
     * @see https://schema.org/publishingPrinciples
     */
    public function publishingPrinciples($publishingPrinciples)
    {
        return $this->setProperty('publishingPrinciples', $publishingPrinciples);
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
     * A pointer to products or services sought by the organization or person
     * (demand).
     *
     * @param \Spatie\SchemaOrg\Contracts\DemandContract|\Spatie\SchemaOrg\Contracts\DemandContract[] $seeks
     *
     * @return static
     *
     * @see https://schema.org/seeks
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function seeks($seeks)
    {
        return $this->setProperty('seeks', $seeks);
    }

    /**
     * The geographic area where the service is provided.
     *
     * @param \Spatie\SchemaOrg\Contracts\AdministrativeAreaContract|\Spatie\SchemaOrg\Contracts\AdministrativeAreaContract[]|\Spatie\SchemaOrg\Contracts\GeoShapeContract|\Spatie\SchemaOrg\Contracts\GeoShapeContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $serviceArea
     *
     * @return static
     *
     * @see https://schema.org/serviceArea
     */
    public function serviceArea($serviceArea)
    {
        return $this->setProperty('serviceArea', $serviceArea);
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
     * A person or organization that supports a thing through a pledge, promise,
     * or financial contribution. E.g. a sponsor of a Medical Study or a
     * corporate sponsor of an event.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $sponsor
     *
     * @return static
     *
     * @see https://schema.org/sponsor
     */
    public function sponsor($sponsor)
    {
        return $this->setProperty('sponsor', $sponsor);
    }

    /**
     * A relationship between two organizations where the first includes the
     * second, e.g., as a subsidiary. See also: the more specific 'department'
     * property.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $subOrganization
     *
     * @return static
     *
     * @see https://schema.org/subOrganization
     */
    public function subOrganization($subOrganization)
    {
        return $this->setProperty('subOrganization', $subOrganization);
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
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US
     * or the CIF/NIF in Spain.
     *
     * @param string|string[] $taxID
     *
     * @return static
     *
     * @see https://schema.org/taxID
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function taxID($taxID)
    {
        return $this->setProperty('taxID', $taxID);
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
     * For an [[Organization]] (typically a [[NewsMediaOrganization]]), a
     * statement about policy on use of unnamed sources and the decision process
     * required.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $unnamedSourcesPolicy
     *
     * @return static
     *
     * @see https://schema.org/unnamedSourcesPolicy
     * @see https://pending.schema.org
     */
    public function unnamedSourcesPolicy($unnamedSourcesPolicy)
    {
        return $this->setProperty('unnamedSourcesPolicy', $unnamedSourcesPolicy);
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
     * The Value-added Tax ID of the organization or person.
     *
     * @param string|string[] $vatID
     *
     * @return static
     *
     * @see https://schema.org/vatID
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
    public function vatID($vatID)
    {
        return $this->setProperty('vatID', $vatID);
    }
}
