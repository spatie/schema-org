<?php

namespace Spatie\SchemaOrg;

/**
 * A particular physical business or branch of an organization. Examples of
 * LocalBusiness include a restaurant, a particular branch of a restaurant
 * chain, a branch of a bank, a medical practice, a club, a bowling alley, etc.
 *
 * @see http://schema.org/LocalBusiness
 */
class LocalBusiness extends Organization
{
    /**
     * The larger organization that this local business is a branch of, if any.
     * Not to be confused with (anatomical)[[branch]].
     *
     * @param \Spatie\SchemaOrg\Organization $branchOf
     *
     * @return static
     *
     * @see http://schema.org/branchOf
     */
    public function branchOf($branchOf)
    {
        return $this->setProperty('branchOf', $branchOf);
    }

    /**
     * The currency accepted (in [ISO 4217 currency
     * format](http://en.wikipedia.org/wiki/ISO_4217)).
     *
     * @param string $currenciesAccepted
     *
     * @return static
     *
     * @see http://schema.org/currenciesAccepted
     */
    public function currenciesAccepted($currenciesAccepted)
    {
        return $this->setProperty('currenciesAccepted', $currenciesAccepted);
    }

    /**
     * The general opening hours for a business. Opening hours can be specified
     * as a weekly time range, starting with days, then times per day. Multiple
     * days can be listed with commas ',' separating each day. Day or time
     * ranges are specified using a hyphen '-'.
     * 
     * * Days are specified using the following two-letter combinations:
     * ```Mo```, ```Tu```, ```We```, ```Th```, ```Fr```, ```Sa```, ```Su```.
     * * Times are specified using 24:00 time. For example, 3pm is specified as
     * ```15:00```. 
     * * Here is an example: <code>&lt;time itemprop="openingHours"
     * datetime=&quot;Tu,Th 16:00-20:00&quot;&gt;Tuesdays and Thursdays
     * 4-8pm&lt;/time&gt;</code>.
     * * If a business is open 7 days a week, then it can be specified as
     * <code>&lt;time itemprop=&quot;openingHours&quot;
     * datetime=&quot;Mo-Su&quot;&gt;Monday through Sunday, all
     * day&lt;/time&gt;</code>.
     *
     * @param string $openingHours
     *
     * @return static
     *
     * @see http://schema.org/openingHours
     */
    public function openingHours($openingHours)
    {
        return $this->setProperty('openingHours', $openingHours);
    }

    /**
     * Cash, credit card, etc.
     *
     * @param string $paymentAccepted
     *
     * @return static
     *
     * @see http://schema.org/paymentAccepted
     */
    public function paymentAccepted($paymentAccepted)
    {
        return $this->setProperty('paymentAccepted', $paymentAccepted);
    }

    /**
     * The price range of the business, for example ```$$$```.
     *
     * @param string $priceRange
     *
     * @return static
     *
     * @see http://schema.org/priceRange
     */
    public function priceRange($priceRange)
    {
        return $this->setProperty('priceRange', $priceRange);
    }

}
