<?php

namespace Spatie\SchemaOrg;

/**
 * The act of producing a balanced opinion about the object for an audience. An
 * agent reviews an object with participants resulting in a review.
 *
 * @see 
 */
class ReviewAction extends AssessAction
{
    /**
     * A sub property of result. The review that resulted in the performing of
     * the action.
     *
     * @param Review|Review[] $resultReview
     *
     * @return static
     *
     * @see 
     */
    public function resultReview($resultReview)
    {
        return $this->setProperty('resultReview', $resultReview);
    }

}
