<?php

namespace Spatie\SchemaOrg;

/**
 * A tourist attraction.  In principle any Thing can be a [[TouristAttraction]],
 * from a [[Mountain]] and [[LandmarksOrHistoricalBuildings]] to a
 * [[LocalBusiness]].  This Type can be used on its own to describe a general
 * [[TouristAttraction]], or be used as an [[additionalType]] to add tourist
 * attraction properties to any other type.  (See examples below)
 *
 * @see http://schema.org/TouristAttraction
 *
 * @mixin \Spatie\SchemaOrg\Place
 */
class TouristAttraction extends BaseType
{
    /**
     * A language someone may use with or at the item, service or place. Please
     * use one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]]
     *
     * @param Language|Language[]|string|string[] $availableLanguage
     *
     * @return static
     *
     * @see http://schema.org/availableLanguage
     */
    public function availableLanguage($availableLanguage)
    {
        return $this->setProperty('availableLanguage', $availableLanguage);
    }

    /**
     * Attraction suitable for type(s) of tourist. eg. Children, visitors from a
     * particular country, etc.
     *
     * @param Audience|Audience[]|string|string[] $touristType
     *
     * @return static
     *
     * @see http://schema.org/touristType
     */
    public function touristType($touristType)
    {
        return $this->setProperty('touristType', $touristType);
    }

}
