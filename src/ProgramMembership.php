<?php

namespace Spatie\SchemaOrg;

/**
 * Used to describe membership in a loyalty programs (e.g. "StarAliance"),
 * traveler clubs (e.g. "AAA"), purchase clubs ("Safeway Club"), etc.
 *
 * @see http://schema.org/ProgramMembership
 */
class ProgramMembership extends Intangible
{
    /**
     * A member of an Organization or a ProgramMembership. Organizations can be
     * members of organizations; ProgramMembership is typically for individuals.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $member
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
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $members
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
     * @param string $membershipNumber
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
     * @param string $programName
     *
     * @return static
     *
     * @see http://schema.org/programName
     */
    public function programName($programName)
    {
        return $this->setProperty('programName', $programName);
    }

    /**
     * The organization (airline, travelers' club, etc.) the membership is made
     * with.
     *
     * @param \Spatie\SchemaOrg\Organization $hostingOrganization
     *
     * @return static
     *
     * @see http://schema.org/hostingOrganization
     */
    public function hostingOrganization($hostingOrganization)
    {
        return $this->setProperty('hostingOrganization', $hostingOrganization);
    }

}
