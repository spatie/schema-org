<?php

namespace Spatie\SchemaOrg;

/**
 * UserInteraction and its subtypes is an old way of talking about users
 * interacting with pages. It is generally better to use [[Action]]-based
 * vocabulary, alongside types such as [[Comment]].
 *
 * @see http://schema.org/UserComments
 */
class UserComments extends UserInteraction
{
    /**
     * The text of the UserComment.
     *
     * @param string $commentText
     *
     * @return static
     *
     * @see http://schema.org/commentText
     */
    public function commentText($commentText)
    {
        return $this->setProperty('commentText', $commentText);
    }

    /**
     * The time at which the UserComment was made.
     *
     * @param \DateTimeInterface $commentTime
     *
     * @return static
     *
     * @see http://schema.org/commentTime
     */
    public function commentTime($commentTime)
    {
        return $this->setProperty('commentTime', $commentTime);
    }

    /**
     * The creator/author of this CreativeWork. This is the same as the Author
     * property for CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $creator
     *
     * @return static
     *
     * @see http://schema.org/creator
     */
    public function creator($creator)
    {
        return $this->setProperty('creator', $creator);
    }

    /**
     * Specifies the CreativeWork associated with the UserComment.
     *
     * @param \Spatie\SchemaOrg\CreativeWork $discusses
     *
     * @return static
     *
     * @see http://schema.org/discusses
     */
    public function discusses($discusses)
    {
        return $this->setProperty('discusses', $discusses);
    }

    /**
     * The URL at which a reply may be posted to the specified UserComment.
     *
     * @param string $replyToUrl
     *
     * @return static
     *
     * @see http://schema.org/replyToUrl
     */
    public function replyToUrl($replyToUrl)
    {
        return $this->setProperty('replyToUrl', $replyToUrl);
    }

}
