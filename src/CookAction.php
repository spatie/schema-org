<?php

namespace Spatie\SchemaOrg;

/**
 * The act of producing/preparing food.
 *
 * @see http://schema.org/CookAction
 */
class CookAction extends CreateAction
{
    /**
     * A sub property of location. The specific food event where the action
     * occurred.
     *
     * @param \Spatie\SchemaOrg\FoodEvent $foodEvent
     *
     * @return static
     *
     * @see http://schema.org/foodEvent
     */
    public function foodEvent($foodEvent)
    {
        return $this->setProperty('foodEvent', $foodEvent);
    }

}
