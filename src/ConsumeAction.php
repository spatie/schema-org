<?php

namespace Spatie\SchemaOrg;

/**
 * The act of ingesting information/resources/food.
 *
 * @see 
 */
class ConsumeAction extends Action
{
    /**
     * An Offer which must be accepted before the user can perform the Action.
     * For example, the user may need to buy a movie before being able to watch
     * it.
     *
     * @param Offer|Offer[] $expectsAcceptanceOf
     *
     * @return static
     *
     * @see 
     */
    public function expectsAcceptanceOf($expectsAcceptanceOf)
    {
        return $this->setProperty('expectsAcceptanceOf', $expectsAcceptanceOf);
    }

}
