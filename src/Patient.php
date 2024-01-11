<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\AudienceContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\MedicalAudienceContract;
use Spatie\SchemaOrg\Contracts\PatientContract;
use Spatie\SchemaOrg\Contracts\PeopleAudienceContract;
use Spatie\SchemaOrg\Contracts\PersonContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A patient is any person recipient of health care services.
 *
 * @see https://schema.org/Patient
 * @see https://health-lifesci.schema.org
 *
 */
class Patient extends BaseType implements PatientContract, AudienceContract, IntangibleContract, MedicalAudienceContract, PeopleAudienceContract, PersonContract, ThingContract
{
    /**
     * An additional name for a Person, can be used for a middle name.
     *
     * @param string|string[] $additionalName
     *
     * @return static
     *
     * @see https://schema.org/additionalName
     */
    public function additionalName($additionalName)
    {
        return $this->setProperty('additionalName', $additionalName);
    }

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
     * An organization that this person is affiliated with. For example, a
     * school/university, a club, or a team.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $affiliation
     *
     * @return static
     *
     * @see https://schema.org/affiliation
     */
    public function affiliation($affiliation)
    {
        return $this->setProperty('affiliation', $affiliation);
    }

    /**
     * The number of completed interactions for this entity, in a particular
     * role (the 'agent'), in a particular action (indicated in the statistic),
     * and in a particular context (i.e. interactionService).
     *
     * @param \Spatie\SchemaOrg\Contracts\InteractionCounterContract|\Spatie\SchemaOrg\Contracts\InteractionCounterContract[] $agentInteractionStatistic
     *
     * @return static
     *
     * @see https://schema.org/agentInteractionStatistic
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2858
     */
    public function agentInteractionStatistic($agentInteractionStatistic)
    {
        return $this->setProperty('agentInteractionStatistic', $agentInteractionStatistic);
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
     * An organization that the person is an alumni of.
     *
     * @param \Spatie\SchemaOrg\Contracts\EducationalOrganizationContract|\Spatie\SchemaOrg\Contracts\EducationalOrganizationContract[]|\Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $alumniOf
     *
     * @return static
     *
     * @see https://schema.org/alumniOf
     */
    public function alumniOf($alumniOf)
    {
        return $this->setProperty('alumniOf', $alumniOf);
    }

    /**
     * The target group associated with a given audience (e.g. veterans, car
     * owners, musicians, etc.).
     *
     * @param string|string[] $audienceType
     *
     * @return static
     *
     * @see https://schema.org/audienceType
     */
    public function audienceType($audienceType)
    {
        return $this->setProperty('audienceType', $audienceType);
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
     * Date of birth.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $birthDate
     *
     * @return static
     *
     * @see https://schema.org/birthDate
     */
    public function birthDate($birthDate)
    {
        return $this->setProperty('birthDate', $birthDate);
    }

    /**
     * The place where the person was born.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $birthPlace
     *
     * @return static
     *
     * @see https://schema.org/birthPlace
     */
    public function birthPlace($birthPlace)
    {
        return $this->setProperty('birthPlace', $birthPlace);
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
     * A [callsign](https://en.wikipedia.org/wiki/Call_sign), as used in
     * broadcasting and radio communications to identify people, radio and TV
     * stations, or vehicles.
     *
     * @param string|string[] $callSign
     *
     * @return static
     *
     * @see https://schema.org/callSign
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2109
     */
    public function callSign($callSign)
    {
        return $this->setProperty('callSign', $callSign);
    }

    /**
     * A child of the person.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $children
     *
     * @return static
     *
     * @see https://schema.org/children
     */
    public function children($children)
    {
        return $this->setProperty('children', $children);
    }

    /**
     * A colleague of the person.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[]|string|string[] $colleague
     *
     * @return static
     *
     * @see https://schema.org/colleague
     */
    public function colleague($colleague)
    {
        return $this->setProperty('colleague', $colleague);
    }

    /**
     * A colleague of the person.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $colleagues
     *
     * @return static
     *
     * @see https://schema.org/colleagues
     */
    public function colleagues($colleagues)
    {
        return $this->setProperty('colleagues', $colleagues);
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
     * Date of death.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $deathDate
     *
     * @return static
     *
     * @see https://schema.org/deathDate
     */
    public function deathDate($deathDate)
    {
        return $this->setProperty('deathDate', $deathDate);
    }

    /**
     * The place where the person died.
     *
     * @param \Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $deathPlace
     *
     * @return static
     *
     * @see https://schema.org/deathPlace
     */
    public function deathPlace($deathPlace)
    {
        return $this->setProperty('deathPlace', $deathPlace);
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
     * One or more alternative conditions considered in the differential
     * diagnosis process as output of a diagnosis process.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalConditionContract|\Spatie\SchemaOrg\Contracts\MedicalConditionContract[] $diagnosis
     *
     * @return static
     *
     * @see https://schema.org/diagnosis
     * @see https://health-lifesci.schema.org
     */
    public function diagnosis($diagnosis)
    {
        return $this->setProperty('diagnosis', $diagnosis);
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
     * Specifying a drug or medicine used in a medication procedure.
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugContract|\Spatie\SchemaOrg\Contracts\DrugContract[] $drug
     *
     * @return static
     *
     * @see https://schema.org/drug
     * @see https://health-lifesci.schema.org
     */
    public function drug($drug)
    {
        return $this->setProperty('drug', $drug);
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
     * Family name. In the U.S., the last name of a Person.
     *
     * @param string|string[] $familyName
     *
     * @return static
     *
     * @see https://schema.org/familyName
     */
    public function familyName($familyName)
    {
        return $this->setProperty('familyName', $familyName);
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
     * The most generic uni-directional social relation.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $follows
     *
     * @return static
     *
     * @see https://schema.org/follows
     */
    public function follows($follows)
    {
        return $this->setProperty('follows', $follows);
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
     * @link https://github.com/schemaorg/schemaorg/issues/383
     */
    public function funding($funding)
    {
        return $this->setProperty('funding', $funding);
    }

    /**
     * Gender of something, typically a [[Person]], but possibly also fictional
     * characters, animals, etc. While https://schema.org/Male and
     * https://schema.org/Female may be used, text strings are also acceptable
     * for people who do not identify as a binary gender. The [[gender]]
     * property can also be used in an extended sense to cover e.g. the gender
     * of sports teams. As with the gender of individuals, we do not try to
     * enumerate all possibilities. A mixed-gender [[SportsTeam]] can be
     * indicated with a text value of "Mixed".
     *
     * @param \Spatie\SchemaOrg\Contracts\GenderTypeContract|\Spatie\SchemaOrg\Contracts\GenderTypeContract[]|string|string[] $gender
     *
     * @return static
     *
     * @see https://schema.org/gender
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2341
     */
    public function gender($gender)
    {
        return $this->setProperty('gender', $gender);
    }

    /**
     * The geographic area associated with the audience.
     *
     * @param \Spatie\SchemaOrg\Contracts\AdministrativeAreaContract|\Spatie\SchemaOrg\Contracts\AdministrativeAreaContract[] $geographicArea
     *
     * @return static
     *
     * @see https://schema.org/geographicArea
     */
    public function geographicArea($geographicArea)
    {
        return $this->setProperty('geographicArea', $geographicArea);
    }

    /**
     * Given name. In the U.S., the first name of a Person.
     *
     * @param string|string[] $givenName
     *
     * @return static
     *
     * @see https://schema.org/givenName
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
     * @param string|string[] $globalLocationNumber
     *
     * @return static
     *
     * @see https://schema.org/globalLocationNumber
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
     * The Person's occupation. For past professions, use Role for expressing
     * dates.
     *
     * @param \Spatie\SchemaOrg\Contracts\OccupationContract|\Spatie\SchemaOrg\Contracts\OccupationContract[] $hasOccupation
     *
     * @return static
     *
     * @see https://schema.org/hasOccupation
     * @link https://github.com/schemaorg/schemaorg/issues/1698
     */
    public function hasOccupation($hasOccupation)
    {
        return $this->setProperty('hasOccupation', $hasOccupation);
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
     */
    public function hasPOS($hasPOS)
    {
        return $this->setProperty('hasPOS', $hasPOS);
    }

    /**
     * Specifying the health condition(s) of a patient, medical study, or other
     * target audience.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalConditionContract|\Spatie\SchemaOrg\Contracts\MedicalConditionContract[] $healthCondition
     *
     * @return static
     *
     * @see https://schema.org/healthCondition
     * @see https://health-lifesci.schema.org
     */
    public function healthCondition($healthCondition)
    {
        return $this->setProperty('healthCondition', $healthCondition);
    }

    /**
     * The height of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\DistanceContract|\Spatie\SchemaOrg\Contracts\DistanceContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $height
     *
     * @return static
     *
     * @see https://schema.org/height
     */
    public function height($height)
    {
        return $this->setProperty('height', $height);
    }

    /**
     * A contact location for a person's residence.
     *
     * @param \Spatie\SchemaOrg\Contracts\ContactPointContract|\Spatie\SchemaOrg\Contracts\ContactPointContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $homeLocation
     *
     * @return static
     *
     * @see https://schema.org/homeLocation
     */
    public function homeLocation($homeLocation)
    {
        return $this->setProperty('homeLocation', $homeLocation);
    }

    /**
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     *
     * @param string|string[] $honorificPrefix
     *
     * @return static
     *
     * @see https://schema.org/honorificPrefix
     */
    public function honorificPrefix($honorificPrefix)
    {
        return $this->setProperty('honorificPrefix', $honorificPrefix);
    }

    /**
     * An honorific suffix following a Person's name such as M.D./PhD/MSCSW.
     *
     * @param string|string[] $honorificSuffix
     *
     * @return static
     *
     * @see https://schema.org/honorificSuffix
     */
    public function honorificSuffix($honorificSuffix)
    {
        return $this->setProperty('honorificSuffix', $honorificSuffix);
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
     * The International Standard of Industrial Classification of All Economic
     * Activities (ISIC), Revision 4 code for a particular organization,
     * business person, or place.
     *
     * @param string|string[] $isicV4
     *
     * @return static
     *
     * @see https://schema.org/isicV4
     */
    public function isicV4($isicV4)
    {
        return $this->setProperty('isicV4', $isicV4);
    }

    /**
     * The job title of the person (for example, Financial Manager).
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $jobTitle
     *
     * @return static
     *
     * @see https://schema.org/jobTitle
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2192
     */
    public function jobTitle($jobTitle)
    {
        return $this->setProperty('jobTitle', $jobTitle);
    }

    /**
     * The most generic bi-directional social/work relation.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $knows
     *
     * @return static
     *
     * @see https://schema.org/knows
     */
    public function knows($knows)
    {
        return $this->setProperty('knows', $knows);
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
     * @link https://github.com/schemaorg/schemaorg/issues/1688
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
     * @link https://github.com/schemaorg/schemaorg/issues/1688
     */
    public function knowsLanguage($knowsLanguage)
    {
        return $this->setProperty('knowsLanguage', $knowsLanguage);
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
     */
    public function makesOffer($makesOffer)
    {
        return $this->setProperty('makesOffer', $makesOffer);
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
     * The North American Industry Classification System (NAICS) code for a
     * particular organization or business person.
     *
     * @param string|string[] $naics
     *
     * @return static
     *
     * @see https://schema.org/naics
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
     * Nationality of the person.
     *
     * @param \Spatie\SchemaOrg\Contracts\CountryContract|\Spatie\SchemaOrg\Contracts\CountryContract[] $nationality
     *
     * @return static
     *
     * @see https://schema.org/nationality
     */
    public function nationality($nationality)
    {
        return $this->setProperty('nationality', $nationality);
    }

    /**
     * The total financial value of the person as calculated by subtracting
     * assets from liabilities.
     *
     * @param \Spatie\SchemaOrg\Contracts\MonetaryAmountContract|\Spatie\SchemaOrg\Contracts\MonetaryAmountContract[]|\Spatie\SchemaOrg\Contracts\PriceSpecificationContract|\Spatie\SchemaOrg\Contracts\PriceSpecificationContract[] $netWorth
     *
     * @return static
     *
     * @see https://schema.org/netWorth
     */
    public function netWorth($netWorth)
    {
        return $this->setProperty('netWorth', $netWorth);
    }

    /**
     * Products owned by the organization or person.
     *
     * @param \Spatie\SchemaOrg\Contracts\OwnershipInfoContract|\Spatie\SchemaOrg\Contracts\OwnershipInfoContract[]|\Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[] $owns
     *
     * @return static
     *
     * @see https://schema.org/owns
     */
    public function owns($owns)
    {
        return $this->setProperty('owns', $owns);
    }

    /**
     * A parent of this person.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $parent
     *
     * @return static
     *
     * @see https://schema.org/parent
     */
    public function parent($parent)
    {
        return $this->setProperty('parent', $parent);
    }

    /**
     * A parents of the person.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $parents
     *
     * @return static
     *
     * @see https://schema.org/parents
     */
    public function parents($parents)
    {
        return $this->setProperty('parents', $parents);
    }

    /**
     * Event that this person is a performer or participant in.
     *
     * @param \Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $performerIn
     *
     * @return static
     *
     * @see https://schema.org/performerIn
     */
    public function performerIn($performerIn)
    {
        return $this->setProperty('performerIn', $performerIn);
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
     * The most generic familial relation.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $relatedTo
     *
     * @return static
     *
     * @see https://schema.org/relatedTo
     */
    public function relatedTo($relatedTo)
    {
        return $this->setProperty('relatedTo', $relatedTo);
    }

    /**
     * Audiences defined by a person's gender.
     *
     * @param string|string[] $requiredGender
     *
     * @return static
     *
     * @see https://schema.org/requiredGender
     */
    public function requiredGender($requiredGender)
    {
        return $this->setProperty('requiredGender', $requiredGender);
    }

    /**
     * Audiences defined by a person's maximum age.
     *
     * @param int|int[] $requiredMaxAge
     *
     * @return static
     *
     * @see https://schema.org/requiredMaxAge
     */
    public function requiredMaxAge($requiredMaxAge)
    {
        return $this->setProperty('requiredMaxAge', $requiredMaxAge);
    }

    /**
     * Audiences defined by a person's minimum age.
     *
     * @param int|int[] $requiredMinAge
     *
     * @return static
     *
     * @see https://schema.org/requiredMinAge
     */
    public function requiredMinAge($requiredMinAge)
    {
        return $this->setProperty('requiredMinAge', $requiredMinAge);
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
     */
    public function seeks($seeks)
    {
        return $this->setProperty('seeks', $seeks);
    }

    /**
     * A sibling of the person.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $sibling
     *
     * @return static
     *
     * @see https://schema.org/sibling
     */
    public function sibling($sibling)
    {
        return $this->setProperty('sibling', $sibling);
    }

    /**
     * A sibling of the person.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $siblings
     *
     * @return static
     *
     * @see https://schema.org/siblings
     */
    public function siblings($siblings)
    {
        return $this->setProperty('siblings', $siblings);
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
     * The person's spouse.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $spouse
     *
     * @return static
     *
     * @see https://schema.org/spouse
     */
    public function spouse($spouse)
    {
        return $this->setProperty('spouse', $spouse);
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
     * The age or age range for the intended audience or person, for example
     * 3-12 months for infants, 1-5 years for toddlers.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $suggestedAge
     *
     * @return static
     *
     * @see https://schema.org/suggestedAge
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public function suggestedAge($suggestedAge)
    {
        return $this->setProperty('suggestedAge', $suggestedAge);
    }

    /**
     * The suggested gender of the intended person or audience, for example
     * "male", "female", or "unisex".
     *
     * @param \Spatie\SchemaOrg\Contracts\GenderTypeContract|\Spatie\SchemaOrg\Contracts\GenderTypeContract[]|string|string[] $suggestedGender
     *
     * @return static
     *
     * @see https://schema.org/suggestedGender
     */
    public function suggestedGender($suggestedGender)
    {
        return $this->setProperty('suggestedGender', $suggestedGender);
    }

    /**
     * Maximum recommended age in years for the audience or user.
     *
     * @param float|float[]|int|int[] $suggestedMaxAge
     *
     * @return static
     *
     * @see https://schema.org/suggestedMaxAge
     */
    public function suggestedMaxAge($suggestedMaxAge)
    {
        return $this->setProperty('suggestedMaxAge', $suggestedMaxAge);
    }

    /**
     * A suggested range of body measurements for the intended audience or
     * person, for example inseam between 32 and 34 inches or height between 170
     * and 190 cm. Typically found on a size chart for wearable products.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $suggestedMeasurement
     *
     * @return static
     *
     * @see https://schema.org/suggestedMeasurement
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public function suggestedMeasurement($suggestedMeasurement)
    {
        return $this->setProperty('suggestedMeasurement', $suggestedMeasurement);
    }

    /**
     * Minimum recommended age in years for the audience or user.
     *
     * @param float|float[]|int|int[] $suggestedMinAge
     *
     * @return static
     *
     * @see https://schema.org/suggestedMinAge
     */
    public function suggestedMinAge($suggestedMinAge)
    {
        return $this->setProperty('suggestedMinAge', $suggestedMinAge);
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
     */
    public function vatID($vatID)
    {
        return $this->setProperty('vatID', $vatID);
    }

    /**
     * The weight of the product or person.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $weight
     *
     * @return static
     *
     * @see https://schema.org/weight
     */
    public function weight($weight)
    {
        return $this->setProperty('weight', $weight);
    }

    /**
     * A contact location for a person's place of work.
     *
     * @param \Spatie\SchemaOrg\Contracts\ContactPointContract|\Spatie\SchemaOrg\Contracts\ContactPointContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $workLocation
     *
     * @return static
     *
     * @see https://schema.org/workLocation
     */
    public function workLocation($workLocation)
    {
        return $this->setProperty('workLocation', $workLocation);
    }

    /**
     * Organizations that the person works for.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $worksFor
     *
     * @return static
     *
     * @see https://schema.org/worksFor
     */
    public function worksFor($worksFor)
    {
        return $this->setProperty('worksFor', $worksFor);
    }
}
