<?php

namespace Spatie\SchemaOrg;

/**
 * A specific question - e.g. from a user seeking answers online, or collected
 * in a Frequently Asked Questions (FAQ) document.
 *
 * @see 
 */
class Question extends CreativeWork
{
    /**
     * The number of downvotes this question, answer or comment has received
     * from the community.
     *
     * @param int|int[] $downvoteCount
     *
     * @return static
     *
     * @see 
     */
    public function downvoteCount($downvoteCount)
    {
        return $this->setProperty('downvoteCount', $downvoteCount);
    }

    /**
     * The number of upvotes this question, answer or comment has received from
     * the community.
     *
     * @param int|int[] $upvoteCount
     *
     * @return static
     *
     * @see 
     */
    public function upvoteCount($upvoteCount)
    {
        return $this->setProperty('upvoteCount', $upvoteCount);
    }

    /**
     * An answer (possibly one of several, possibly incorrect) to a Question,
     * e.g. on a Question/Answer site.
     *
     * @param Answer|Answer[] $suggestedAnswer
     *
     * @return static
     *
     * @see 
     */
    public function suggestedAnswer($suggestedAnswer)
    {
        return $this->setProperty('suggestedAnswer', $suggestedAnswer);
    }

    /**
     * The answer that has been accepted as best, typically on a Question/Answer
     * site. Sites vary in their selection mechanisms, e.g. drawing on community
     * opinion and/or the view of the Question author.
     *
     * @param Answer|Answer[] $acceptedAnswer
     *
     * @return static
     *
     * @see 
     */
    public function acceptedAnswer($acceptedAnswer)
    {
        return $this->setProperty('acceptedAnswer', $acceptedAnswer);
    }

    /**
     * The number of answers this question has received.
     *
     * @param int|int[] $answerCount
     *
     * @return static
     *
     * @see 
     */
    public function answerCount($answerCount)
    {
        return $this->setProperty('answerCount', $answerCount);
    }

}
