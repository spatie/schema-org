<?php

namespace Spatie\SchemaOrg;

/**
 * The act of producing/preparing food.
 *
 * @see 
 */
class CookAction extends CreateAction
{
    /**
     * A sub property of location. The specific food event where the action
     * occurred.
     *
     * @param FoodEvent|FoodEvent[] $foodEvent
     *
     * @return static
     *
     * @see 
     */
    public function foodEvent($foodEvent)
    {
        return $this->setProperty('foodEvent', $foodEvent);
    }

    /**
     * A sub property of location. The specific food establishment where the
     * action occurred.
     *
     * @param FoodEstablishment|FoodEstablishment[]|Place|Place[] $foodEstablishment
     *
     * @return static
     *
     * @see 
     */
    public function foodEstablishment($foodEstablishment)
    {
        return $this->setProperty('foodEstablishment', $foodEstablishment);
    }

    /**
     * A sub property of instrument. The recipe/instructions used to perform the
     * action.
     *
     * @param Recipe|Recipe[] $recipe
     *
     * @return static
     *
     * @see 
     */
    public function recipe($recipe)
    {
        return $this->setProperty('recipe', $recipe);
    }

}
