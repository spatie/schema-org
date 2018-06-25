<?php

namespace Spatie\SchemaOrg;

/**
 * An organization such as a school, NGO, corporation, club, etc.
 *
 * @see http://schema.org/Organization
 *
 * @mixin \Spatie\SchemaOrg\Thing
 */
class Organization extends BaseType
{
    /**
     * The schema.org Actions mechanism benefited from extensive discussions
     * across the Web standards community around W3C, in particular from the
     * [Hydra project](http://purl.org/hydra/)'s community group.
     *
     * @see http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_ActionCollabClass
     */
     const ActionCollabClass = 'http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_ActionCollabClass';

    /**
     * This element is based on the work of the Automotive Ontology Working
     * Group, see
     * [www.automotive-ontology.org](http://www.automotive-ontology.org) for
     * details. Many class and property definitions are inspired by or based on
     * abstracts from Wikipedia, the free encyclopedia.
     *
     * @see http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group
     */
     const AutomotiveOntologyWGClass = 'http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Automotive_Ontology_Working_Group';

    /**
     * The W3C [Schema Bib Extend](http://www.w3.org/community/schemabibex/)
     * (BibEx) group led the work to improve schema.org for bibliographic
     * information, including terms for periodicals, articles and multi-volume
     * works. The design was inspired in places (e.g. [[pageStart]],
     * [[pageEnd]], [[pagination]]) by the [Bibliographic
     * Ontology](http://bibliontology.com/), 'bibo'.
     *
     * @see http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_bibex
     */
     const BibExTerm = 'http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_bibex';

    /**
     * This class is based upon W3C DCAT work, and benefits from collaboration
     * around the DCAT, ADMS and VoID vocabularies. See
     * http://www.w3.org/wiki/WebSchemas/Datasets for full details and mappings.
     *
     * @see http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_DatasetClass
     */
     const DatasetClass = 'http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_DatasetClass';

    /**
     * This element is based on the work of the Financial Industry Business
     * Ontology project (see
     * [http://www.fibo.org/schema](http://www.fibo.org/schema) for details), in
     * support of the W3C Financial Industry Business Ontology Community Group
     * ([http://www.fibo.org/community](http://www.fibo.org/community)). Many
     * class and property definitions are inspired by or based on
     * [http://www.fibo.org](http://www.fibo.org).
     *
     * @see http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#FIBO
     */
     const FIBO = 'http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#FIBO';

    /**
     * The implementation and use of Legal Entity Identifier (LEI) is supported
     * by Global Legal Entity Identifier Foundation
     * [https://www.gleif.org](https://www.gleif.org).
     *
     * @see http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#GLEIF
     */
     const GLEIF = 'http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#GLEIF';

    /**
     * This class is derived from the GoodRelations Vocabulary for E-Commerce,
     * created by Martin Hepp. GoodRelations is a data model for sharing
     * e-commerce data on the Web that can be expressed in a variety of
     * syntaxes, including RDFa and HTML5 Microdata. More information about
     * GoodRelations can be found at
     * [http://purl.org/goodrelations/](http://purl.org/goodrelations/).
     *
     * @see http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsClass
     */
     const GoodRelationsClass = 'http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsClass';

    /**
     * This term
     * [uses](http://blog.schema.org/2012/11/good-relations-and-schemaorg.html)
     * terminology from the GoodRelations Vocabulary for E-Commerce, created by
     * Martin Hepp. GoodRelations is a data model for sharing e-commerce data on
     * the Web. More information about GoodRelations can be found at
     * [http://purl.org/goodrelations/](http://purl.org/goodrelations/).
     *
     * @see http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms
     */
     const GoodRelationsTerms = 'http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_GoodRelationsTerms';

    /**
     * This element is based on work by the Web Applications for the Future
     * Internet Lab, Institute of Informatics and Telematics, Pisa, Italy.
     *
     * @see http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#IIT-CNR.it
     */
     const IITCNRit = 'http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#IIT-CNR.it';

    /**
     * This class is based on the work of the LRMI project, see lrmi.net for
     * details.
     *
     * @see http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_LRMIClass
     */
     const LRMIClass = 'http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_LRMIClass';

    /**
     * This vocabulary was improved through collaboration with the MusicBrainz
     * project
     *     ([www.musicbrainz.org](http://www.musicbrainz.org)), and is partially
     * inspired by the MusicBrainz and
     *     [Music Ontology](http://musicontology.com/docs/getting-started.html)
     * schemas.
     *
     * @see http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#MBZ
     */
     const MBZ = 'http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#MBZ';

    /**
     * This element is based on the STI Accommodation Ontology, see <a
     * href="http://ontologies.sti-innsbruck.at/acco/ns.html">http://ontologies.sti-innsbruck.at/acco/ns.html</a>
     * for details.
     *     Many class and property definitions are inspired by or based on
     * abstracts from Wikipedia, the free encyclopedia.
     *
     * @see https://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#STI_Accommodation_Ontology
     */
     const STI_Accommodation_Ontology = 'https://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#STI_Accommodation_Ontology';

