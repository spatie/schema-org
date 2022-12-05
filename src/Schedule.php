<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\ScheduleContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A schedule defines a repeating time period used to describe a regularly
 * occurring [[Event]]. At a minimum a schedule will specify [[repeatFrequency]]
 * which describes the interval between occurrences of the event. Additional
 * information can be provided to specify the schedule more precisely.
 *       This includes identifying the day(s) of the week or month when the
 * recurring event will take place, in addition to its start and end time.
 * Schedules may also
 *       have start and end dates to indicate when they are active, e.g. to
 * define a limited calendar of events.
 *
 * @see https://schema.org/Schedule
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/1457
 *
 */
class Schedule extends BaseType implements ScheduleContract, IntangibleContract, ThingContract
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
     * @see https://schema.org/additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
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
     * Defines the day(s) of the week on which a recurring [[Event]] takes
     * place. May be specified using either [[DayOfWeek]], or alternatively
     * [[Text]] conforming to iCal's syntax for byDay recurrence rules.
     *
     * @param \Spatie\SchemaOrg\Contracts\DayOfWeekContract|\Spatie\SchemaOrg\Contracts\DayOfWeekContract[]|string|string[] $byDay
     *
     * @return static
     *
     * @see https://schema.org/byDay
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1457
     */
    public function byDay($byDay)
    {
        return $this->setProperty('byDay', $byDay);
    }

    /**
     * Defines the month(s) of the year on which a recurring [[Event]] takes
     * place. Specified as an [[Integer]] between 1-12. January is 1.
     *
     * @param int|int[] $byMonth
     *
     * @return static
     *
     * @see https://schema.org/byMonth
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1457
     */
    public function byMonth($byMonth)
    {
        return $this->setProperty('byMonth', $byMonth);
    }

    /**
     * Defines the day(s) of the month on which a recurring [[Event]] takes
     * place. Specified as an [[Integer]] between 1-31.
     *
     * @param int|int[] $byMonthDay
     *
     * @return static
     *
     * @see https://schema.org/byMonthDay
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1457
     */
    public function byMonthDay($byMonthDay)
    {
        return $this->setProperty('byMonthDay', $byMonthDay);
    }

    /**
     * Defines the week(s) of the month on which a recurring Event takes place.
     * Specified as an Integer between 1-5. For clarity, byMonthWeek is best
     * used in conjunction with byDay to indicate concepts like the first and
     * third Mondays of a month.
     *
     * @param int|int[] $byMonthWeek
     *
     * @return static
     *
     * @see https://schema.org/byMonthWeek
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2599
     */
    public function byMonthWeek($byMonthWeek)
    {
        return $this->setProperty('byMonthWeek', $byMonthWeek);
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
     * The endTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. E.g.
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
     * @see https://schema.org/endTime
     * @link https://github.com/schemaorg/schemaorg/issues/2493
     */
    public function endTime($endTime)
    {
        return $this->setProperty('endTime', $endTime);
    }

    /**
     * Defines a [[Date]] or [[DateTime]] during which a scheduled [[Event]]
     * will not take place. The property allows exceptions to
     *       a [[Schedule]] to be specified. If an exception is specified as a
     * [[DateTime]] then only the event that would have started at that specific
     * date and time
     *       should be excluded from the schedule. If an exception is specified
     * as a [[Date]] then any event that is scheduled for that 24 hour period
     * should be
     *       excluded from the schedule. This allows a whole day to be excluded
     * from the schedule without having to itemise every scheduled event.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $exceptDate
     *
     * @return static
     *
     * @see https://schema.org/exceptDate
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1457
     */
    public function exceptDate($exceptDate)
    {
        return $this->setProperty('exceptDate', $exceptDate);
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
     * Defines the number of times a recurring [[Event]] will take place.
     *
     * @param int|int[] $repeatCount
     *
     * @return static
     *
     * @see https://schema.org/repeatCount
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1457
     */
    public function repeatCount($repeatCount)
    {
        return $this->setProperty('repeatCount', $repeatCount);
    }

    /**
     * Defines the frequency at which [[Event]]s will occur according to a
     * schedule [[Schedule]]. The intervals between
     *       events should be defined as a [[Duration]] of time.
     *
     * @param \Spatie\SchemaOrg\Contracts\DurationContract|\Spatie\SchemaOrg\Contracts\DurationContract[]|string|string[] $repeatFrequency
     *
     * @return static
     *
     * @see https://schema.org/repeatFrequency
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1457
     */
    public function repeatFrequency($repeatFrequency)
    {
        return $this->setProperty('repeatFrequency', $repeatFrequency);
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
     * Indicates the timezone for which the time(s) indicated in the
     * [[Schedule]] are given. The value provided should be among those listed
     * in the IANA Time Zone Database.
     *
     * @param string|string[] $scheduleTimezone
     *
     * @return static
     *
     * @see https://schema.org/scheduleTimezone
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1457
     */
    public function scheduleTimezone($scheduleTimezone)
    {
        return $this->setProperty('scheduleTimezone', $scheduleTimezone);
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
     * The startTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. E.g.
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
     * @see https://schema.org/startTime
     * @link https://github.com/schemaorg/schemaorg/issues/2493
     */
    public function startTime($startTime)
    {
        return $this->setProperty('startTime', $startTime);
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
