<?php

namespace Spatie\SchemaOrg;

/**
 * The act of ingesting information/resources/food.
 *
 * @see http://schema.org/ConsumeAction
 *
 * @mixin \Spatie\SchemaOrg\Action
 */
class ConsumeAction extends BaseType
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
     * @see http://schema.org/expectsAcceptanceOf
     */
    public function expectsAcceptanceOf($expectsAcceptanceOf)
    {
        return $this->setProperty('expectsAcceptanceOf', $expectsAcceptanceOf);
    }

}
