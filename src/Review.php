<?php

namespace Spatie\SchemaOrg;

/**
 * A review of an item - for example, of a restaurant, movie, or store.
 *
 * @see http://schema.org/Review
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class Review extends BaseType
{
    /**
     * The item that is being reviewed/rated.
     *
     * @param Thing|Thing[] $itemReviewed
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
     * This Review or Rating is relevant to this part or facet of the
     * itemReviewed.
     *
     * @param string|string[] $reviewAspect
     *
     * @return static
     *
     * @see http://schema.org/reviewAspect
     */
    public function reviewAspect($reviewAspect)
    {
        return $this->setProperty('reviewAspect', $reviewAspect);
    }

    /**
     * The actual body of the review.
     *
     * @param string|string[] $reviewBody
     *
     * @return static
     *
     * @see http://schema.org/reviewBody
     */
    public function reviewBody($reviewBody)
    {
        return $this->setProperty('reviewBody', $reviewBody);
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
     * @see http://schema.org/reviewRating
     */
    public function reviewRating($reviewRating)
    {
        return $this->setProperty('reviewRating', $reviewRating);
    }

}
