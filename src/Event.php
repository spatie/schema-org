<?php

namespace Spatie\SchemaOrg;

/**
 * An event happening at a certain time and location, such as a concert,
 * lecture, or festival. Ticketing information may be added via the [[offers]]
 * property. Repeated events may be structured as separate Event objects.
 *
 * @see http://schema.org/Event
 *
 * @mixin \Spatie\SchemaOrg\Thing
 */
class Event extends BaseType
{
    /**
     * The subject matter of the content.
     *
     * @param Thing|Thing[] $about
     *
     * @return static
     *
     * @see http://schema.org/about
     */
    public function about($about)
    {
        return $this->setProperty('about', $about);
    }

    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event.
     * Actors can be associated with individual items or with a series, episode,
     * clip.
     *
     * @param Person|Person[] $actor
     *
     * @return static
     *
     * @see http://schema.org/actor
     */
    public function actor($actor)
    {
        return $this->setProperty('actor', $actor);
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
     * A person or organization attending the event.
     *
     * @param Organization|Organization[]|Person|Person[] $attendee
     *
     * @return static
     *
     * @see http://schema.org/attendee
     */
    public function attendee($attendee)
    {
        return $this->setProperty('attendee', $attendee);
    }

    /**
     * A person attending the event.
     *
     * @param Organization|Organization[]|Person|Person[] $attendees
     *
     * @return static
     *
     * @see http://schema.org/attendees
     */
    public function attendees($attendees)
    {
        return $this->setProperty('attendees', $attendees);
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @param Audience|Audience[] $audience
     *
     * @return static
     *
     * @see http://schema.org/audience
     */
    public function audience($audience)
    {
        return $this->setProperty('audience', $audience);
    }

    /**
     * The person or organization who wrote a composition, or who is the
     * composer of a work performed at some event.
     *
     * @param Organization|Organization[]|Person|Person[] $composer
     *
     * @return static
     *
     * @see http://schema.org/composer
     */
    public function composer($composer)
    {
        return $this->setProperty('composer', $composer);
    }

    /**
     * A secondary contributor to the CreativeWork or Event.
     *
     * @param Organization|Organization[]|Person|Person[] $contributor
     *
     * @return static
     *
     * @see http://schema.org/contributor
     */
    public function contributor($contributor)
    {
        return $this->setProperty('contributor', $contributor);
    }

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an
     * event. Directors can be associated with individual items or with a
     * series, episode, clip.
     *
     * @param Person|Person[] $director
     *
     * @return static
     *
     * @see http://schema.org/director
     */
    public function director($director)
    {
        return $this->setProperty('director', $director);
    }

    /**
     * The time admission will commence.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $doorTime
     *
     * @return static
     *
     * @see http://schema.org/doorTime
     */
    public function doorTime($doorTime)
    {
        return $this->setProperty('doorTime', $doorTime);
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO
     * 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param Duration|Duration[] $duration
     *
     * @return static
     *
     * @see http://schema.org/duration
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
     * @see http://schema.org/endDate
     */
    public function endDate($endDate)
    {
        return $this->setProperty('endDate', $endDate);
    }

    /**
     * An eventStatus of an event represents its status; particularly useful
     * when an event is cancelled or rescheduled.
     *
     * @param EventStatusType|EventStatusType[] $eventStatus
     *
     * @return static
     *
     * @see http://schema.org/eventStatus
     */
    public function eventStatus($eventStatus)
    {
        return $this->setProperty('eventStatus', $eventStatus);
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
     * The language of the content or performance or used in an action. Please
     * use one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also
     * [[availableLanguage]].
     *
     * @param Language|Language[]|string|string[] $inLanguage
     *
     * @return static
     *
     * @see http://schema.org/inLanguage
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
     * @see http://schema.org/isAccessibleForFree
     */
    public function isAccessibleForFree($isAccessibleForFree)
    {
        return $this->setProperty('isAccessibleForFree', $isAccessibleForFree);
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
     * The total number of individuals that may attend an event or venue.
     *
     * @param int|int[] $maximumAttendeeCapacity
     *
     * @return static
     *
     * @see http://schema.org/maximumAttendeeCapacity
     */
    public function maximumAttendeeCapacity($maximumAttendeeCapacity)
    {
        return $this->setProperty('maximumAttendeeCapacity', $maximumAttendeeCapacity);
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a
     * product, rent the DVD of a movie, perform a service, or give away tickets
     * to an event.
     *
     * @param Offer|Offer[] $offers
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
     * An organizer of an Event.
     *
     * @param Organization|Organization[]|Person|Person[] $organizer
     *
     * @return static
     *
     * @see http://schema.org/organizer
     */
    public function organizer($organizer)
    {
        return $this->setProperty('organizer', $organizer);
    }

    /**
     * A performer at the event&#x2014;for example, a presenter, musician,
     * musical group or actor.
     *
     * @param Organization|Organization[]|Person|Person[] $performer
     *
     * @return static
     *
     * @see http://schema.org/performer
     */
    public function performer($performer)
    {
        return $this->setProperty('performer', $performer);
    }

    /**
     * The main performer or performers of the event&#x2014;for example, a
     * presenter, musician, or actor.
     *
     * @param Organization|Organization[]|Person|Person[] $performers
     *
     * @return static
     *
     * @see http://schema.org/performers
     */
    public function performers($performers)
    {
        return $this->setProperty('performers', $performers);
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
     * @see http://schema.org/previousStartDate
     */
    public function previousStartDate($previousStartDate)
    {
        return $this->setProperty('previousStartDate', $previousStartDate);
    }

    /**
     * The CreativeWork that captured all or part of this Event.
     *
     * @param CreativeWork|CreativeWork[] $recordedIn
     *
     * @return static
     *
     * @see http://schema.org/recordedIn
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
     * @see http://schema.org/remainingAttendeeCapacity
     */
    public function remainingAttendeeCapacity($remainingAttendeeCapacity)
    {
        return $this->setProperty('remainingAttendeeCapacity', $remainingAttendeeCapacity);
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
     * The start date and time of the item (in [ISO 8601 date
     * format](http://en.wikipedia.org/wiki/ISO_8601)).
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $startDate
     *
     * @return static
     *
     * @see http://schema.org/startDate
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
     * @param Event|Event[] $subEvent
     *
     * @return static
     *
     * @see http://schema.org/subEvent
     */
    public function subEvent($subEvent)
    {
        return $this->setProperty('subEvent', $subEvent);
    }

    /**
     * Events that are a part of this event. For example, a conference event
     * includes many presentations, each subEvents of the conference.
     *
     * @param Event|Event[] $subEvents
     *
     * @return static
     *
     * @see http://schema.org/subEvents
     */
    public function subEvents($subEvents)
    {
        return $this->setProperty('subEvents', $subEvents);
    }

    /**
     * An event that this event is a part of. For example, a collection of
     * individual music performances might each have a music festival as their
     * superEvent.
     *
     * @param Event|Event[] $superEvent
     *
     * @return static
     *
     * @see http://schema.org/superEvent
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
     * @param Organization|Organization[]|Person|Person[] $translator
     *
     * @return static
     *
     * @see http://schema.org/translator
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
     * @see http://schema.org/typicalAgeRange
     */
    public function typicalAgeRange($typicalAgeRange)
    {
        return $this->setProperty('typicalAgeRange', $typicalAgeRange);
    }

    /**
     * A work featured in some event, e.g. exhibited in an ExhibitionEvent.
     *        Specific subproperties are available for workPerformed (e.g. a
     * play), or a workPresented (a Movie at a ScreeningEvent).
     *
     * @param CreativeWork|CreativeWork[] $workFeatured
     *
     * @return static
     *
     * @see http://schema.org/workFeatured
     */
    public function workFeatured($workFeatured)
    {
        return $this->setProperty('workFeatured', $workFeatured);
    }

    /**
     * A work performed in some event, for example a play performed in a
     * TheaterEvent.
     *
     * @param CreativeWork|CreativeWork[] $workPerformed
     *
     * @return static
     *
     * @see http://schema.org/workPerformed
     */
    public function workPerformed($workPerformed)
    {
        return $this->setProperty('workPerformed', $workPerformed);
    }

}
