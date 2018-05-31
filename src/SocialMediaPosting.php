<?php

namespace Spatie\SchemaOrg;

/**
 * A post to a social media platform, including blog posts, tweets, Facebook
 * posts, etc.
 *
 * @see http://schema.org/SocialMediaPosting
 *
 * @mixin Article
 */
class SocialMediaPosting
{
    /**
     * A CreativeWork such as an image, video, or audio clip shared as part of
     * this posting.
     *
     * @param CreativeWork|CreativeWork[] $sharedContent
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
