<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\ActionContract;
use \Spatie\SchemaOrg\Contracts\ActionStatusTypeContract;
use \Spatie\SchemaOrg\Contracts\CreativeWorkContract;
use \Spatie\SchemaOrg\Contracts\EntryPointContract;
use \Spatie\SchemaOrg\Contracts\EventContract;
use \Spatie\SchemaOrg\Contracts\ImageObjectContract;
use \Spatie\SchemaOrg\Contracts\InteractActionContract;
use \Spatie\SchemaOrg\Contracts\OrganizationContract;
use \Spatie\SchemaOrg\Contracts\PersonContract;
use \Spatie\SchemaOrg\Contracts\PlaceContract;
use \Spatie\SchemaOrg\Contracts\PostalAddressContract;
use \Spatie\SchemaOrg\Contracts\PropertyValueContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * An agent leaves an event / group with participants/friends at a location.
 * 
 * Related actions:
 * 
 * * [[JoinAction]]: The antonym of LeaveAction.
 * * [[UnRegisterAction]]: Unlike UnRegisterAction, LeaveAction implies leaving
 * a group/team of people rather than a service.
 *
 * @see http://schema.org/LeaveAction
 *
 */
class LeaveAction extends BaseType implements ActionContract, InteractActionContract, ThingContract
{
    /**
     * Indicates the current disposition of the Action.
     *
     * @param ActionStatusTypeContract|ActionStatusTypeContract[] $actionStatus
     *
     * @return static
     *
     * @see http://schema.org/actionStatus
     */
    public function actionStatus($actionStatus)
    {
        return $this->setProperty('actionStatus', $actionStatus);
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
     * @see http://schema.org/additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * The direct performer or driver of the action (animate or inanimate). e.g.
     * *John* wrote a book.
     *
     * @param OrganizationContract|OrganizationContract[]|PersonContract|PersonContract[] $agent
     *
     * @return static
     *
     * @see http://schema.org/agent
     */
    public function agent($agent)
    {
        return $this->setProperty('agent', $agent);
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
     * The endTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. e.g.
     * John wrote a book from January to *December*. For media, including audio
     * and video, it's the time offset of the end of a clip within a larger
     * file.
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even
     * when describing dates with times. This situation may be clarified in
     * future revisions.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $endTime
     *
     * @return static
     *
     * @see http://schema.org/endTime
     */
    public function endTime($endTime)
    {
        return $this->setProperty('endTime', $endTime);
    }

    /**
     * For failed actions, more information on the cause of the failure.
     *
     * @param ThingContract|ThingContract[] $error
     *
     * @return static
     *
     * @see http://schema.org/error
     */
    public function error($error)
    {
        return $this->setProperty('error', $error);
    }

    /**
     * Upcoming or past event associated with this place, organization, or
     * action.
     *
     * @param EventContract|EventContract[] $event
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
     * The object that helped the agent perform the action. e.g. John wrote a
     * book with *a pen*.
     *
     * @param ThingContract|ThingContract[] $instrument
     *
     * @return static
     *
     * @see http://schema.org/instrument
     */
    public function instrument($instrument)
    {
        return $this->setProperty('instrument', $instrument);
    }

    /**
     * The location of for example where the event is happening, an organization
     * is located, or where an action takes place.
     *
     * @param PlaceContract|PlaceContract[]|PostalAddressContract|PostalAddressContract[]|string|string[] $location
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
     * The object upon which the action is carried out, whose state is kept
     * intact or changed. Also known as the semantic roles patient, affected or
     * undergoer (which change their state) or theme (which doesn't). e.g. John
     * read *a book*.
     *
     * @param ThingContract|ThingContract[] $object
     *
     * @return static
     *
     * @see http://schema.org/object
     */
    public function object($object)
    {
        return $this->setProperty('object', $object);
    }

    /**
     * Other co-agents that participated in the action indirectly. e.g. John
     * wrote a book with *Steve*.
     *
     * @param OrganizationContract|OrganizationContract[]|PersonContract|PersonContract[] $participant
     *
     * @return static
     *
     * @see http://schema.org/participant
     */
    public function participant($participant)
    {
        return $this->setProperty('participant', $participant);
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
     * The result produced in the action. e.g. John wrote *a book*.
     *
     * @param ThingContract|ThingContract[] $result
     *
     * @return static
     *
     * @see http://schema.org/result
     */
    public function result($result)
    {
        return $this->setProperty('result', $result);
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
     * The startTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. e.g.
     * John wrote a book from *January* to December. For media, including audio
     * and video, it's the time offset of the start of a clip within a larger
     * file.
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even
     * when describing dates with times. This situation may be clarified in
     * future revisions.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $startTime
     *
     * @return static
     *
     * @see http://schema.org/startTime
     */
    public function startTime($startTime)
    {
        return $this->setProperty('startTime', $startTime);
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
     * Indicates a target EntryPoint for an Action.
     *
     * @param EntryPointContract|EntryPointContract[] $target
     *
     * @return static
     *
     * @see http://schema.org/target
     */
    public function target($target)
    {
        return $this->setProperty('target', $target);
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

}
