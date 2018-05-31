<?php

namespace Spatie\SchemaOrg;

/**
 * A fact-checking review of claims made (or reported) in some creative work
 * (referenced via itemReviewed).
 *
 * @see http://schema.org/ClaimReview
 *
 * @mixin Review
 */
class ClaimReview
{
    /**
     * A short summary of the specific claims reviewed in a ClaimReview.
     *
     * @param string|string[] $claimReviewed
     *
     * @return static
     *
     * @see http://schema.org/claimReviewed
     */
    public function claimReviewed($claimReviewed)
    {
        return $this->setProperty('claimReviewed', $claimReviewed);
    }

}
