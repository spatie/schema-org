<?php

namespace Spatie\SchemaOrg;

/**
 * A fact-checking review of claims made (or reported) in some creative work
 * (referenced via itemReviewed).
 *
 * @see http://schema.org/ClaimReview
 */
class ClaimReview extends Review
{
    /**
     * A short summary of the specific claims reviewed in a ClaimReview.
     *
     * @param string $claimReviewed
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
