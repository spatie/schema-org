<?php

namespace Spatie\SchemaOrg;

/**
 * When a single product is associated with multiple offers (for example, the
 * same pair of shoes is offered by different merchants), then AggregateOffer
 * can be used.
 *
 * @see http://schema.org/AggregateOffer
 *
 * @mixin \Spatie\SchemaOrg\Offer
 */
class AggregateOffer extends BaseType
{
    /**
     * The highest price of all offers available.
     * 
     * Usage guidelines:
     * 
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similiar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
     * decimal point. Avoid using these symbols as a readability separator.
     *
     * @param float|float[]|int|int[]|string|string[] $highPrice
     *
     * @return static
     *
     * @see http://schema.org/highPrice
     */
    public function highPrice($highPrice)
    {
        return $this->setProperty('highPrice', $highPrice);
    }

    /**
     * The lowest price of all offers available.
     * 
     * Usage guidelines:
     * 
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similiar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
     * decimal point. Avoid using these symbols as a readability separator.
     *
     * @param float|float[]|int|int[]|string|string[] $lowPrice
     *
     * @return static
     *
     * @see http://schema.org/lowPrice
     */
    public function lowPrice($lowPrice)
    {
        return $this->setProperty('lowPrice', $lowPrice);
    }

    /**
     * The number of offers for the product.
     *
     * @param int|int[] $offerCount
     *
     * @return static
     *
     * @see http://schema.org/offerCount
     */
    public function offerCount($offerCount)
    {
        return $this->setProperty('offerCount', $offerCount);
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a
     * product, rent the DVD of a movie, perform a service, or give away tickets
     * to an event.
     *
     * @param Offer|Offer[] $offers
     *
     * @return static
     *
     * @see http://schema.org/offers
     */
    public function offers($offers)
    {
        return $this->setProperty('offers', $offers);
    }

}
