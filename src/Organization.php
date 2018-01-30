<?php

namespace Spatie\SchemaOrg;

/**
 * An organization such as a school, NGO, corporation, club, etc.
 *
 * @see 
 */
class Organization extends Thing
{
    /**
     * Indicates an OfferCatalog listing for this Organization, Person, or
     * Service.
     *
     * @param OfferCatalog|OfferCatalog[] $hasOfferCatalog
     *
     * @return static
     *
     * @see 
     */
    public function hasOfferCatalog($hasOfferCatalog)
    {
        return $this->setProperty('hasOfferCatalog', $hasOfferCatalog);
    }

    /**
     * Physical address of the item.
     *
     * @param PostalAddress|PostalAddress[]|string|string[] $address
     *
     * @return static
     *
     * @see 
     */
    public function address($address)
    {
        return $this->setProperty('address', $address);
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @param AggregateRating|AggregateRating[] $aggregateRating
     *
     * @return static
     *
     * @see 
     */
    public function aggregateRating($aggregateRating)
    {
        return $this->setProperty('aggregateRating', $aggregateRating);
    }

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
     * An award won by or for this item.
     *
     * @param string|string[] $award
     *
     * @return static
     *
     * @see 
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
     * @see 
     */
    public function awards($awards)
    {
        return $this->setProperty('awards', $awards);
    }

    /**
     * The larger organization that this organization is a [[subOrganization]]
     * of, if any.
     *
     * @param Organization|Organization[] $parentOrganization
     *
     * @return static
     *
     * @see 
     */
    public function parentOrganization($parentOrganization)
    {
        return $this->setProperty('parentOrganization', $parentOrganization);
    }

    /**
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     *
     * @param Brand|Brand[]|Organization|Organization[] $brand
     *
     * @return static
     *
     * @see 
     */
    public function brand($brand)
    {
        return $this->setProperty('brand', $brand);
    }

    /**
     * A contact point for a person or organization.
     *
     * @param ContactPoint|ContactPoint[] $contactPoints
     *
     * @return static
     *
     * @see 
     */
    public function contactPoints($contactPoints)
    {
        return $this->setProperty('contactPoints', $contactPoints);
    }

    /**
     * A contact point for a person or organization.
     *
     * @param ContactPoint|ContactPoint[] $contactPoint
     *
     * @return static
     *
     * @see 
     */
    public function contactPoint($contactPoint)
    {
        return $this->setProperty('contactPoint', $contactPoint);
    }

    /**
     * A relationship between an organization and a department of that
     * organization, also described as an organization (allowing different urls,
     * logos, opening hours). For example: a store with a pharmacy, or a bakery
     * with a cafe.
     *
     * @param Organization|Organization[] $department
     *
     * @return static
     *
     * @see 
     */
    public function department($department)
    {
        return $this->setProperty('department', $department);
    }

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or
     * business person.
     *
     * @param string|string[] $duns
     *
     * @return static
     *
     * @see 
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
     * @see 
     */
    public function email($email)
    {
        return $this->setProperty('email', $email);
    }

    /**
     * People working for this organization.
     *
     * @param Person|Person[] $employees
     *
     * @return static
     *
     * @see 
     */
    public function employees($employees)
    {
        return $this->setProperty('employees', $employees);
    }

    /**
     * Someone working for this organization.
     *
     * @param Person|Person[] $employee
     *
     * @return static
     *
     * @see 
     */
    public function employee($employee)
    {
        return $this->setProperty('employee', $employee);
    }

    /**
     * Upcoming or past event associated with this place, organization, or
     * action.
     *
     * @param Event|Event[] $event
     *
     * @return static
     *
     * @see 
     */
    public function event($event)
    {
        return $this->setProperty('event', $event);
    }

    /**
     * Upcoming or past events associated with this place or organization.
     *
     * @param Event|Event[] $events
     *
     * @return static
     *
     * @see 
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
     * @see 
     */
    public function faxNumber($faxNumber)
    {
        return $this->setProperty('faxNumber', $faxNumber);
    }

    /**
     * A person who founded this organization.
     *
     * @param Person|Person[] $founder
     *
     * @return static
     *
     * @see 
     */
    public function founder($founder)
    {
        return $this->setProperty('founder', $founder);
    }

    /**
     * The date that this organization was founded.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $foundingDate
     *
     * @return static
     *
     * @see 
     */
    public function foundingDate($foundingDate)
    {
        return $this->setProperty('foundingDate', $foundingDate);
    }

    /**
     * The date that this organization was dissolved.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dissolutionDate
     *
     * @return static
     *
     * @see 
     */
    public function dissolutionDate($dissolutionDate)
    {
        return $this->setProperty('dissolutionDate', $dissolutionDate);
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
     * @see 
     */
    public function globalLocationNumber($globalLocationNumber)
    {
        return $this->setProperty('globalLocationNumber', $globalLocationNumber);
    }

    /**
     * Points-of-Sales operated by the organization or person.
     *
     * @param Place|Place[] $hasPOS
     *
     * @return static
     *
     * @see 
     */
    public function hasPOS($hasPOS)
    {
        return $this->setProperty('hasPOS', $hasPOS);
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
     * @see 
     */
    public function isicV4($isicV4)
    {
        return $this->setProperty('isicV4', $isicV4);
    }

    /**
     * A person who founded this organization.
     *
     * @param Person|Person[] $founders
     *
     * @return static
     *
     * @see 
     */
    public function founders($founders)
    {
        return $this->setProperty('founders', $founders);
    }

    /**
     * The location of for example where the event is happening, an organization
     * is located, or where an action takes place.
     *
     * @param Place|Place[]|PostalAddress|PostalAddress[]|string|string[] $location
     *
     * @return static
     *
     * @see 
     */
    public function location($location)
    {
        return $this->setProperty('location', $location);
    }

    /**
     * An associated logo.
     *
     * @param ImageObject|ImageObject[]|string|string[] $logo
     *
     * @return static
     *
     * @see 
     */
    public function logo($logo)
    {
        return $this->setProperty('logo', $logo);
    }

    /**
     * A pointer to products or services offered by the organization or person.
     *
     * @param Offer|Offer[] $makesOffer
     *
     * @return static
     *
     * @see 
     */
    public function makesOffer($makesOffer)
    {
        return $this->setProperty('makesOffer', $makesOffer);
    }

    /**
     * A pointer to the organization or person making the offer.
     *
     * @param Person|Person[]|Offer|Offer[] $offeredBy
     *
     * @return static
     *
     * @see 
     */
    public function offeredBy($offeredBy)
    {
        return $this->setProperty('offeredBy', $offeredBy);
    }

    /**
     * An Organization (or ProgramMembership) to which this Person or
     * Organization belongs.
     *
     * @param Organization|Organization[]|ProgramMembership|ProgramMembership[] $memberOf
     *
     * @return static
     *
     * @see 
     */
    public function memberOf($memberOf)
    {
        return $this->setProperty('memberOf', $memberOf);
    }

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be
     * members of organizations; ProgramMembership is typically for individuals.
     *
     * @param Organization|Organization[]|Person|Person[] $member
     *
     * @return static
     *
     * @see 
     */
    public function member($member)
    {
        return $this->setProperty('member', $member);
    }

    /**
     * A member of this organization.
     *
     * @param Organization|Organization[]|Person|Person[] $members
     *
     * @return static
     *
     * @see 
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
     * @see 
     */
    public function naics($naics)
    {
        return $this->setProperty('naics', $naics);
    }

    /**
     * The number of employees in an organization e.g. business.
     *
     * @param QuantitativeValue|QuantitativeValue[] $numberOfEmployees
     *
     * @return static
     *
     * @see 
     */
    public function numberOfEmployees($numberOfEmployees)
    {
        return $this->setProperty('numberOfEmployees', $numberOfEmployees);
    }

    /**
     * Products owned by the organization or person.
     *
     * @param OwnershipInfo|OwnershipInfo[]|Product|Product[] $owns
     *
     * @return static
     *
     * @see 
     */
    public function owns($owns)
    {
        return $this->setProperty('owns', $owns);
    }

    /**
     * The official name of the organization, e.g. the registered company name.
     *
     * @param string|string[] $legalName
     *
     * @return static
     *
     * @see 
     */
    public function legalName($legalName)
    {
        return $this->setProperty('legalName', $legalName);
    }

    /**
     * A review of the item.
     *
     * @param Review|Review[] $review
     *
     * @return static
     *
     * @see 
     */
    public function review($review)
    {
        return $this->setProperty('review', $review);
    }

    /**
     * Review of the item.
     *
     * @param Review|Review[] $reviews
     *
     * @return static
     *
     * @see 
     */
    public function reviews($reviews)
    {
        return $this->setProperty('reviews', $reviews);
    }

    /**
     * A pointer to products or services sought by the organization or person
     * (demand).
     *
     * @param Demand|Demand[] $seeks
     *
     * @return static
     *
     * @see 
     */
    public function seeks($seeks)
    {
        return $this->setProperty('seeks', $seeks);
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
     * A person or organization that supports a thing through a pledge, promise,
     * or financial contribution. e.g. a sponsor of a Medical Study or a
     * corporate sponsor of an event.
     *
     * @param Organization|Organization[]|Person|Person[] $sponsor
     *
     * @return static
     *
     * @see 
     */
    public function sponsor($sponsor)
    {
        return $this->setProperty('sponsor', $sponsor);
    }

    /**
     * A person or organization that supports (sponsors) something through some
     * kind of financial contribution.
     *
     * @param Organization|Organization[]|Person|Person[] $funder
     *
     * @return static
     *
     * @see 
     */
    public function funder($funder)
    {
        return $this->setProperty('funder', $funder);
    }

    /**
     * A relationship between two organizations where the first includes the
     * second, e.g., as a subsidiary. See also: the more specific 'department'
     * property.
     *
     * @param Organization|Organization[] $subOrganization
     *
     * @return static
     *
     * @see 
     */
    public function subOrganization($subOrganization)
    {
        return $this->setProperty('subOrganization', $subOrganization);
    }

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US
     * or the CIF/NIF in Spain.
     *
     * @param string|string[] $taxID
     *
     * @return static
     *
     * @see 
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
     * @see 
     */
    public function telephone($telephone)
    {
        return $this->setProperty('telephone', $telephone);
    }

    /**
     * The Value-added Tax ID of the organization or person.
     *
     * @param string|string[] $vatID
     *
     * @return static
     *
     * @see 
     */
    public function vatID($vatID)
    {
        return $this->setProperty('vatID', $vatID);
    }

    /**
     * The place where the Organization was founded.
     *
     * @param Place|Place[] $foundingLocation
     *
     * @return static
     *
     * @see 
     */
    public function foundingLocation($foundingLocation)
    {
        return $this->setProperty('foundingLocation', $foundingLocation);
    }

    /**
     * An organization identifier that uniquely identifies a legal entity as
     * defined in ISO 17442.
     *
     * @param string|string[] $leiCode
     *
     * @return static
     *
     * @see 
     */
    public function leiCode($leiCode)
    {
        return $this->setProperty('leiCode', $leiCode);
    }

}
