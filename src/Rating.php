<?php

namespace Spatie\SchemaOrg;

/**
 * A rating is an evaluation on a numeric scale, such as 1 to 5 stars.
 *
 * @see http://schema.org/Rating
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class Rating extends BaseType
{
    /**
     * The author of this content or rating. Please note that author is special
     * in that HTML 5 provides a special mechanism for indicating authorship via
     * the rel tag. That is equivalent to this and may be used interchangeably.
     *
     * @param Organization|Organization[]|Person|Person[] $author
     *
     * @return static
     *
     * @see http://schema.org/author
     */
    public function author($author)
    {
        return $this->setProperty('author', $author);
    }

    /**
     * The highest value allowed in this rating system. If bestRating is
     * omitted, 5 is assumed.
     *
     * @param float|float[]|int|int[]|string|string[] $bestRating
     *
     * @return static
     *
     * @see http://schema.org/bestRating
     */
    public function bestRating($bestRating)
    {
        return $this->setProperty('bestRating', $bestRating);
    }

    /**
     * The rating for the content.
     * 
     * Usage guidelines:
     * 
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similiar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
     * decimal point. Avoid using these symbols as a readability separator.
     *
     * @param float|float[]|int|int[]|string|string[] $ratingValue
     *
     * @return static
     *
     * @see http://schema.org/ratingValue
     */
    public function ratingValue($ratingValue)
    {
        return $this->setProperty('ratingValue', $ratingValue);
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
     * The lowest value allowed in this rating system. If worstRating is
     * omitted, 1 is assumed.
     *
     * @param float|float[]|int|int[]|string|string[] $worstRating
     *
     * @return static
     *
     * @see http://schema.org/worstRating
     */
    public function worstRating($worstRating)
    {
        return $this->setProperty('worstRating', $worstRating);
    }

}