    /**
     * The Question/Answer types were [based
     * on](https://www.w3.org/wiki/WebSchemas/QASchemaResearch) the Stack
     * Overflow API.
     *
     * @see http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_QAStackExchange
     */
     const Stack_Exchange = 'http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_QAStackExchange';

    /**
     * This term and associated definitions draws upon the work of [The Trust
     * Project](http://thetrustproject.org/).
     *
     * @see https://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#TP-draws
     */
     const The_Trust_Project = 'https://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#TP-draws';

    /**
     * This element is based on the work of the [Tourism Structured Web Data
     * Community Group](https://www.w3.org/community/tourismdata).
     *
     * @see http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Tourism
     */
     const Tourism = 'http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#Tourism';

    /**
     * This class contains information contributed by
     * [http://wikidoc.org>WikiDoc](http://wikidoc.org>WikiDoc).
     *
     * @see http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_WikiDoc
     */
     const WikiDoc = 'http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_WikiDoc';

    /**
     * This class contains derivatives of IPTC rNews properties. rNews is a data
     * model of publishing metadata with serializations currently available for
     * RDFa as well as HTML5 Microdata. More information about the IPTC and
     * rNews can be found at [rnews.org](http://rnews.org).
     *
     * @see http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_rNews
     */
     const rNews = 'http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#source_rNews';

