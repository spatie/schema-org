<?php

namespace Spatie\SchemaOrg;

/**
 * A comment on an item - for example, a comment on a blog post. The comment's
 * content is expressed via the [[text]] property, and its topic via [[about]],
 * properties shared with all CreativeWorks.
 *
 * @see http://schema.org/Comment
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class Comment extends BaseType
{
    /**
     * The number of downvotes this question, answer or comment has received
     * from the community.
     *
     * @param int|int[] $downvoteCount
     *
     * @return static
     *
     * @see http://schema.org/downvoteCount
     */
    public function downvoteCount($downvoteCount)
    {
        return $this->setProperty('downvoteCount', $downvoteCount);
    }

    /**
     * The parent of a question, answer or item in general.
     *
     * @param Question|Question[] $parentItem
     *
     * @return static
     *
     * @see http://schema.org/parentItem
     */
    public function parentItem($parentItem)
    {
        return $this->setProperty('parentItem', $parentItem);
    }

    /**
     * The number of upvotes this question, answer or comment has received from
     * the community.
     *
     * @param int|int[] $upvoteCount
     *
     * @return static
     *
     * @see http://schema.org/upvoteCount
     */
    public function upvoteCount($upvoteCount)
    {
        return $this->setProperty('upvoteCount', $upvoteCount);
    }

}
