<?php

namespace Spatie\SchemaOrg;

/**
 * A type of permission which can be granted for accessing a digital document.
 *
 * @see http://schema.org/DigitalDocumentPermissionType
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class DigitalDocumentPermissionType extends BaseType
{
    /**
     * Permission to add comments to the document.
     *
     * @see http://schema.org/CommentPermission
     */
     const CommentPermission = 'http://schema.org/CommentPermission';

    /**
     * Permission to read or view the document.
     *
     * @see http://schema.org/ReadPermission
     */
     const ReadPermission = 'http://schema.org/ReadPermission';

    /**
     * Permission to write or edit the document.
     *
     * @see http://schema.org/WritePermission
     */
     const WritePermission = 'http://schema.org/WritePermission';

}
