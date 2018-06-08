<?php

namespace Spatie\SchemaOrg;

/**
 * Represents additional information about a relationship or property. For
 * example a Role can be used to say that a 'member' role linking some
 * SportsTeam to a player occurred during a particular time period. Or that a
 * Person's 'actor' role in a Movie was for some particular characterName. Such
 * properties can be attached to a Role entity, which is then associated with
 * the main entities using ordinary properties like 'member' or 'actor'.
 * 
 * See also [blog post](http://blog.schema.org/2014/06/introducing-role.html).
 *
 * @see http://schema.org/Role
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class Role extends BaseType
{
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
     * A position played, performed or filled by a person or organization, as
     * part of an organization. For example, an athlete in a SportsTeam might
     * play in the position named 'Quarterback'.
     *
     * @param string|string[] $namedPosition
     *
     * @return static
     *
     * @see http://schema.org/namedPosition
     */
    public function namedPosition($namedPosition)
    {
        return $this->setProperty('namedPosition', $namedPosition);
    }

    /**
     * A role played, performed or filled by a person or organization. For
     * example, the team of creators for a comic book might fill the roles named
     * 'inker', 'penciller', and 'letterer'; or an athlete in a SportsTeam might
     * play in the position named 'Quarterback'.
     *
     * @param string|string[] $roleName
     *
     * @return static
     *
     * @see http://schema.org/roleName
     */
    public function roleName($roleName)
    {
        return $this->setProperty('roleName', $roleName);
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

}
