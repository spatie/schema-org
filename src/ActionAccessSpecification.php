<?php

namespace Spatie\SchemaOrg;

/**
 * A set of requirements that a must be fulfilled in order to perform an Action.
 *
 * @see http://schema.org/ActionAccessSpecification
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class ActionAccessSpecification extends BaseType
{
    /**
     * 
     *
     * @param  $availabilityEnds
     *
     * @return static
     *
     * @see http://schema.org/availabilityEnds
     */
    public function availabilityEnds($availabilityEnds)
    {
        return $this->setProperty('availabilityEnds', $availabilityEnds);
    }

    /**
     * 
     *
     * @param  $availabilityStarts
     *
     * @return static
     *
     * @see http://schema.org/availabilityStarts
     */
    public function availabilityStarts($availabilityStarts)
    {
        return $this->setProperty('availabilityStarts', $availabilityStarts);
    }

    /**
     * 
     *
     * @param  $category
     *
     * @return static
     *
     * @see http://schema.org/category
     */
    public function category($category)
    {
        return $this->setProperty('category', $category);
    }

    /**
     * 
     *
     * @param  $eligibleRegion
     *
     * @return static
     *
     * @see http://schema.org/eligibleRegion
     */
    public function eligibleRegion($eligibleRegion)
    {
        return $this->setProperty('eligibleRegion', $eligibleRegion);
    }

    /**
     * 
     *
     * @param  $expectsAcceptanceOf
     *
     * @return static
     *
     * @see http://schema.org/expectsAcceptanceOf
     */
    public function expectsAcceptanceOf($expectsAcceptanceOf)
    {
        return $this->setProperty('expectsAcceptanceOf', $expectsAcceptanceOf);
    }

    /**
     * 
     *
     * @param MediaSubscription|MediaSubscription[] $requiresSubscription
     *
     * @return static
     *
     * @see http://schema.org/requiresSubscription
     */
    public function requiresSubscription($requiresSubscription)
    {
        return $this->setProperty('requiresSubscription', $requiresSubscription);
    }

}