    /**
     * Physical address of the item.
     *
     * @param PostalAddress|PostalAddress[]|string|string[] $address
     *
     * @return static
     *
     * @see http://schema.org/address
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
     * Awards won by or for this item.
     *
     * @param string|string[] $awards
     *
     * @return static
     *
     * @see http://schema.org/awards
     */
    public function awards($awards)
    {
        return $this->setProperty('awards', $awards);
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
     * A contact point for a person or organization.
     *
     * @param ContactPoint|ContactPoint[] $contactPoint
     *
     * @return static
     *
     * @see http://schema.org/contactPoint
     */
    public function contactPoint($contactPoint)
    {
        return $this->setProperty('contactPoint', $contactPoint);
    }

    /**
     * A contact point for a person or organization.
     *
     * @param ContactPoint|ContactPoint[] $contactPoints
     *
     * @return static
     *
     * @see http://schema.org/contactPoints
     */
    public function contactPoints($contactPoints)
    {
        return $this->setProperty('contactPoints', $contactPoints);
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
     * @see http://schema.org/department
     */
    public function department($department)
    {
        return $this->setProperty('department', $department);
    }

    /**
     * The date that this organization was dissolved.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dissolutionDate
     *
     * @return static
     *
     * @see http://schema.org/dissolutionDate
     */
    public function dissolutionDate($dissolutionDate)
    {
        return $this->setProperty('dissolutionDate', $dissolutionDate);
    }

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or
     * business person.
     *
     * @param string|string[] $duns
     *
     * @return static
     *
     * @see http://schema.org/duns
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
     * @see http://schema.org/email
     */
    public function email($email)
    {
        return $this->setProperty('email', $email);
    }

    /**
     * Someone working for this organization.
     *
     * @param Person|Person[] $employee
     *
     * @return static
     *
     * @see http://schema.org/employee
     */
    public function employee($employee)
    {
        return $this->setProperty('employee', $employee);
    }

    /**
     * People working for this organization.
     *
     * @param Person|Person[] $employees
     *
     * @return static
     *
     * @see http://schema.org/employees
     */
    public function employees($employees)
    {
        return $this->setProperty('employees', $employees);
    }

    /**
     * Upcoming or past event associated with this place, organization, or
     * action.
     *
     * @param Event|Event[] $event
     *
     * @return static
     *
     * @see http://schema.org/event
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
     * @see http://schema.org/events
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
     * @see http://schema.org/faxNumber
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
     * @see http://schema.org/founder
     */
    public function founder($founder)
    {
        return $this->setProperty('founder', $founder);
    }

    /**
     * A person who founded this organization.
     *
     * @param Person|Person[] $founders
     *
     * @return static
     *
     * @see http://schema.org/founders
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
     * @see http://schema.org/foundingDate
     */
    public function foundingDate($foundingDate)
    {
        return $this->setProperty('foundingDate', $foundingDate);
    }

    /**
     * The place where the Organization was founded.
     *
     * @param Place|Place[] $foundingLocation
     *
     * @return static
     *
     * @see http://schema.org/foundingLocation
     */
    public function foundingLocation($foundingLocation)
    {
        return $this->setProperty('foundingLocation', $foundingLocation);
    }

    /**
     * A person or organization that supports (sponsors) something through some
     * kind of financial contribution.
     *
     * @param Organization|Organization[]|Person|Person[] $funder
     *
     * @return static
     *
     * @see http://schema.org/funder
     */
    public function funder($funder)
    {
        return $this->setProperty('funder', $funder);
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
     * @see http://schema.org/globalLocationNumber
     */
    public function globalLocationNumber($globalLocationNumber)
    {
        return $this->setProperty('globalLocationNumber', $globalLocationNumber);
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
     * Points-of-Sales operated by the organization or person.
     *
     * @param Place|Place[] $hasPOS
     *
     * @return static
     *
     * @see http://schema.org/hasPOS
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
     * @see http://schema.org/isicV4
     */
    public function isicV4($isicV4)
    {
        return $this->setProperty('isicV4', $isicV4);
    }

    /**
     * The official name of the organization, e.g. the registered company name.
     *
     * @param string|string[] $legalName
     *
     * @return static
     *
     * @see http://schema.org/legalName
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
     * @see http://schema.org/leiCode
     */
    public function leiCode($leiCode)
    {
        return $this->setProperty('leiCode', $leiCode);
    }

    /**
     * The location of for example where the event is happening, an organization
     * is located, or where an action takes place.
     *
     * @param Place|Place[]|PostalAddress|PostalAddress[]|string|string[] $location
     *
     * @return static
     *
     * @see http://schema.org/location
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
     * @see http://schema.org/logo
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
     * @see http://schema.org/makesOffer
     */
    public function makesOffer($makesOffer)
    {
        return $this->setProperty('makesOffer', $makesOffer);
    }

    /**
     * A member of an Organization or a ProgramMembership. Organizations can be
     * members of organizations; ProgramMembership is typically for individuals.
     *
     * @param Organization|Organization[]|Person|Person[] $member
     *
     * @return static
     *
     * @see http://schema.org/member
     */
    public function member($member)
    {
        return $this->setProperty('member', $member);
    }

    /**
     * An Organization (or ProgramMembership) to which this Person or
     * Organization belongs.
     *
     * @param Organization|Organization[]|ProgramMembership|ProgramMembership[] $memberOf
     *
     * @return static
     *
     * @see http://schema.org/memberOf
     */
    public function memberOf($memberOf)
    {
        return $this->setProperty('memberOf', $memberOf);
    }

    /**
     * A member of this organization.
     *
     * @param Organization|Organization[]|Person|Person[] $members
     *
     * @return static
     *
     * @see http://schema.org/members
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
     * @see http://schema.org/naics
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
     * @see http://schema.org/numberOfEmployees
     */
    public function numberOfEmployees($numberOfEmployees)
    {
        return $this->setProperty('numberOfEmployees', $numberOfEmployees);
    }

    /**
     * A pointer to the organization or person making the offer.
     *
     * @param Offer|Offer[]|Person|Person[] $offeredBy
     *
     * @return static
     *
     * @see http://schema.org/offeredBy
     */
    public function offeredBy($offeredBy)
    {
        return $this->setProperty('offeredBy', $offeredBy);
    }

    /**
     * Products owned by the organization or person.
     *
     * @param OwnershipInfo|OwnershipInfo[]|Product|Product[] $owns
     *
     * @return static
     *
     * @see http://schema.org/owns
     */
    public function owns($owns)
    {
        return $this->setProperty('owns', $owns);
    }

    /**
     * The larger organization that this organization is a [[subOrganization]]
     * of, if any.
     *
     * @param Organization|Organization[] $parentOrganization
     *
     * @return static
     *
     * @see http://schema.org/parentOrganization
     */
    public function parentOrganization($parentOrganization)
    {
        return $this->setProperty('parentOrganization', $parentOrganization);
    }

    /**
     * The publishingPrinciples property indicates (typically via [[URL]]) a
     * document describing the editorial principles of an [[Organization]] (or
     * individual e.g. a [[Person]] writing a blog) that relate to their
     * activities as a publisher, e.g. ethics or diversity policies. When
     * applied to a [[CreativeWork]] (e.g. [[NewsArticle]]) the principles are
     * those of the party primarily responsible for the creation of the
     * [[CreativeWork]].
     * 
     * While such policies are most typically expressed in natural language,
     * sometimes related information (e.g. indicating a [[funder]]) can be
     * expressed using schema.org terminology.
     *
     * @param CreativeWork|CreativeWork[]|string|string[] $publishingPrinciples
     *
     * @return static
     *
     * @see http://schema.org/publishingPrinciples
     */
    public function publishingPrinciples($publishingPrinciples)
    {
        return $this->setProperty('publishingPrinciples', $publishingPrinciples);
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
     * Review of the item.
     *
     * @param Review|Review[] $reviews
     *
     * @return static
     *
     * @see http://schema.org/reviews
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
     * @see http://schema.org/seeks
     */
    public function seeks($seeks)
    {
        return $this->setProperty('seeks', $seeks);
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
     * A person or organization that supports a thing through a pledge, promise,
     * or financial contribution. e.g. a sponsor of a Medical Study or a
     * corporate sponsor of an event.
     *
     * @param Organization|Organization[]|Person|Person[] $sponsor
     *
     * @return static
     *
     * @see http://schema.org/sponsor
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
     * @param Organization|Organization[] $subOrganization
     *
     * @return static
     *
     * @see http://schema.org/subOrganization
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
     * @see http://schema.org/taxID
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
     * @see http://schema.org/telephone
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
     * @see http://schema.org/vatID
     */
    public function vatID($vatID)
    {
        return $this->setProperty('vatID', $vatID);
    }

}
