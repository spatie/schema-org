<?php

namespace Spatie\SchemaOrg;

/**
 * A set of characteristics belonging to people, e.g. who compose an item's
 * target audience.
 *
 * @see 
 */
class PeopleAudience extends Audience
{
    /**
     * Audiences defined by a person's gender.
     *
     * @param string|string[] $requiredGender
     *
     * @return static
     *
     * @see 
     */
    public function requiredGender($requiredGender)
    {
        return $this->setProperty('requiredGender', $requiredGender);
    }

    /**
     * Audiences defined by a person's minimum age.
     *
     * @param int|int[] $requiredMinAge
     *
     * @return static
     *
     * @see 
     */
    public function requiredMinAge($requiredMinAge)
    {
        return $this->setProperty('requiredMinAge', $requiredMinAge);
    }

    /**
     * Audiences defined by a person's maximum age.
     *
     * @param int|int[] $requiredMaxAge
     *
     * @return static
     *
     * @see 
     */
    public function requiredMaxAge($requiredMaxAge)
    {
        return $this->setProperty('requiredMaxAge', $requiredMaxAge);
    }

    /**
     * The gender of the person or audience.
     *
     * @param string|string[] $suggestedGender
     *
     * @return static
     *
     * @see 
     */
    public function suggestedGender($suggestedGender)
    {
        return $this->setProperty('suggestedGender', $suggestedGender);
    }

    /**
     * Minimal age recommended for viewing content.
     *
     * @param float|float[]|int|int[] $suggestedMinAge
     *
     * @return static
     *
     * @see 
     */
    public function suggestedMinAge($suggestedMinAge)
    {
        return $this->setProperty('suggestedMinAge', $suggestedMinAge);
    }

    /**
     * Maximal age recommended for viewing content.
     *
     * @param float|float[]|int|int[] $suggestedMaxAge
     *
     * @return static
     *
     * @see 
     */
    public function suggestedMaxAge($suggestedMaxAge)
    {
        return $this->setProperty('suggestedMaxAge', $suggestedMaxAge);
    }

}
