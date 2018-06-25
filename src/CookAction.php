<?php

namespace Spatie\SchemaOrg;

/**
 * The act of producing/preparing food.
 *
 * @see http://schema.org/CookAction
 *
 * @mixin \Spatie\SchemaOrg\CreateAction
 */
class CookAction extends BaseType
{
    /**
     * A sub property of location. The specific food establishment where the
     * action occurred.
     *
     * @param FoodEstablishment|FoodEstablishment[]|Place|Place[] $foodEstablishment
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
     * @param FoodEvent|FoodEvent[] $foodEvent
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
     * @param Recipe|Recipe[] $recipe
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
