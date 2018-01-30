<?php

namespace Spatie\SchemaOrg;

/**
 * A review of an item - for example, of a restaurant, movie, or store.
 *
 * @see 
 */
class Review extends CreativeWork
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
     * The rating given in this review. Note that reviews can themselves be
     * rated. The ```reviewRating``` applies to rating given by the review. The
     * [[aggregateRating]] property applies to the review itself, as a creative
     * work.
     *
     * @param Rating|Rating[] $reviewRating
     *
     * @return static
     *
     * @see 
     */
    public function reviewRating($reviewRating)
    {
        return $this->setProperty('reviewRating', $reviewRating);
    }

    /**
     * The actual body of the review.
     *
     * @param string|string[] $reviewBody
     *
     * @return static
     *
     * @see 
     */
    public function reviewBody($reviewBody)
    {
        return $this->setProperty('reviewBody', $reviewBody);
    }

}
