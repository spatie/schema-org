<?php

namespace Spatie\SchemaOrg;

/**
 * The average rating based on multiple ratings or reviews.
 *
 * @see http://schema.org/AggregateRating
 */
class AggregateRating extends Rating
{
    /**
     * The item that is being reviewed/rated.
     *
     * @param \Spatie\SchemaOrg\Thing $itemReviewed
     *
     * @return static
     *
     * @see http://schema.org/itemReviewed
     */
    public function itemReviewed($itemReviewed)
    {
        return $this->setProperty('itemReviewed', $itemReviewed);
    }

    /**
     * The count of total number of ratings.
     *
     * @param int $ratingCount
     *
     * @return static
     *
     * @see http://schema.org/ratingCount
     */
    public function ratingCount($ratingCount)
    {
        return $this->setProperty('ratingCount', $ratingCount);
    }

    /**
     * The count of total number of reviews.
     *
     * @param int $reviewCount
     *
     * @return static
     *
     * @see http://schema.org/reviewCount
     */
    public function reviewCount($reviewCount)
    {
        return $this->setProperty('reviewCount', $reviewCount);
    }

}
