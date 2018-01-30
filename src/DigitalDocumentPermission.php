<?php

namespace Spatie\SchemaOrg;

/**
 * A permission for a particular person or group to access a particular file.
 *
 * @see 
 */
class DigitalDocumentPermission extends Intangible
{
    /**
     * The person, organization, contact point, or audience that has been
     * granted this permission.
     *
     * @param Person|Person[]|Organization|Organization[]|Audience|Audience[]|ContactPoint|ContactPoint[] $grantee
     *
     * @return static
     *
     * @see 
     */
    public function grantee($grantee)
    {
        return $this->setProperty('grantee', $grantee);
    }

    /**
     * The type of permission granted the person, organization, or audience.
     *
     * @param DocumentPermissionType|DocumentPermissionType[] $permissionType
     *
     * @return static
     *
     * @see 
     */
    public function permissionType($permissionType)
    {
        return $this->setProperty('permissionType', $permissionType);
    }

}
