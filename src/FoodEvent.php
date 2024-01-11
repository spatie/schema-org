<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\EventContract;
use Spatie\SchemaOrg\Contracts\FoodEventContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Event type: Food event.
 *
 * @see https://schema.org/FoodEvent
 *
 */
class FoodEvent extends BaseType implements FoodEventContract, EventContract, ThingContract
{
    /**
     * The subject matter of the content.
     *
     * @param \Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[] $about
     *
     * @return static
     *
     * @see https://schema.org/about
     * @link https://github.com/schemaorg/schemaorg/issues/1670
     */
    public function about($about)
    {
        return $this->setProperty('about', $about);
    }

    /**
     * An actor, e.g. in TV, radio, movie, video games etc., or in an event.
     * Actors can be associated with individual items or with a series, episode,
     * clip.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $actor
     *
     * @return static
     *
     * @see https://schema.org/actor
     */
    public function actor($actor)
    {
        return $this->setProperty('actor', $actor);
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
     * A person or organization attending the event.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $attendee
     *
     * @return static
     *
     * @see https://schema.org/attendee
     */
    public function attendee($attendee)
    {
        return $this->setProperty('attendee', $attendee);
    }

    /**
     * A person attending the event.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $attendees
     *
     * @return static
     *
     * @see https://schema.org/attendees
     */
    public function attendees($attendees)
    {
        return $this->setProperty('attendees', $attendees);
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @param \Spatie\SchemaOrg\Contracts\AudienceContract|\Spatie\SchemaOrg\Contracts\AudienceContract[] $audience
     *
     * @return static
     *
     * @see https://schema.org/audience
     */
    public function audience($audience)
    {
        return $this->setProperty('audience', $audience);
    }

    /**
     * The person or organization who wrote a composition, or who is the
     * composer of a work performed at some event.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $composer
     *
     * @return static
     *
     * @see https://schema.org/composer
     */
    public function composer($composer)
    {
        return $this->setProperty('composer', $composer);
    }

    /**
     * A secondary contributor to the CreativeWork or Event.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $contributor
     *
     * @return static
     *
     * @see https://schema.org/contributor
     */
    public function contributor($contributor)
    {
        return $this->setProperty('contributor', $contributor);
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
     * A director of e.g. TV, radio, movie, video gaming etc. content, or of an
     * event. Directors can be associated with individual items or with a
     * series, episode, clip.
     *
     * @param \Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $director
     *
     * @return static
     *
     * @see https://schema.org/director
     */
    public function director($director)
    {
        return $this->setProperty('director', $director);
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
     * The time admission will commence.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $doorTime
     *
     * @return static
     *
     * @see https://schema.org/doorTime
     */
    public function doorTime($doorTime)
    {
        return $this->setProperty('doorTime', $doorTime);
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO
     * 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param \Spatie\SchemaOrg\Contracts\DurationContract|\Spatie\SchemaOrg\Contracts\DurationContract[] $duration
     *
     * @return static
     *
     * @see https://schema.org/duration
     */
    public function duration($duration)
    {
        return $this->setProperty('duration', $duration);
    }

    /**
     * The end date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $endDate
     *
     * @return static
     *
     * @see https://schema.org/endDate
     * @link https://github.com/schemaorg/schemaorg/issues/2486
     */
    public function endDate($endDate)
    {
        return $this->setProperty('endDate', $endDate);
    }

    /**
     * The eventAttendanceMode of an event indicates whether it occurs online,
     * offline, or a mix.
     *
     * @param \Spatie\SchemaOrg\Contracts\EventAttendanceModeEnumerationContract|\Spatie\SchemaOrg\Contracts\EventAttendanceModeEnumerationContract[] $eventAttendanceMode
     *
     * @return static
     *
     * @see https://schema.org/eventAttendanceMode
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1842
     */
    public function eventAttendanceMode($eventAttendanceMode)
    {
        return $this->setProperty('eventAttendanceMode', $eventAttendanceMode);
    }

    /**
     * Associates an [[Event]] with a [[Schedule]]. There are circumstances
     * where it is preferable to share a schedule for a series of
     *       repeating events rather than data on the individual events
     * themselves. For example, a website or application might prefer to publish
     * a schedule for a weekly
     *       gym class rather than provide data on every event. A schedule could
     * be processed by applications to add forthcoming events to a calendar. An
     * [[Event]] that
     *       is associated with a [[Schedule]] using this property should not
     * have [[startDate]] or [[endDate]] properties. These are instead defined
     * within the associated
     *       [[Schedule]], this avoids any ambiguity for clients using the data.
     * The property might have repeated values to specify different schedules,
     * e.g. for different months
     *       or seasons.
     *
     * @param \Spatie\SchemaOrg\Contracts\ScheduleContract|\Spatie\SchemaOrg\Contracts\ScheduleContract[] $eventSchedule
     *
     * @return static
     *
     * @see https://schema.org/eventSchedule
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1457
     */
    public function eventSchedule($eventSchedule)
    {
        return $this->setProperty('eventSchedule', $eventSchedule);
    }

    /**
     * An eventStatus of an event represents its status; particularly useful
     * when an event is cancelled or rescheduled.
     *
     * @param \Spatie\SchemaOrg\Contracts\EventStatusTypeContract|\Spatie\SchemaOrg\Contracts\EventStatusTypeContract[] $eventStatus
     *
     * @return static
     *
     * @see https://schema.org/eventStatus
     */
    public function eventStatus($eventStatus)
    {
        return $this->setProperty('eventStatus', $eventStatus);
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
     * The language of the content or performance or used in an action. Please
     * use one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also
     * [[availableLanguage]].
     *
     * @param \Spatie\SchemaOrg\Contracts\LanguageContract|\Spatie\SchemaOrg\Contracts\LanguageContract[]|string|string[] $inLanguage
     *
     * @return static
     *
     * @see https://schema.org/inLanguage
     * @link https://github.com/schemaorg/schemaorg/issues/2382
     */
    public function inLanguage($inLanguage)
    {
        return $this->setProperty('inLanguage', $inLanguage);
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
     * The maximum physical attendee capacity of an [[Event]] whose
     * [[eventAttendanceMode]] is [[OfflineEventAttendanceMode]] (or the offline
     * aspects, in the case of a [[MixedEventAttendanceMode]]).
     *
     * @param int|int[] $maximumPhysicalAttendeeCapacity
     *
     * @return static
     *
     * @see https://schema.org/maximumPhysicalAttendeeCapacity
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1842
     */
    public function maximumPhysicalAttendeeCapacity($maximumPhysicalAttendeeCapacity)
    {
        return $this->setProperty('maximumPhysicalAttendeeCapacity', $maximumPhysicalAttendeeCapacity);
    }

    /**
     * The maximum virtual attendee capacity of an [[Event]] whose
     * [[eventAttendanceMode]] is [[OnlineEventAttendanceMode]] (or the online
     * aspects, in the case of a [[MixedEventAttendanceMode]]).
     *
     * @param int|int[] $maximumVirtualAttendeeCapacity
     *
     * @return static
     *
     * @see https://schema.org/maximumVirtualAttendeeCapacity
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1842
     */
    public function maximumVirtualAttendeeCapacity($maximumVirtualAttendeeCapacity)
    {
        return $this->setProperty('maximumVirtualAttendeeCapacity', $maximumVirtualAttendeeCapacity);
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
     * An organizer of an Event.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $organizer
     *
     * @return static
     *
     * @see https://schema.org/organizer
     */
    public function organizer($organizer)
    {
        return $this->setProperty('organizer', $organizer);
    }

    /**
     * A performer at the event&#x2014;for example, a presenter, musician,
     * musical group or actor.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $performer
     *
     * @return static
     *
     * @see https://schema.org/performer
     */
    public function performer($performer)
    {
        return $this->setProperty('performer', $performer);
    }

    /**
     * The main performer or performers of the event&#x2014;for example, a
     * presenter, musician, or actor.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $performers
     *
     * @return static
     *
     * @see https://schema.org/performers
     */
    public function performers($performers)
    {
        return $this->setProperty('performers', $performers);
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
     * Used in conjunction with eventStatus for rescheduled or cancelled events.
     * This property contains the previously scheduled start date. For
     * rescheduled events, the startDate property should be used for the newly
     * scheduled start date. In the (rare) case of an event that has been
     * postponed and rescheduled multiple times, this field may be repeated.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $previousStartDate
     *
     * @return static
     *
     * @see https://schema.org/previousStartDate
     */
    public function previousStartDate($previousStartDate)
    {
        return $this->setProperty('previousStartDate', $previousStartDate);
    }

    /**
     * The CreativeWork that captured all or part of this Event.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[] $recordedIn
     *
     * @return static
     *
     * @see https://schema.org/recordedIn
     */
    public function recordedIn($recordedIn)
    {
        return $this->setProperty('recordedIn', $recordedIn);
    }

    /**
     * The number of attendee places for an event that remain unallocated.
     *
     * @param int|int[] $remainingAttendeeCapacity
     *
     * @return static
     *
     * @see https://schema.org/remainingAttendeeCapacity
     */
    public function remainingAttendeeCapacity($remainingAttendeeCapacity)
    {
        return $this->setProperty('remainingAttendeeCapacity', $remainingAttendeeCapacity);
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
     * The start date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $startDate
     *
     * @return static
     *
     * @see https://schema.org/startDate
     * @link https://github.com/schemaorg/schemaorg/issues/2486
     */
    public function startDate($startDate)
    {
        return $this->setProperty('startDate', $startDate);
    }

    /**
     * An Event that is part of this event. For example, a conference event
     * includes many presentations, each of which is a subEvent of the
     * conference.
     *
     * @param \Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $subEvent
     *
     * @return static
     *
     * @see https://schema.org/subEvent
     */
    public function subEvent($subEvent)
    {
        return $this->setProperty('subEvent', $subEvent);
    }

    /**
     * Events that are a part of this event. For example, a conference event
     * includes many presentations, each subEvents of the conference.
     *
     * @param \Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $subEvents
     *
     * @return static
     *
     * @see https://schema.org/subEvents
     */
    public function subEvents($subEvents)
    {
        return $this->setProperty('subEvents', $subEvents);
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
     * An event that this event is a part of. For example, a collection of
     * individual music performances might each have a music festival as their
     * superEvent.
     *
     * @param \Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $superEvent
     *
     * @return static
     *
     * @see https://schema.org/superEvent
     */
    public function superEvent($superEvent)
    {
        return $this->setProperty('superEvent', $superEvent);
    }

    /**
     * Organization or person who adapts a creative work to different languages,
     * regional differences and technical requirements of a target market, or
     * that translates during some event.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $translator
     *
     * @return static
     *
     * @see https://schema.org/translator
     */
    public function translator($translator)
    {
        return $this->setProperty('translator', $translator);
    }

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @param string|string[] $typicalAgeRange
     *
     * @return static
     *
     * @see https://schema.org/typicalAgeRange
     */
    public function typicalAgeRange($typicalAgeRange)
    {
        return $this->setProperty('typicalAgeRange', $typicalAgeRange);
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
     * A work featured in some event, e.g. exhibited in an ExhibitionEvent.
     *        Specific subproperties are available for workPerformed (e.g. a
     * play), or a workPresented (a Movie at a ScreeningEvent).
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[] $workFeatured
     *
     * @return static
     *
     * @see https://schema.org/workFeatured
     */
    public function workFeatured($workFeatured)
    {
        return $this->setProperty('workFeatured', $workFeatured);
    }

    /**
     * A work performed in some event, for example a play performed in a
     * TheaterEvent.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[] $workPerformed
     *
     * @return static
     *
     * @see https://schema.org/workPerformed
     */
    public function workPerformed($workPerformed)
    {
        return $this->setProperty('workPerformed', $workPerformed);
    }
}
