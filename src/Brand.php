<?php

namespace Spatie\SchemaOrg;

/**
 * A brand is a name used by an organization or business person for labeling a
 * product, product group, or similar.
 *
 * @see http://schema.org/Brand
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class Brand extends BaseType
{
    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @param AggregateRating|AggregateRating[] $aggregateRating
     *
     * @return static
     *
     * @see http://schema.org/aggregateRating
     */
    public function aggregateRating($aggregateRating)
    {
        return $this->setProperty('aggregateRating', $aggregateRating);
    }

    /**
     * An associated logo.
     *
     * @param ImageObject|ImageObject[]|string|string[] $logo
     *
     * @return static
     *
     * @see http://schema.org/logo
     */
    public function logo($logo)
    {
        return $this->setProperty('logo', $logo);
    }

    /**
     * A review of the item.
     *
     * @param Review|Review[] $review
     *
     * @return static
     *
     * @see http://schema.org/review
     */
    public function review($review)
    {
        return $this->setProperty('review', $review);
    }

}
