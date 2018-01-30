<?php

namespace Spatie\SchemaOrg;

/**
 * The average rating based on multiple ratings or reviews.
 *
 * @see 
 */
class AggregateRating extends Rating
{
    /**
     * The item that is being reviewed/rated.
     *
     * @param Thing|Thing[] $itemReviewed
     *
     * @return static
     *
     * @see 
     */
    public function itemReviewed($itemReviewed)
    {
        return $this->setProperty('itemReviewed', $itemReviewed);
    }

    /**
     * The count of total number of ratings.
     *
     * @param int|int[] $ratingCount
     *
     * @return static
     *
     * @see 
     */
    public function ratingCount($ratingCount)
    {
        return $this->setProperty('ratingCount', $ratingCount);
    }

    /**
     * The count of total number of reviews.
     *
     * @param int|int[] $reviewCount
     *
     * @return static
     *
     * @see 
     */
    public function reviewCount($reviewCount)
    {
        return $this->setProperty('reviewCount', $reviewCount);
    }

}
