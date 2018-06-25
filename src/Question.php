<?php

namespace Spatie\SchemaOrg;

/**
 * A specific question - e.g. from a user seeking answers online, or collected
 * in a Frequently Asked Questions (FAQ) document.
 *
 * @see http://schema.org/Question
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class Question extends BaseType
{
    /**
     * The answer(s) that has been accepted as best, typically on a
     * Question/Answer site. Sites vary in their selection mechanisms, e.g.
     * drawing on community opinion and/or the view of the Question author.
     *
     * @param Answer|Answer[]|ItemList|ItemList[] $acceptedAnswer
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
     * The number of answers this question has received.
     *
     * @param int|int[] $answerCount
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
     * The number of downvotes this question, answer or comment has received
     * from the community.
     *
     * @param int|int[] $downvoteCount
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
     * An answer (possibly one of several, possibly incorrect) to a Question,
     * e.g. on a Question/Answer site.
     *
     * @param Answer|Answer[]|ItemList|ItemList[] $suggestedAnswer
     *
     * @return static
     *
     * @see http://schema.org/suggestedAnswer
     */
    public function suggestedAnswer($suggestedAnswer)
    {
        return $this->setProperty('suggestedAnswer', $suggestedAnswer);
    }

    /**
     * The number of upvotes this question, answer or comment has received from
     * the community.
     *
     * @param int|int[] $upvoteCount
     *
     * @return static
     *
     * @see http://schema.org/upvoteCount
     */
    public function upvoteCount($upvoteCount)
    {
        return $this->setProperty('upvoteCount', $upvoteCount);
    }

}
