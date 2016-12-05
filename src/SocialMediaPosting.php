<?php

namespace Spatie\SchemaOrg;

/**
 * A post to a social media platform, including blog posts, tweets, Facebook
 * posts, etc.
 *
 * @see http://schema.org/SocialMediaPosting
 */
class SocialMediaPosting extends Article
{
    /**
     * A CreativeWork such as an image, video, or audio clip shared as part of
     * this posting.
     *
     * @param \Spatie\SchemaOrg\CreativeWork $sharedContent
     *
     * @return static
     *
     * @see http://schema.org/sharedContent
     */
    public function sharedContent($sharedContent)
    {
        return $this->setProperty('sharedContent', $sharedContent);
    }

}
