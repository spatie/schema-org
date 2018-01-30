<?php

namespace Spatie\SchemaOrg;

/**
 * A lodging business, such as a motel, hotel, or inn.
 *
 * @see 
 */
class LodgingBusiness extends LocalBusiness
{
    /**
     * A language someone may use with the item. Please use one of the language
     * codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47).
     * See also [[inLanguage]]
     *
     * @param Language|Language[]|string|string[] $availableLanguage
     *
     * @return static
     *
     * @see 
     */
    public function availableLanguage($availableLanguage)
    {
        return $this->setProperty('availableLanguage', $availableLanguage);
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @param Audience|Audience[] $audience
     *
     * @return static
     *
     * @see 
     */
    public function audience($audience)
    {
        return $this->setProperty('audience', $audience);
    }

    /**
     * The latest someone may check out of a lodging establishment.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $checkoutTime
     *
     * @return static
     *
     * @see 
     */
    public function checkoutTime($checkoutTime)
    {
        return $this->setProperty('checkoutTime', $checkoutTime);
    }

    /**
     * The earliest someone may check into a lodging establishment.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $checkinTime
     *
     * @return static
     *
     * @see 
     */
    public function checkinTime($checkinTime)
    {
        return $this->setProperty('checkinTime', $checkinTime);
    }

    /**
     * Indicates whether pets are allowed to enter the accommodation or lodging
     * business. More detailed information can be put in a text value.
     *
     * @param bool|bool[]|string|string[] $petsAllowed
     *
     * @return static
     *
     * @see 
     */
    public function petsAllowed($petsAllowed)
    {
        return $this->setProperty('petsAllowed', $petsAllowed);
    }

    /**
     * An amenity feature (e.g. a characteristic or service) of the
     * Accommodation. This generic property does not make a statement about
     * whether the feature is included in an offer for the main accommodation or
     * available at extra costs.
     *
     * @param LocationFeatureSpecification|LocationFeatureSpecification[] $amenityFeature
     *
     * @return static
     *
     * @see 
     */
    public function amenityFeature($amenityFeature)
    {
        return $this->setProperty('amenityFeature', $amenityFeature);
    }

    /**
     * An official rating for a lodging business or food establishment, e.g.
     * from national associations or standards bodies. Use the author property
     * to indicate the rating organization, e.g. as an Organization with name
     * such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
     *
     * @param Rating|Rating[] $starRating
     *
     * @return static
     *
     * @see 
     */
    public function starRating($starRating)
    {
        return $this->setProperty('starRating', $starRating);
    }

}
