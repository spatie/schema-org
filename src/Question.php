<?php

namespace Spatie\SchemaOrg;

/**
 * A specific question - e.g. from a user seeking answers online, or collected
 * in a Frequently Asked Questions (FAQ) document.
 *
 * @see http://schema.org/Question
 */
class Question extends CreativeWork
{
    /**
     * The number of upvotes this question, answer or comment has received from
     * the community.
     *
     * @param int $upvoteCount
     *
     * @return static
     *
     * @see http://schema.org/upvoteCount
     */
    public function upvoteCount($upvoteCount)
    {
        return $this->setProperty('upvoteCount', $upvoteCount);
    }

    /**
     * The number of downvotes this question, answer or comment has received
     * from the community.
     *
     * @param int $downvoteCount
     *
     * @return static
     *
     * @see http://schema.org/downvoteCount
     */
    public function downvoteCount($downvoteCount)
    {
        return $this->setProperty('downvoteCount', $downvoteCount);
    }

    /**
     * The number of answers this question has received.
     *
     * @param int $answerCount
     *
     * @return static
     *
     * @see http://schema.org/answerCount
     */
    public function answerCount($answerCount)
    {
        return $this->setProperty('answerCount', $answerCount);
    }

    /**
     * The answer that has been accepted as best, typically on a Question/Answer
     * site. Sites vary in their selection mechanisms, e.g. drawing on community
     * opinion and/or the view of the Question author.
     *
     * @param \Spatie\SchemaOrg\Answer $acceptedAnswer
     *
     * @return static
     *
     * @see http://schema.org/acceptedAnswer
     */
    public function acceptedAnswer($acceptedAnswer)
    {
        return $this->setProperty('acceptedAnswer', $acceptedAnswer);
    }

    /**
     * An answer (possibly one of several, possibly incorrect) to a Question,
     * e.g. on a Question/Answer site.
     *
     * @param \Spatie\SchemaOrg\Answer $suggestedAnswer
     *
     * @return static
     *
     * @see http://schema.org/suggestedAnswer
     */
    public function suggestedAnswer($suggestedAnswer)
    {
        return $this->setProperty('suggestedAnswer', $suggestedAnswer);
    }

}
