<?php

namespace Spatie\SchemaOrg;

/**
 * A structured representation of food or drink items available from a
 * FoodEstablishment.
 *
 * @see 
 */
class Menu extends CreativeWork
{
    /**
     * A food or drink item contained in a menu or menu section.
     *
     * @param MenuSection|MenuSection[] $hasMenuItem
     *
     * @return static
     *
     * @see 
     */
    public function hasMenuItem($hasMenuItem)
    {
        return $this->setProperty('hasMenuItem', $hasMenuItem);
    }

    /**
     * A subgrouping of the menu (by dishes, course, serving time period, etc.).
     *
     * @param MenuSection|MenuSection[] $hasMenuSection
     *
     * @return static
     *
     * @see 
     */
    public function hasMenuSection($hasMenuSection)
    {
        return $this->setProperty('hasMenuSection', $hasMenuSection);
    }

}
