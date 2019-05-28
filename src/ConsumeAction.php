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
     * A set of requirements that a must be fulfilled in order to perform an
     * Action. If more than one value is specied, fulfilling one set of
     * requirements will allow the Action to be performed.
     *
     * @param ActionAccessSpecification|ActionAccessSpecification[] $actionAccessibilityRequirement
     *
     * @return static
     *
     * @see http://schema.org/actionAccessibilityRequirement
     */
    public function actionAccessibilityRequirement($actionAccessibilityRequirement)
    {
        return $this->setProperty('actionAccessibilityRequirement', $actionAccessibilityRequirement);
    }

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
