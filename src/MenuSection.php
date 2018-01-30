<?php

namespace Spatie\SchemaOrg;

/**
 * A sub-grouping of food or drink items in a menu. E.g. courses (such as
 * 'Dinner', 'Breakfast', etc.), specific type of dishes (such as 'Meat',
 * 'Vegan', 'Drinks', etc.), or some other classification made by the menu
 * provider.
 *
 * @see 
 */
class MenuSection extends CreativeWork
{
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

}
