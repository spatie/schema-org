<?php

namespace Spatie\SchemaOrg;

/**
 * The act of producing a balanced opinion about the object for an audience. An
 * agent reviews an object with participants resulting in a review.
 *
 * @see http://schema.org/ReviewAction
 *
 * @mixin \Spatie\SchemaOrg\AssessAction
 */
class ReviewAction extends BaseType
{
    /**
     * A sub property of result. The review that resulted in the performing of
     * the action.
     *
     * @param Review|Review[] $resultReview
     *
     * @return static
     *
     * @see http://schema.org/resultReview
     */
    public function resultReview($resultReview)
    {
        return $this->setProperty('resultReview', $resultReview);
    }

}
