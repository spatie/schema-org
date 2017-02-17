<?php

namespace Spatie\SchemaOrg;

/**
 * An action performed by a direct agent and indirect participants upon a direct
 * object. Optionally happens at a location with the help of an inanimate
 * instrument. The execution of the action may produce a result. Specific action
 * sub-type documentation specifies the exact expectation of each argument/role.
 * 
 * See also [blog
 * post](http://blog.schema.org/2014/04/announcing-schemaorg-actions.html) and
 * [Actions overview document](http://schema.org/docs/actions.html).
 *
 * @see http://schema.org/Action
 */
class Action extends Thing
{
    /**
     * The direct performer or driver of the action (animate or inanimate). e.g.
     * *John* wrote a book.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $agent
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
     * The endTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. e.g.
     * John wrote a book from January to *December*.
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even
     * when describing dates with times. This situation may be clarified in
     * future revisions.
     *
     * @param \DateTimeInterface $endTime
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
     * The object that helped the agent perform the action. e.g. John wrote a
     * book with *a pen*.
     *
     * @param \Spatie\SchemaOrg\Thing $instrument
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
     * @param \Spatie\SchemaOrg\Place|\Spatie\SchemaOrg\PostalAddress|string $location
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
     * The object upon which the action is carried out, whose state is kept
     * intact or changed. Also known as the semantic roles patient, affected or
     * undergoer (which change their state) or theme (which doesn't). e.g. John
     * read *a book*.
     *
     * @param \Spatie\SchemaOrg\Thing $object
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
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $participant
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
     * The result produced in the action. e.g. John wrote *a book*.
     *
     * @param \Spatie\SchemaOrg\Thing $result
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
     * The startTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. e.g.
     * John wrote a book from *January* to December.
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even
     * when describing dates with times. This situation may be clarified in
     * future revisions.
     *
     * @param \DateTimeInterface $startTime
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
     * Indicates the current disposition of the Action.
     *
     * @param \Spatie\SchemaOrg\ActionStatusType $actionStatus
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
     * For failed actions, more information on the cause of the failure.
     *
     * @param \Spatie\SchemaOrg\Thing $error
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
     * Indicates a target EntryPoint for an Action.
     *
     * @param \Spatie\SchemaOrg\EntryPoint $target
     *
     * @return static
     *
     * @see http://schema.org/target
     */
    public function target($target)
    {
        return $this->setProperty('target', $target);
    }

}
