<?php

namespace Spatie\SchemaOrg;

/**
 * A food-related business.
 *
 * @see http://schema.org/FoodEstablishment
 */
class FoodEstablishment extends LocalBusiness
{
    /**
     * Indicates whether a FoodEstablishment accepts reservations. Values can be
     * Boolean, an URL at which reservations can be made or (for backwards
     * compatibility) the strings ```Yes``` or ```No```.
     *
     * @param string|bool $acceptsReservations
     *
     * @return static
     *
     * @see http://schema.org/acceptsReservations
     */
    public function acceptsReservations($acceptsReservations)
    {
        return $this->setProperty('acceptsReservations', $acceptsReservations);
    }

    /**
     * Either the actual menu as a structured representation, as text, or a URL
     * of the menu.
     *
     * @param \Spatie\SchemaOrg\Menu|string $menu
     *
     * @return static
     *
     * @see http://schema.org/menu
     */
    public function menu($menu)
    {
        return $this->setProperty('menu', $menu);
    }

    /**
     * The cuisine of the restaurant.
     *
     * @param string $servesCuisine
     *
     * @return static
     *
     * @see http://schema.org/servesCuisine
     */
    public function servesCuisine($servesCuisine)
    {
        return $this->setProperty('servesCuisine', $servesCuisine);
    }

    /**
     * An official rating for a lodging business or food establishment, e.g.
     * from national associations or standards bodies. Use the author property
     * to indicate the rating organization, e.g. as an Organization with name
     * such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     *
     * @param \Spatie\SchemaOrg\Rating $starRating
     *
     * @return static
     *
     * @see http://schema.org/starRating
     */
    public function starRating($starRating)
    {
        return $this->setProperty('starRating', $starRating);
    }

}
