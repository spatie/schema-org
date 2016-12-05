<?php

namespace Spatie\SchemaOrg;

/**
 * A blog post intended to provide a rolling textual coverage of an ongoing
 * event through continuous updates.
 *
 * @see http://schema.org/LiveBlogPosting
 */
class LiveBlogPosting extends BlogPosting
{
    /**
     * The time when the live blog will begin covering the Event. Note that
     * coverage may begin before the Event's start time. The LiveBlogPosting may
     * also be created before coverage begins.
     *
     * @param \DateTimeInterface $coverageStartTime
     *
     * @return static
     *
     * @see http://schema.org/coverageStartTime
     */
    public function coverageStartTime($coverageStartTime)
    {
        return $this->setProperty('coverageStartTime', $coverageStartTime);
    }

    /**
     * The time when the live blog will stop covering the Event. Note that
     * coverage may continue after the Event concludes.
     *
     * @param \DateTimeInterface $coverageEndTime
     *
     * @return static
     *
     * @see http://schema.org/coverageEndTime
     */
    public function coverageEndTime($coverageEndTime)
    {
        return $this->setProperty('coverageEndTime', $coverageEndTime);
    }

    /**
     * An update to the LiveBlog.
     *
     * @param \Spatie\SchemaOrg\BlogPosting $liveBlogUpdate
     *
     * @return static
     *
     * @see http://schema.org/liveBlogUpdate
     */
    public function liveBlogUpdate($liveBlogUpdate)
    {
        return $this->setProperty('liveBlogUpdate', $liveBlogUpdate);
    }

}
