<?php

namespace Spatie\SchemaOrg;

/**
 * An electronic file or document.
 *
 * @see 
 */
class DigitalDocument extends CreativeWork
{
    /**
     * A permission related to the access to this document (e.g. permission to
     * read or write an electronic document). For a public document, specify a
     * grantee with an Audience with audienceType equal to "public".
     *
     * @param DigitalDocumentPermission|DigitalDocumentPermission[] $hasDigitalDocumentPermission
     *
     * @return static
     *
     * @see 
     */
    public function hasDigitalDocumentPermission($hasDigitalDocumentPermission)
    {
        return $this->setProperty('hasDigitalDocumentPermission', $hasDigitalDocumentPermission);
    }

}
