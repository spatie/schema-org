<?php

namespace Spatie\SchemaOrg;

/**
 * A food or drink item listed in a menu or menu section.
 *
 * @see http://schema.org/MenuItem
 */
class MenuItem extends CreativeWork
{
    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a
     * product, rent the DVD of a movie, perform a service, or give away tickets
     * to an event.
     *
     * @param \Spatie\SchemaOrg\Offer $offers
     *
     * @return static
     *
     * @see http://schema.org/offers
     */
    public function offers($offers)
    {
        return $this->setProperty('offers', $offers);
    }

    /**
     * Indicates a dietary restriction or guideline for which this recipe or
     * menu item is suitable, e.g. diabetic, halal etc.
     *
     * @param \Spatie\SchemaOrg\RestrictedDiet $suitableForDiet
     *
     * @return static
     *
     * @see http://schema.org/suitableForDiet
     */
    public function suitableForDiet($suitableForDiet)
    {
        return $this->setProperty('suitableForDiet', $suitableForDiet);
    }

    /**
     * Nutrition information about the recipe or menu item.
     *
     * @param \Spatie\SchemaOrg\NutritionInformation $nutrition
     *
     * @return static
     *
     * @see http://schema.org/nutrition
     */
    public function nutrition($nutrition)
    {
        return $this->setProperty('nutrition', $nutrition);
    }

}
