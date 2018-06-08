<?php

namespace Spatie\SchemaOrg;

/**
 * Used to describe membership in a loyalty programs (e.g. "StarAliance"),
 * traveler clubs (e.g. "AAA"), purchase clubs ("Safeway Club"), etc.
 *
 * @see http://schema.org/ProgramMembership
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class ProgramMembership extends BaseType
{
    /**
     * The organization (airline, travelers' club, etc.) the membership is made
     * with.
     *
     * @param Organization|Organization[] $hostingOrganization
     *
     * @return static
     *
     * @see http://schema.org/hostingOrganization
     */
    public function hostingOrganization($hostingOrganization)
    {
        return $this->setProperty('hostingOrganization', $hostingOrganization);
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
     * A unique identifier for the membership.
     *
     * @param string|string[] $membershipNumber
     *
     * @return static
     *
     * @see http://schema.org/membershipNumber
     */
    public function membershipNumber($membershipNumber)
    {
        return $this->setProperty('membershipNumber', $membershipNumber);
    }

    /**
     * The program providing the membership.
     *
     * @param string|string[] $programName
     *
     * @return static
     *
     * @see http://schema.org/programName
     */
    public function programName($programName)
    {
        return $this->setProperty('programName', $programName);
    }

}
