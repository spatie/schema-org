<?php

namespace Spatie\SchemaOrg;

/**
 * The act of ingesting information/resources/food.
 *
 * @see http://schema.org/ConsumeAction
 */
class ConsumeAction extends Action
{
    /**
     * An Offer which must be accepted before the user can perform the Action.
     * For example, the user may need to buy a movie before being able to watch
     * it.
     *
     * @param \Spatie\SchemaOrg\Offer $expectsAcceptanceOf
     *
     * @return static
     *
     * @see http://schema.org/expectsAcceptanceOf
     */
    public function expectsAcceptanceOf($expectsAcceptanceOf)
    {
        return $this->setProperty('expectsAcceptanceOf', $expectsAcceptanceOf);
    }

}
