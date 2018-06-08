<?php

namespace Spatie\SchemaOrg;

/**
 * A blog.
 *
 * @see http://schema.org/Blog
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class Blog extends BaseType
{
    /**
     * A posting that is part of this blog.
     *
     * @param BlogPosting|BlogPosting[] $blogPost
     *
     * @return static
     *
     * @see http://schema.org/blogPost
     */
    public function blogPost($blogPost)
    {
        return $this->setProperty('blogPost', $blogPost);
    }

    /**
     * The postings that are part of this blog.
     *
     * @param BlogPosting|BlogPosting[] $blogPosts
     *
     * @return static
     *
     * @see http://schema.org/blogPosts
     */
    public function blogPosts($blogPosts)
    {
        return $this->setProperty('blogPosts', $blogPosts);
    }

    /**
     * The International Standard Serial Number (ISSN) that identifies this
     * serial publication. You can repeat this property to identify different
     * formats of, or the linking ISSN (ISSN-L) for, this serial publication.
     *
     * @param string|string[] $issn
     *
     * @return static
     *
     * @see http://schema.org/issn
     */
    public function issn($issn)
    {
        return $this->setProperty('issn', $issn);
    }

}
