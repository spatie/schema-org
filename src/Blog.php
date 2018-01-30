<?php

namespace Spatie\SchemaOrg;

/**
 * A blog.
 *
 * @see 
 */
class Blog extends CreativeWork
{
    /**
     * The postings that are part of this blog.
     *
     * @param BlogPosting|BlogPosting[] $blogPosts
     *
     * @return static
     *
     * @see 
     */
    public function blogPosts($blogPosts)
    {
        return $this->setProperty('blogPosts', $blogPosts);
    }

    /**
     * A posting that is part of this blog.
     *
     * @param BlogPosting|BlogPosting[] $blogPost
     *
     * @return static
     *
     * @see 
     */
    public function blogPost($blogPost)
    {
        return $this->setProperty('blogPost', $blogPost);
    }

}
