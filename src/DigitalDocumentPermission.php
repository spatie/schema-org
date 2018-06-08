<?php

namespace Spatie\SchemaOrg;

/**
 * A permission for a particular person or group to access a particular file.
 *
 * @see http://schema.org/DigitalDocumentPermission
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class DigitalDocumentPermission extends BaseType
{
    /**
     * The person, organization, contact point, or audience that has been
     * granted this permission.
     *
     * @param Audience|Audience[]|ContactPoint|ContactPoint[]|Organization|Organization[]|Person|Person[] $grantee
     *
     * @return static
     *
     * @see http://schema.org/grantee
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
     * @see http://schema.org/permissionType
     */
    public function permissionType($permissionType)
    {
        return $this->setProperty('permissionType', $permissionType);
    }

}
