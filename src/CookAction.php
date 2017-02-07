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
     * A sub property of location. The specific food establishment where the
     * action occurred.
     *
     * @param \Spatie\SchemaOrg\FoodEstablishment|\Spatie\SchemaOrg\Place $foodEstablishment
     *
     * @return static
     *
     * @see http://schema.org/foodEstablishment
     */
    public function foodEstablishment($foodEstablishment)
    {
        return $this->setProperty('foodEstablishment', $foodEstablishment);
    }

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

    /**
     * A sub property of instrument. The recipe/instructions used to perform the
     * action.
     *
     * @param \Spatie\SchemaOrg\Recipe $recipe
     *
     * @return static
     *
     * @see http://schema.org/recipe
     */
    public function recipe($recipe)
    {
        return $this->setProperty('recipe', $recipe);
    }

}
