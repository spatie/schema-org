<?php

namespace Spatie\SchemaOrg;

/**
 * A structured representation of food or drink items available from a
 * FoodEstablishment.
 *
 * @see http://schema.org/Menu
 */
class Menu extends CreativeWork
{
    /**
     * A food or drink item contained in a menu or menu section.
     *
     * @param \Spatie\SchemaOrg\MenuSection $hasMenuItem
     *
     * @return static
     *
     * @see http://schema.org/hasMenuItem
     */
    public function hasMenuItem($hasMenuItem)
    {
        return $this->setProperty('hasMenuItem', $hasMenuItem);
    }

    /**
     * A subgrouping of the menu (by dishes, course, serving time period, etc.).
     *
     * @param \Spatie\SchemaOrg\MenuSection $hasMenuSection
     *
     * @return static
     *
     * @see http://schema.org/hasMenuSection
     */
    public function hasMenuSection($hasMenuSection)
    {
        return $this->setProperty('hasMenuSection', $hasMenuSection);
    }

    /**
     * Additional menu item(s) such as a side dish of salad or side order of
     * fries that can be added to this menu item. Additionally it can be a menu
     * section containing allowed add-on menu items for this menu item.
     *
     * @param \Spatie\SchemaOrg\MenuItem|\Spatie\SchemaOrg\MenuSection $menuAddOn
     *
     * @return static
     *
     * @see http://schema.org/menuAddOn
     */
    public function menuAddOn($menuAddOn)
    {
        return $this->setProperty('menuAddOn', $menuAddOn);
    }

}
