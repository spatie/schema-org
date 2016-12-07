<?php

namespace Spatie\SchemaOrg;

/**
 * A person (alive, dead, undead, or fictional).
 *
 * @see http://schema.org/Person
 */
class Person extends Thing
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
     * An additional name for a Person, can be used for a middle name.
     *
     * @param string $additionalName
     *
     * @return static
     *
     * @see http://schema.org/additionalName
     */
    public function additionalName($additionalName)
    {
        return $this->setProperty('additionalName', $additionalName);
    }

    /**
     * Physical address of the item.
     *
     * @param \Spatie\SchemaOrg\PostalAddress|string $address
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
     * An organization that this person is affiliated with. For example, a
     * school/university, a club, or a team.
     *
     * @param \Spatie\SchemaOrg\Organization $affiliation
     *
     * @return static
     *
     * @see http://schema.org/affiliation
     */
    public function affiliation($affiliation)
    {
        return $this->setProperty('affiliation', $affiliation);
    }

    /**
     * An organization that the person is an alumni of.
     *
     * @param \Spatie\SchemaOrg\EducationalOrganization $alumniOf
     *
     * @return static
     *
     * @see http://schema.org/alumniOf
     */
    public function alumniOf($alumniOf)
    {
        return $this->setProperty('alumniOf', $alumniOf);
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
     * Awards won by or for this item.
     *
     * @param string $awards
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
     * Date of birth.
     *
     * @param \DateTimeInterface $birthDate
     *
     * @return static
     *
     * @see http://schema.org/birthDate
     */
    public function birthDate($birthDate)
    {
        return $this->setProperty('birthDate', $birthDate);
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
     * A child of the person.
     *
     * @param \Spatie\SchemaOrg\Person $children
     *
     * @return static
     *
     * @see http://schema.org/children
     */
    public function children($children)
    {
        return $this->setProperty('children', $children);
    }

    /**
     * A colleague of the person.
     *
     * @param \Spatie\SchemaOrg\Person|string $colleague
     *
     * @return static
     *
     * @see http://schema.org/colleague
     */
    public function colleague($colleague)
    {
        return $this->setProperty('colleague', $colleague);
    }

    /**
     * A colleague of the person.
     *
     * @param \Spatie\SchemaOrg\Person $colleagues
     *
     * @return static
     *
     * @see http://schema.org/colleagues
     */
    public function colleagues($colleagues)
    {
        return $this->setProperty('colleagues', $colleagues);
    }

    /**
     * A contact point for a person or organization.
     *
     * @param \Spatie\SchemaOrg\ContactPoint $contactPoint
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
     * @param \Spatie\SchemaOrg\ContactPoint $contactPoints
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
     * Date of death.
     *
     * @param \DateTimeInterface $deathDate
     *
     * @return static
     *
     * @see http://schema.org/deathDate
     */
    public function deathDate($deathDate)
    {
        return $this->setProperty('deathDate', $deathDate);
    }

    /**
     * The Dun & Bradstreet DUNS number for identifying an organization or
     * business person.
     *
     * @param string $duns
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
     * @param string $email
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
     * Family name. In the U.S., the last name of an Person. This can be used
     * along with givenName instead of the name property.
     *
     * @param string $familyName
     *
     * @return static
     *
     * @see http://schema.org/familyName
     */
    public function familyName($familyName)
    {
        return $this->setProperty('familyName', $familyName);
    }

    /**
     * The fax number.
     *
     * @param string $faxNumber
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
     * The most generic uni-directional social relation.
     *
     * @param \Spatie\SchemaOrg\Person $follows
     *
     * @return static
     *
     * @see http://schema.org/follows
     */
    public function follows($follows)
    {
        return $this->setProperty('follows', $follows);
    }

    /**
     * Gender of the person. While http://schema.org/Male and
     * http://schema.org/Female may be used, text strings are also acceptable
     * for people who do not identify as a binary gender.
     *
     * @param string|\Spatie\SchemaOrg\GenderType $gender
     *
     * @return static
     *
     * @see http://schema.org/gender
     */
    public function gender($gender)
    {
        return $this->setProperty('gender', $gender);
    }

    /**
     * Given name. In the U.S., the first name of a Person. This can be used
     * along with familyName instead of the name property.
     *
     * @param string $givenName
     *
     * @return static
     *
     * @see http://schema.org/givenName
     */
    public function givenName($givenName)
    {
        return $this->setProperty('givenName', $givenName);
    }

    /**
     * The [Global Location Number](http://www.gs1.org/gln) (GLN, sometimes also
     * referred to as International Location Number or ILN) of the respective
     * organization, person, or place. The GLN is a 13-digit number used to
     * identify parties and physical locations.
     *
     * @param string $globalLocationNumber
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
     * Points-of-Sales operated by the organization or person.
     *
     * @param \Spatie\SchemaOrg\Place $hasPOS
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
     * The height of the item.
     *
     * @param \Spatie\SchemaOrg\Distance|\Spatie\SchemaOrg\QuantitativeValue $height
     *
     * @return static
     *
     * @see http://schema.org/height
     */
    public function height($height)
    {
        return $this->setProperty('height', $height);
    }

    /**
     * A contact location for a person's residence.
     *
     * @param \Spatie\SchemaOrg\ContactPoint|\Spatie\SchemaOrg\Place $homeLocation
     *
     * @return static
     *
     * @see http://schema.org/homeLocation
     */
    public function homeLocation($homeLocation)
    {
        return $this->setProperty('homeLocation', $homeLocation);
    }

    /**
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     *
     * @param string $honorificPrefix
     *
     * @return static
     *
     * @see http://schema.org/honorificPrefix
     */
    public function honorificPrefix($honorificPrefix)
    {
        return $this->setProperty('honorificPrefix', $honorificPrefix);
    }

    /**
     * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
     *
     * @param string $honorificSuffix
     *
     * @return static
     *
     * @see http://schema.org/honorificSuffix
     */
    public function honorificSuffix($honorificSuffix)
    {
        return $this->setProperty('honorificSuffix', $honorificSuffix);
    }

    /**
     * The International Standard of Industrial Classification of All Economic
     * Activities (ISIC), Revision 4 code for a particular organization,
     * business person, or place.
     *
     * @param string $isicV4
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
     * The job title of the person (for example, Financial Manager).
     *
     * @param string $jobTitle
     *
     * @return static
     *
     * @see http://schema.org/jobTitle
     */
    public function jobTitle($jobTitle)
    {
        return $this->setProperty('jobTitle', $jobTitle);
    }

    /**
     * The most generic bi-directional social/work relation.
     *
     * @param \Spatie\SchemaOrg\Person $knows
     *
     * @return static
     *
     * @see http://schema.org/knows
     */
    public function knows($knows)
    {
        return $this->setProperty('knows', $knows);
    }

    /**
     * A pointer to products or services offered by the organization or person.
     *
     * @param \Spatie\SchemaOrg\Offer $makesOffer
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
     * An Organization (or ProgramMembership) to which this Person or
     * Organization belongs.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\ProgramMembership $memberOf
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
     * The North American Industry Classification System (NAICS) code for a
     * particular organization or business person.
     *
     * @param string $naics
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
     * Nationality of the person.
     *
     * @param \Spatie\SchemaOrg\Country $nationality
     *
     * @return static
     *
     * @see http://schema.org/nationality
     */
    public function nationality($nationality)
    {
        return $this->setProperty('nationality', $nationality);
    }

    /**
     * The total financial value of the person as calculated by subtracting
     * assets from liabilities.
     *
     * @param \Spatie\SchemaOrg\PriceSpecification|\Spatie\SchemaOrg\MonetaryAmount $netWorth
     *
     * @return static
     *
     * @see http://schema.org/netWorth
     */
    public function netWorth($netWorth)
    {
        return $this->setProperty('netWorth', $netWorth);
    }

    /**
     * Products owned by the organization or person.
     *
     * @param \Spatie\SchemaOrg\OwnershipInfo|\Spatie\SchemaOrg\Product $owns
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
     * A parent of this person.
     *
     * @param \Spatie\SchemaOrg\Person $parent
     *
     * @return static
     *
     * @see http://schema.org/parent
     */
    public function parent($parent)
    {
        return $this->setProperty('parent', $parent);
    }

    /**
     * A parents of the person.
     *
     * @param \Spatie\SchemaOrg\Person $parents
     *
     * @return static
     *
     * @see http://schema.org/parents
     */
    public function parents($parents)
    {
        return $this->setProperty('parents', $parents);
    }

    /**
     * Event that this person is a performer or participant in.
     *
     * @param \Spatie\SchemaOrg\Event $performerIn
     *
     * @return static
     *
     * @see http://schema.org/performerIn
     */
    public function performerIn($performerIn)
    {
        return $this->setProperty('performerIn', $performerIn);
    }

    /**
     * The most generic familial relation.
     *
     * @param \Spatie\SchemaOrg\Person $relatedTo
     *
     * @return static
     *
     * @see http://schema.org/relatedTo
     */
    public function relatedTo($relatedTo)
    {
        return $this->setProperty('relatedTo', $relatedTo);
    }

    /**
     * A pointer to products or services sought by the organization or person
     * (demand).
     *
     * @param \Spatie\SchemaOrg\Demand $seeks
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
     * A sibling of the person.
     *
     * @param \Spatie\SchemaOrg\Person $sibling
     *
     * @return static
     *
     * @see http://schema.org/sibling
     */
    public function sibling($sibling)
    {
        return $this->setProperty('sibling', $sibling);
    }

    /**
     * A sibling of the person.
     *
     * @param \Spatie\SchemaOrg\Person $siblings
     *
     * @return static
     *
     * @see http://schema.org/siblings
     */
    public function siblings($siblings)
    {
        return $this->setProperty('siblings', $siblings);
    }

    /**
     * A person or organization that supports a thing through a pledge, promise,
     * or financial contribution. e.g. a sponsor of a Medical Study or a
     * corporate sponsor of an event.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $sponsor
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
     * A person or organization that supports (sponsors) something through some
     * kind of financial contribution.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $funder
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
     * The person's spouse.
     *
     * @param \Spatie\SchemaOrg\Person $spouse
     *
     * @return static
     *
     * @see http://schema.org/spouse
     */
    public function spouse($spouse)
    {
        return $this->setProperty('spouse', $spouse);
    }

    /**
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US
     * or the CIF/NIF in Spain.
     *
     * @param string $taxID
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
     * @param string $telephone
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
     * @param string $vatID
     *
     * @return static
     *
     * @see http://schema.org/vatID
     */
    public function vatID($vatID)
    {
        return $this->setProperty('vatID', $vatID);
    }

    /**
     * The weight of the product or person.
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue $weight
     *
     * @return static
     *
     * @see http://schema.org/weight
     */
    public function weight($weight)
    {
        return $this->setProperty('weight', $weight);
    }

    /**
     * A contact location for a person's place of work.
     *
     * @param \Spatie\SchemaOrg\ContactPoint|\Spatie\SchemaOrg\Place $workLocation
     *
     * @return static
     *
     * @see http://schema.org/workLocation
     */
    public function workLocation($workLocation)
    {
        return $this->setProperty('workLocation', $workLocation);
    }

    /**
     * Organizations that the person works for.
     *
     * @param \Spatie\SchemaOrg\Organization $worksFor
     *
     * @return static
     *
     * @see http://schema.org/worksFor
     */
    public function worksFor($worksFor)
    {
        return $this->setProperty('worksFor', $worksFor);
    }

    /**
     * The place where the person was born.
     *
     * @param \Spatie\SchemaOrg\Place $birthPlace
     *
     * @return static
     *
     * @see http://schema.org/birthPlace
     */
    public function birthPlace($birthPlace)
    {
        return $this->setProperty('birthPlace', $birthPlace);
    }

    /**
     * The place where the person died.
     *
     * @param \Spatie\SchemaOrg\Place $deathPlace
     *
     * @return static
     *
     * @see http://schema.org/deathPlace
     */
    public function deathPlace($deathPlace)
    {
        return $this->setProperty('deathPlace', $deathPlace);
    }

}
